<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;
use App\Events\BookingCreated;
use Stripe\Stripe;
use Stripe\PaymentIntent;




class PaymentsController extends Controller
{
//    public function index()
//    {
//        // Fetch payment data with relationships
//        $payments = Payment::with('user', 'booking')->get();
//
//        // Statistics
//        $totalPayments = Payment::count();
//        $completedPayments = Payment::where('payment_status', 'Completed')->count();
//        $failedPayments = Payment::where('payment_status', 'Failed')->count();
//
//        return view('admin.payments', compact('payments', 'totalPayments', 'completedPayments', 'failedPayments'));
//    }}

    public function showPaymentForm()
    {
        return view('checkout');
    }

    public function dashboard()
    {
        $payments = Payment::with('booking', 'user')->get();

        // Summary Stats
        $totalPayments = Payment::sum('amount');
        $pendingPayments = Payment::where('payment_status', 'Pending')->sum('amount');
        $failedPayments = Payment::where('payment_status', 'Failed')->count();

        // Monthly Payments Data
        $monthlyPayments = Payment::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(amount) as total')
            ->groupBy('month')
            ->get();

        // Payment Method Distribution
        $paymentMethods = Payment::selectRaw('payment_method, COUNT(*) as count')
            ->groupBy('payment_method')
            ->get();

        // Recent Payments
        $recentPayments = Payment::latest()->take(10)->get();

        return view('admin.payments', [
            'stats' => [
                'total_payments' => $totalPayments,
                'pending_payments' => $pendingPayments,
                'failed_payments' => $failedPayments,
                'payment_methods' => $paymentMethods,
            ],
            'monthlyPayments' => $monthlyPayments,
            'recentPayments' => $recentPayments,
        ],compact('payments'));
    }


    public function processPayment($paymentMethod, $amount)
    {
        // مثال بسيط لبوابة الدفع (تحتاج إلى تكامل حقيقي مع بوابة الدفع)
        if ($paymentMethod == 'credit_card') {
            // قم بإجراء الدفع باستخدام بطاقة الائتمان
            // هنا يمكنك استخدام واجهة برمجة التطبيقات الخاصة ببوابة الدفع مثل Stripe أو PayPal
            return true;  // إذا كان الدفع ناجحًا
        }

        if ($paymentMethod == 'paypal') {
            // قم بإجراء الدفع باستخدام PayPal
            return true;  // إذا كان الدفع ناجحًا
        }

        return false;  // إذا فشل الدفع
    }


    public function bookAndPay(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $validatedData = $request->validate([
            'field_id' => 'required|exists:fields,id',
            'booking_date' => 'required|date',
            'start_date_time' => 'required|date_format:H:i',
            'end_date_time' => 'required|date_format:H:i|after:start_time',
            'payment_method' => 'required|string|in:credit_card,paypal',
            'amount' => 'required|numeric',
        ]);

        $startDateTime = $request->input('booking_date') . ' ' . $request->input('start_date_time');
        $endDateTime = $request->input('booking_date') . ' ' . $request->input('end_date_time');

        $existingBooking = Booking::where('field_id', $request->input('field_id'))
            ->where(function($query) use ($startDateTime, $endDateTime) {
                $query->whereBetween('start_date_time', [$startDateTime, $endDateTime])
                    ->orWhereBetween('end_date_time', [$startDateTime, $endDateTime]);
            })
            ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'This time slot is already booked!');
        }

        // إنشاء الحجز باستخدام create()
        $booking = Booking::create([
            'field_id' => $request->input('field_id'),
            'user_id' => auth()->id(),
            'booking_date' => $request->input('booking_date'),
            'start_date_time' => $startDateTime,
            'end_date_time' => $endDateTime,
            'amount' => $request->input('amount'),
            'payment_method' => $request->input('payment_method'),
            'payment_status' => 'pending',
            'field_name' => $request->input('field_name'),
            'name' => auth()->user()->name,
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
        ]);





        // تنفيذ عملية الدفع
        $paymentStatus = $this->processPayment($request->payment_method, $request->amount);

        if ($paymentStatus) {
            // تحديث حالة الدفع في جدول الحجز
            $booking->payment_status = 'paid';
            $booking->save();

            // إضافة سجل الدفع في جدول payments
            Payment::create([
                'booking_id' => $booking->id,
                'user_id' => auth()->id(),
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'payment_status' => 'paid',
            ]);
            event(new BookingCreated($booking));

            return redirect()->route('bookTickets')->with('success', 'Booking successful and payment completed!');
//            return redirect()->route('payment.process')->with('success', 'Booking successful and payment completed!');

        }

        // في حال فشل الدفع
        return redirect()->back()->with('error', 'Payment failed, please try again!');
    }

//public function processPayment(Request $request)
//{
//    $validatedData = $request->validate([
//        'payment_method_id' => 'required',
//    ]);
//
//    Stripe::setApiKey(env('STRIPE_SECRET'));
//
//    try {
//        // إنشاء طلب دفع جديد باستخدام payment_method_id
//        $paymentIntent = PaymentIntent::create([
//            'amount' => $request->amount * 100,  // المبلغ بالـ cents
//            'currency' => 'usd',  // العملة
//            'payment_method' => $request->payment_method_id,
//            'confirmation_method' => 'manual',
//            'confirm' => true,
//        ]);
//
//        // إذا تم الدفع بنجاح، نكمل الحجز
//        if ($paymentIntent->status === 'succeeded') {
//            // إنشاء الحجز هنا
//            $booking = Booking::create([
//                'field_id' => $request->field_id,
//                'user_id' => auth()->id(),
//                'start_date_time' => $request->start_date_time,
//                'end_date_time' => $request->end_date_time,
//                'payment_status' => 'paid',
//                'amount' => $request->amount,
//                'payment_method' => 'stripe',
//            ]);
//
//            return redirect()->route('booking.success')->with('success', 'Payment successful and booking completed!');
//        }
//
//    } catch (\Exception $e) {
//        return back()->with('error', 'Payment failed: ' . $e->getMessage());
//    }
//
//}
}
