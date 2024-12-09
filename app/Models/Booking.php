<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id',
        'field_id',
        'name',
        'start_date_time',
        'end_date_time',
        'date_time',
        'status',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    // In app/Models/User.php



//    public function payments()
//    {
//        return $this->hasMany(Payment::class, 'booking_id');
//    }
}
