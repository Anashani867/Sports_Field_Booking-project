<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    // دالة التحقق من توافر الأوقات
    public function checkAvailability(Request $request)
    {
        $start_time = $request->input('start_time'); // جلب وقت البداية المدخل من المستخدم
        $end_time = $request->input('end_time'); // جلب وقت النهاية المدخل من المستخدم

        // التحقق من وجود حجز يتقاطع مع الوقت الذي يحاول المستخدم حجزه
        $conflictingReservations = Reservation::where(function ($query) use ($start_time, $end_time) {
            $query->whereBetween('start_time', [$start_time, $end_time]) // حالة تقاطع في بداية الحجز
            ->orWhereBetween('end_time', [$start_time, $end_time]) // حالة تقاطع في نهاية الحجز
            ->orWhere(function ($query) use ($start_time, $end_time) {
                $query->where('start_time', '<', $start_time) // إذا كان وقت البداية القديم قبل الجديد
                ->where('end_time', '>', $end_time); // وإذا كانت نهاية الحجز القديم بعد الجديد
            });
        })->exists(); // نتحقق إذا كان هناك تعارض

        // إذا كان هناك تعارض في الأوقات
        if ($conflictingReservations) {
            return response()->json(['message' => 'The selected time is already reserved.'], 400); // الوقت محجوز
        }

        // إذا كان الوقت متاحًا
        return response()->json(['message' => 'The selected time is available.']); // الوقت متاح
    }
}
