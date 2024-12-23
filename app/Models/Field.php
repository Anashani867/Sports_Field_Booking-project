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
}
