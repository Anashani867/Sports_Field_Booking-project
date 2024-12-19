<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\LocationHelper;
use App\Traits\LocationTrait;
use App\Events\BookingCreated;



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


//    public function getLocationNameFromOSM($latitude, $longitude)
//    {
//        $url = "https://nominatim.openstreetmap.org/reverse?lat={$latitude}&lon={$longitude}&format=json";
//
//        $response = Http::get($url);
//
//        if ($response->successful()) {
//            $data = $response->json();
//
//            // تأكد من وجود اسم المكان في البيانات المسترجعة
//            return $data['display_name'] ?? 'Unknown location';
//        }
//
//        return 'Unknown location';
//    }
//    use LocationTrait;

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

//        $field = Field::find($request->input('field_id'));
//
//        if (!$field) {
//            return redirect()->back()->with('error', 'Field not found!');
//        }
//        $latitude = $field->latitude;
//        $longitude = $field->longitude;
//
//        $locationName = $this->getLocationNameFromOSM($latitude, $longitude);


        // Store the new booking in the database
        $booking =  Booking::create([
            'field_id' => $request->input('field_id'),
            'field_name' => $request->input('field_name'),
            'name' => auth()->user()->name,
            'start_date_time' => $startDateTime,
            'end_date_time' => $endDateTime,
            'date_time' => $startDateTime,  // Ensure this field is populated
            'user_id' => auth()->id(), // Associate the booking with the logged-in user
            'latitude' => $request->input('latitude'), // إضافة الموقع
            'longitude' => $request->input('longitude'), // إضافة الموقع
//            'location_name' => $locationName, // Save the location name

        ]);

//        $booking = Booking::create([
//            'user_id' => auth()->id(),
//            'details' => $request->details,
//        ]);

        // إطلاق الحدث بعد إنشاء الحجز
        event(new BookingCreated($booking));

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
