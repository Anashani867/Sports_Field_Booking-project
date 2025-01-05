<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Field extends Model
{
    use HasFactory;
    protected $table = 'fields';

    // الحقول القابلة للتعبئة
    protected $fillable = [
        'field_name',
        'location',
        'availability',
        'start_time',
        'end_time',
        'price',
        'image',
        'start_date',
        'end_date',
        'owner_id',
        'admin_id',
        'status',
        'latitude',
        'longitude',
        'isFullyBooked',
        'person'
    ];


    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }


    public function bookings()
    {
        return $this->hasMany(Booking::class, 'field_id');
    }

    public function getIsFullyBookedAttribute()
    {
        $today = date('Y-m-d');

        // السعة المتاحة للحقل (تحدد بناءً على الأيام المتاحة)
        $endDate = $this->end_date ?? date('Y-m-d', strtotime('+7 days', strtotime($today))); // تحديد تاريخ نهاية الأيام المتاحة
        $availableDays = (new \DateTime($today))->diff(new \DateTime($endDate))->days + 1; // حساب عدد الأيام المتاحة (بما في ذلك اليوم الحالي)
        $totalCapacity = $this->capacity * $availableDays ; // السعة الكلية = السعة اليومية × عدد الأيام المتاحة

        // عدّ الحجوزات التي تقع ضمن الفترة الزمنية المتاحة
        $reservedBookingsCount = $this->bookings()
            ->where(function ($query) use ($today, $endDate) {
                $query->whereBetween('start_date_time', ["$today 00:00:00", "$endDate 23:59:59"])
                    ->orWhereBetween('end_date_time', ["$today 00:00:00", "$endDate 23:59:59"]);
            })
            ->count();

        // مقارنة العدد مع السعة الكلية للحقل
        return $reservedBookingsCount >= $totalCapacity;
    }



}
