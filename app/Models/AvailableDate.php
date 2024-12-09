<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableDate extends Model
{
    use HasFactory;

    protected $table = 'available_dates';

    protected $fillable = [
        'field_id',
        'start_date_time',
        'end_date_time',
        'date_time',
    ];
}


//namespace App\Models;
//
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//
//class AvailableDate extends Model
//{
//    use HasFactory;
//
//    protected $table = 'available_dates';
//
//    // حدد الأعمدة التي يمكن إدخال البيانات فيها
//    protected $fillable = ['field_id', 'date_time'];
//}
