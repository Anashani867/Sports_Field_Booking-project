<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Require authentication for all methods
    }

    public function index()
    {
        $bookings = Booking::where('user_id', auth()->id())->with('field')->get(); // Eager load 'field' relation
        return view('theme.bookTickets', compact('bookings'));
    }


    public function bookTickets(Request $request)
    {
        // Validate the data coming from the form
        $validated = $request->validate([
            'field_id' => 'required|integer',
            'booking_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time', // Ensure end time is after start time
        ]);

        // Combine date and time to create full DateTime
        $startDateTime = $request->input('booking_date') . ' ' . $request->input('start_time');
        $endDateTime = $request->input('booking_date') . ' ' . $request->input('end_time');

        // Check if the desired time slot is already booked
        $existingBooking = Booking::where('field_id', $request->input('field_id'))
            ->where(function($query) use ($startDateTime, $endDateTime) {
                $query->whereBetween('start_date_time', [$startDateTime, $endDateTime])
                    ->orWhereBetween('end_date_time', [$startDateTime, $endDateTime]);
            })
            ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('error', 'This time slot is already booked!');
        }


        // Store the new booking in the database
        Booking::create([
            'field_id' => $request->input('field_id'),
            'name' => auth()->user()->name,
            'start_date_time' => $startDateTime,
            'end_date_time' => $endDateTime,
            'date_time' => $startDateTime,  // Ensure this field is populated
            'user_id' => auth()->id(), // Associate the booking with the logged-in user
        ]);

        // Redirect back with success message
        return redirect()->route('bookTickets')->with('success', 'Booking successful!');
    }




//        public function bookTickets(Request $request)
//        {
//            $bookings = Booking::all();
//            $fieldId = $request->field_id;
//            $field = Field::findOrFail($fieldId);
//            return view('theme.bookTickets', compact('field', 'bookings'));
//    //      return view('theme.bookTickets');
//        }

//    public function store(Request $request)
//    {
//        // تحقق من صحة البيانات
//        $validatedData = $request->validate([
//            'field_id' => 'required|exists:fields,id', // تأكد من وجود الملعب في الجدول
//            'booking_date' => 'required|date',
//            'booking_time' => 'required',
//        ]);
//
//        // دمج التاريخ والوقت في صيغة timestamp
//        $dateTime = $request->input('booking_date') . ' ' . $request->input('booking_time');
//
//        // إضافة الحجز إلى قاعدة البيانات
//        Booking::create([
//            'field_id' => $validatedData['field_id'],
//            'date_time' => $dateTime, // استخدام التاريخ والوقت المدمج
//            'status' => 'Pending', // أو أي قيمة افتراضية تريدها
//            'amount' => 0, // إذا كان لديك هذا الحقل
//        ]);
//
////        // إعادة توجيه مع رسالة نجاح
//        return redirect()->back()->with('success', 'Booking has been successfully added!');
////        return view('bookTickets');
//    }


}
