<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'user_id',
        'amount',
        'payment_method',
        'payment_status',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getDashboardStats()
    {
        return [
            'total_payments' => self::where('payment_status', 'Completed')->sum('amount'),
            'pending_payments' => self::where('payment_status', 'Pending')->sum('amount'),
            'failed_payments' => self::where('payment_status', 'Failed')->count(),
            'payment_methods' => self::where('payment_status', 'Completed')
                ->select('payment_method', \DB::raw('count(*) as count'))
                ->groupBy('payment_method')
                ->get()
        ];
    }
}
