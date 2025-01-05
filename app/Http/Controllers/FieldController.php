<?php

namespace App\Http\Controllers;
use App\Models\Field;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\AvailableDate;
use App\Models\Reservation;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        $totalFields = Field::count();
        return view('admin.manageFields', compact('fields', 'totalFields'));
    }

    public function create()
    {
        return view('admin.createField');
    }

//    public function store(Request $request)
//    {
//        // التحقق من صحة البيانات
//        $request->validate([
//            'field_name' => 'required|string|max:255',   // التحقق من اسم الحقل
//            'location' => 'required|string',            // التحقق من الموقع
//            'availability' => 'required|string',        // التحقق من التوفر
//            'price' => 'required|numeric',              // التحقق من السعر
//            'owner_id' => 'nullable|exists:users,id',   // التحقق من مالك الحقل
//            'admin_id' => 'nullable|exists:users,id',   // التحقق من المسؤول
//            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // التحقق من الصورة
//        ]);
//
//        // إعداد البيانات
//        $data = $request->all();
//
//        // تخزين الصورة إذا تم رفعها
//        if ($request->hasFile('image')) {
//            $path = $request->file('image')->store('images', 'public'); // تخزين الصورة في المجلد العام
//            $data['image'] = $path; // إضافة مسار الصورة إلى البيانات
//        }
//
//        // إنشاء الحقل مع جميع البيانات
//        Field::create([
//            'field_name' => $data['field_name'],
//            'location' => $data['location'],
//            'availability' => $data['availability'],
//            'price' => $data['price'],
//            'owner_id' => $data['owner_id'] ?? null,  // إذا لم يتم توفيره
//            'admin_id' => $data['admin_id'] ?? null,  // إذا لم يتم توفيره
//            'image' => $data['image'] ?? null,        // إذا لم يتم رفع صورة
//        ]);
//
//        // إعادة التوجيه مع رسالة نجاح
////        return redirect()->route('admin.manageFields')->with('success', 'Field added successfully!');
//        return redirect()->back()->with('success', 'Field added successfully!');
//
//    }

//
//Field::create([
//'field_name' => $data['field_name'],
//'location' => $data['location'],
//'start_time' => $data['start_time'],
//'end_time' => $data['end_time'],
//'price' => $data['price'],
//'latitude' => $data['latitude'],
//'longitude' => $data['longitude'],
//'image' => $data['image'] ?? null,
//]);

    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'field_name' => 'required|string|max:255',
            'location' => 'required|string',
            'availability' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'booking_start_date' => 'required|date',
            'booking_end_date' => 'required|date|after_or_equal:booking_start_date',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'person' => 'required|integer',

        ]);

        // Process the data
        $data = $request->all();

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('fields/images', 'public');
            $data['image'] = $path; // Store the path in the database
        }

        // Store the field data in the database
        Field::create([
            'field_name' => $data['field_name'],
            'location' => $data['location'],
            'availability' => $data['availability'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'start_date' => $data['booking_start_date'], // إضافة start_date
            'end_date' => $data['booking_end_date'],
            'price' => $data['price'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'image' => $data['image'] ?? null,
            'person' => $data['person'],

        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Field added successfully!');
    }

    public function edit($id)
    {
        $field = Field::findOrFail($id);
        return view('admin.editField', compact('field'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input data
        $validated = $request->validate([
            'field_name' => 'required|string|max:255',
            'location' => 'required|string',
            'availability' => 'required|string',
            'price' => 'required|numeric|min:0',
            'owner_id' => 'nullable|exists:users,id',
            'admin_id' => 'nullable|exists:users,id',
            'start_date' => 'required|date',  // Add validation for start_date
            'end_date' => 'required|date',    // Add validation for end_date
        ]);

        // Find the field record to update
        $field = Field::findOrFail($id);

        // Update the field with new data
        $field->field_name = $request->input('field_name');
        $field->location = $request->input('location');
        $field->availability = $request->input('availability');
        $field->price = $request->input('price');
        $field->owner_id = $request->input('owner_id');
        $field->admin_id = $request->input('admin_id');
        $field->start_date = $request->input('start_date');  // Set the new start_date
        $field->end_date = $request->input('end_date');      // Set the new end_date

        // Save the updated field
        $field->save();

        // Redirect with a success message
        return redirect()->route('admin.manageFields')->with('success', 'Field updated successfully!');
    }


    public function destroy($id)
    {
        Field::destroy($id);
        return redirect()->route('admin.manageFields')->with('success', 'Field deleted successfully!');
    }




//    public function showFieldDetails($id)
//    {
//        // جلب تفاصيل الملعب من قاعدة البيانات
//        $field = Field::findOrFail($id);
////dd($field);
//        // تمرير البيانات إلى الـ View
//        return view('theme.FieldDetails', compact('field'));
//    }


//    public function showFieldDetails($fieldId)
//    {
//        // جلب بيانات الملعب
//        $field = Field::findOrFail($fieldId);
//
//        // جلب المواعيد المحجوزة لهذا الملعب
//        $bookedDates = Booking::where('field_id', $fieldId)->pluck('date_time')->toArray();
//
//
//        // جلب جميع المواعيد المتاحة مع استبعاد المحجوزة
//        $dates = AvailableDate::whereNotIn('date_time', $bookedDates)
//            ->where('field_id', $fieldId)
//            ->get();
//
//
//        return view('theme.FieldDetails', compact('field', 'dates'));
//    }

//    public function showFieldDetails(Request $request, $fieldId)
//    {
//        // جلب بيانات الملعب
//        $field = Field::findOrFail($fieldId);
//
//        // إضافة السجل الجديد إذا تم إرسال البيانات من النموذج
//        if ($request->has(['start_date_time', 'end_date_time'])) {
//            $request->validate([
//                'start_date_time' => 'required|date',
//                'end_date_time' => 'required|date|after_or_equal:start_date_time',
//            ]);
//
//            AvailableDate::create([
//                'field_id' => $fieldId,
//                'start_date_time' => $request->input('start_date_time'),
//                'end_date_time' => $request->input('end_date_time'),
//            ]);
//        }
//
//        // جلب المواعيد المحجوزة
//        $bookedDates = Booking::where('field_id', $fieldId)->pluck('date_time')->toArray();
//
//        // جلب جميع المواعيد المتاحة مع استبعاد المحجوزة
//        $dates = AvailableDate::whereNotIn('date_time', $bookedDates)
//            ->where('field_id', $fieldId)
//            ->get();
//
//        return view('theme.FieldDetails', compact('field', 'dates'));
//    }


//    public function showFieldDetails(Request $request, $fieldId)
//    {
//        // Retrieve field details
//        $field = Field::findOrFail($fieldId);
//
//        // Add the new availability date if sent from the form
//        if ($request->has(['start_date_time', 'end_date_time'])) {
//            $request->validate([
//                'field_name' => 'required|string|max:255',
//                'latitude' => 'required|numeric',
//                'longitude' => 'required|numeric',
//                'start_date_time' => 'required|date',
//                'end_date_time' => 'required|date|after_or_equal:start_date_time',
//            ]);
//
//            AvailableDate::create([
//                'field_id' => $fieldId,
//                'start_date_time' => $request->input('start_date_time'),
//                'end_date_time' => $request->input('end_date_time'),
//            ]);
//
//        }
//
//        // Retrieve booked dates for the given field
//        $bookedDates = Booking::where('field_id', $fieldId)->pluck('created_at')->toArray();
//
//        // Retrieve available dates excluding booked ones
//        $dates = AvailableDate::whereNotIn('created_at', $bookedDates)
//            ->where('field_id', $fieldId)
//            ->get();
//
//        return view('theme.FieldDetails', compact('field', 'dates'));
//    }

//    public function showFieldDetails($fieldId)
//    {
//        // Retrieve field details
//        $field = Field::findOrFail($fieldId);
//
//        // Ensure the field has the necessary attributes (latitude, longitude)
//        if (!$field->latitude || !$field->longitude) {
//            // Handle the case where the latitude or longitude is missing, maybe with a default or error message
//            return redirect()->back()->with('error', 'Field location details are missing.');
//        }
//
//        // Generate available time slots based on the field's start_time and end_time
//        $startTime = $field->start_time; // Example: '11:11:00'
//        $endTime = $field->end_time;     // Example: '14:22:00'
//
//        $availableTimes = [];
//        $current = strtotime($startTime);
//        $end = strtotime($endTime);
//
//        // Generate available times based on the start and end times, incremented by 30 minutes
//        while ($current < $end) {
//            $availableTimes[] = date('H:i', $current);
//            $current = strtotime('+30 minutes', $current); // Adjust interval if needed
//        }
//
//        // Return the view with the field details and available times
//        return view('theme.FieldDetails', compact('field', 'availableTimes'));
//    }

//    public function showFieldDetails($fieldId, Request $request)
//    {
//        // استرداد تفاصيل الحقل بناءً على المعرف
//        $field = Field::find($fieldId);
//
//        // إذا لم يتم العثور على الحقل، إرجاع رسالة خطأ
//        if (!$field) {
//            return redirect()->back()->with('error', 'Field not found.');
//        }
//
//        // استرداد التاريخ الذي اختاره المستخدم من الطلب (إن وجد)
//        $selectedDate = $request->input('booking_date');
//
//        // التحقق من وجود تاريخ محدد، إذا لم يكن موجودًا نضعه فارغًا
//        if (!$selectedDate) {
//            $selectedDate = null;
//        }
//
//        // استرداد التواريخ المتاحة
//        $today = date('Y-m-d');
//        $endDate = date('Y-m-d', strtotime('+7 days'));
//        $availableDates = [];
//        $currentDate = strtotime($today);
//
//        while ($currentDate <= strtotime($endDate)) {
//            $availableDates[] = date('Y-m-d', $currentDate);
//            $currentDate = strtotime('+1 day', $currentDate);
//        }
//
//        // استرداد الحجوزات المحجوزة بناءً على start_date_time و end_date_time
//        $reservedBookings = Booking::where('field_id', $fieldId)
//            ->where(function ($query) use ($today, $endDate) {
//                // البحث عن الحجوزات التي تتداخل مع الفترة الزمنية
//                $query->whereBetween('start_date_time', [$today, $endDate])
//                    ->orWhereBetween('end_date_time', [$today, $endDate])
//                    ->orWhere(function ($query) use ($today, $endDate) {
//                        // البحث عن الحجوزات التي تبدأ قبل الفترة المحددة وتنتهي بعدها
//                        $query->where('start_date_time', '<', $today)
//                            ->where('end_date_time', '>', $endDate);
//                    });
//            })
//            ->select('start_date_time', 'end_date_time')
//            ->get();
//
//        // استخراج التواريخ المحجوزة من start_date_time و end_date_time
//        $reservedDates = [];
//        foreach ($reservedBookings as $booking) {
//            $startDate = strtotime(date('Y-m-d', strtotime($booking->start_date_time)));
//            $endDate = strtotime(date('Y-m-d', strtotime($booking->end_date_time)));
//
//            // تأكد من أن الحقول ليست NULL قبل إضافتها
//            if ($startDate && $endDate) {
//                while ($startDate <= $endDate) {
//                    $reservedDates[] = date('Y-m-d', $startDate);
//                    $startDate = strtotime('+1 day', $startDate);
//                }
//            }
//        }
//
//        // تحويل المصفوفة إلى مجموعة فريدة من التواريخ المحجوزة
//        $reservedDates = array_unique($reservedDates);
//
//        // تصفية الأيام المتاحة بإزالة الأيام المحجوزة
//        $availableDates = array_diff($availableDates, $reservedDates);
//
//        // توليد قائمة الأوقات المتاحة بناءً على start_time و end_time من الحقل
//        $startTime = $field->start_time; // وقت البداية
//        $endTime = $field->end_time;     // وقت النهاية
//
//        $availableTimes = [];
//        $current = strtotime($startTime);
//        $end = strtotime($endTime);
//
//        while ($current < $end) {
//            $availableTimes[] = date('H:i', $current);
//            $current = strtotime('+60 minutes', $current); // تكرار بمدة ساعة
//        }
//
//        // استرداد الأوقات المحجوزة بناءً على start_date_time و end_date_time
//        $reservedTimes = [];
//        foreach ($reservedBookings as $booking) {
//            $currentReserved = strtotime($booking->start_date_time);
//            $endReserved = strtotime($booking->end_date_time);
//
//            while ($currentReserved < $endReserved) {
//                $reservedTimes[] = date('H:i', $currentReserved);
//                $currentReserved = strtotime('+60 minutes', $currentReserved);
//            }
//        }
//
//        // تصفية الأوقات المتاحة بإزالة الأوقات المحجوزة
//        $availableTimes = array_diff($availableTimes, $reservedTimes);
//
//        // إرجاع العرض مع البيانات
//        return view('theme.FieldDetails', compact('field', 'availableDates', 'availableTimes', 'reservedTimes', 'selectedDate'));
//    }
//    public function showFieldDetails($fieldId, Request $request)
//    {
//        // استرداد تفاصيل الحقل بناءً على المعرف
//        $field = Field::find($fieldId);
//
//        // إذا لم يتم العثور على الحقل، إرجاع رسالة خطأ
//        if (!$field) {
//            return redirect()->back()->with('error', 'Field not found.');
//        }
//
//        // استرداد التاريخ الذي اختاره المستخدم من الطلب (إن وجد)
//        $selectedDate = $request->input('booking_date') ?: null;
//        $today = date('Y-m-d');
//
//        // تحديد تاريخ النهاية بناءً على تاريخ البداية والنهاية المحدد في الحقل
//        $endDate = $field->end_date; // استخدام تاريخ النهاية المحدد في الحقل مباشرة
//
//        // استرداد الحجوزات المحجوزة بناءً على start_date_time و end_date_time
//        $reservedBookings = Booking::where('field_id', $fieldId)
//            ->whereBetween('start_date_time', [$today, $today])
//            ->orWhereBetween('end_date_time', [$today, $today])
//            ->orWhere(function ($query) use ($today) {
//                $query->where('start_date_time', '<', $today)
//                    ->where('end_date_time', '>', $today);
//            })
//            ->select('start_date_time', 'end_date_time')
//            ->get();
//
//        // استخراج التواريخ المحجوزة
//        $reservedDates = $reservedBookings->flatMap(function ($booking) {
//            $startDate = strtotime(date('Y-m-d', strtotime($booking->start_date_time)));
//            $endDate = strtotime(date('Y-m-d', strtotime($booking->end_date_time)));
//
//            $dates = [];
//            while ($startDate <= $endDate) {
//                $dates[] = date('Y-m-d', $startDate);
//                $startDate = strtotime('+1 day', $startDate);
//            }
//            return $dates;
//        })->unique();
//
//        // تحديد تاريخ النهاية بناءً على اليوم الأخير الموجود في البيانات
//        $availableDates = collect(range(0, (strtotime($endDate) - strtotime($today)) / 86400))
//            ->map(fn($days) => date('Y-m-d', strtotime("+$days days", strtotime($today))))
//            ->diff($reservedDates)
//            ->values();
//
//        // توليد الأوقات المتاحة بناءً على start_time و end_time من الحقل
//        $availableTimesByDay = $availableDates->mapWithKeys(function ($date) use ($field) {
//            $availableTimes = [];
//            $current = strtotime($field->start_time);
//            $end = strtotime($field->end_time);
//
//            while ($current < $end) {
//                $availableTimes[] = date('H:i', $current);
//                $current = strtotime('+60 minutes', $current);
//            }
//
//            return [$date => $availableTimes];
//        });
//
//        // استرداد الأوقات المحجوزة لكل يوم
//        $reservedTimesByDay = $reservedBookings->flatMap(function ($booking) {
//            $currentReserved = strtotime($booking->start_date_time);
//            $endReserved = strtotime($booking->end_date_time);
//
//            $times = [];
//            while ($currentReserved < $endReserved) {
//                $times[] = date('H:i', $currentReserved);
//                $currentReserved = strtotime('+60 minutes', $currentReserved);
//            }
//            return $times;
//        });
//
//        // تصفية الأوقات المتاحة لكل يوم بإزالة الأوقات المحجوزة
//        foreach ($availableTimesByDay as $date => $availableTimes) {
//            $availableTimesByDay[$date] = array_diff($availableTimes, $reservedTimesByDay[$date] ?? []);
//        }
//
//        // إذا لم تكن هناك تواريخ متاحة، نعرض رسالة للمستخدم
//        if ($availableDates->isEmpty()) {
//            return redirect()->back()->with('error', 'No available dates for this field.');
//        }
//
//        // إرجاع العرض مع البيانات
//        return view('theme.FieldDetails', compact('field', 'availableDates', 'availableTimesByDay', 'reservedTimesByDay', 'selectedDate'));
//    }


    public function showFieldDetails($fieldId, Request $request)
    {
        $field = Field::find($fieldId);


        if (!$field) {
            return redirect()->back()->with('error', 'Field not found.');
        }

        $selectedDate = $request->input('booking_date') ?: date('Y-m-d'); // تعيين تاريخ اليوم إذا لم يتم تحديده
        $today = date('Y-m-d');
        $endDate = $field->end_date ?? date('Y-m-d', strtotime('+7 days', strtotime($today)));

        // استرداد التواريخ المحجوزة بناءً على اليوم الحالي
        $reservedBookings = Booking::where('field_id', $fieldId)
            ->where(function ($query) use ($today ,$endDate) {
                $query->whereBetween('start_date_time', ["$today 00:00:00", "$today 23:59:59"])
                    ->orWhereBetween('end_date_time', ["$today 00:00:00", "$today 23:59:59"])
                    ->orWhere(function ($q) use ($today , $endDate) {
                        $q->where('start_date_time', '<=', "$endDate 23:59:59")
                            ->where('end_date_time', '>=', "$today 00:00:00");
                    });
            })
            ->select('start_date_time', 'end_date_time')
            ->get();

        $reservedTimesByDay = $reservedBookings->groupBy(function ($booking) {
            return date('Y-m-d', strtotime($booking->start_date_time));
        })->map(function ($bookings) {
            $times = [];
            foreach ($bookings as $booking) {
                $start = strtotime($booking->start_date_time);
                $end = strtotime($booking->end_date_time);

                while ($start < $end) {
                    $times[] = date('H:i', $start);
                    $start = strtotime('+60 minutes', $start);
                }
            }
            return $times;
        });

        $reservedDates = $reservedBookings->flatMap(function ($booking) {
            $startDate = strtotime(date('Y-m-d', strtotime($booking->start_date_time)));
            $endDate = strtotime(date('Y-m-d', strtotime($booking->end_date_time)));

            $dates = [];
            while ($startDate <= $endDate) {
                $dates[] = date('Y-m-d', $startDate);
                $startDate = strtotime('+1 day', $startDate);
            }
            return $dates;
        })->unique();

        $availableDates = collect(range(0, (strtotime($endDate) - strtotime($today)) / 86400))
            ->map(fn($days) => date('Y-m-d', strtotime("+$days days", strtotime($today))))
            ->diff($reservedDates)
            ->values();

        // تصفية الأوقات المتاحة بناءً على الأوقات المحجوزة
        $availableTimesByDay = $availableDates->mapWithKeys(function ($date) use ($field, $reservedTimesByDay) {
            $availableTimes = [];
            $current = strtotime($field->start_time);
            $end = strtotime($field->end_time);

            // إنشاء قائمة الأوقات المتاحة
            while ($current < $end) {
                $availableTimes[] = date('H:i', $current);
                $current = strtotime('+60 minutes', $current);
            }

            // تصفية الأوقات المتاحة بإزالة الأوقات المحجوزة
            $reservedTimes = $reservedTimesByDay[$date] ?? [];
            $availableTimes = collect($availableTimes)->reject(function ($time) use ($reservedTimes) {
                return in_array($time, $reservedTimes);
            });

            return [$date => $availableTimes];
        })->filter(function ($times) {
            return !empty($times); // التأكد من أن هناك أوقات متاحة لهذا التاريخ
        });

        // تحديد التواريخ المتاحة بناءً على الأوقات المتاحة
        $finalAvailableDates = $availableDates->intersect($availableTimesByDay->keys())->values();

        // التأكد من أن التاريخ المحدد لا يتم استبعاده إذا كان متاحًا
        if ($finalAvailableDates->isEmpty()) {
            return redirect()->back()->with('error', 'No available dates for this field.');
        }

        // التأكد من أن الوقت الذي يتم تحديده يظل مرتبطًا بالتاريخ المختار
        if (!in_array($selectedDate, $finalAvailableDates->toArray())) {
            $selectedDate = $finalAvailableDates->first(); // تعيين أول تاريخ متاح في حال عدم تطابق التاريخ المختار
        }

        return view('theme.FieldDetails', compact(
            'field',
            'availableDates',
            'availableTimesByDay',
            'selectedDate',
            'reservedTimesByDay'
        ));
    }




    public function saveLocation(Request $request , $fieldId)
    {
        $field = Field::findOrFail($fieldId);

        $validated = $request->validate([
            'field_name' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // حفظ البيانات في قاعدة البيانات
        $field->update([
            'field_name' => $validated['field_name'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
        ]);

        return back()->with('success', 'Location updated successfully!');
    }

}
