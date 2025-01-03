<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'profile_image',
        'gender',
        'country_code',
        'status',



    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function hasVerifiedEmail()
    {
        return !is_null($this->email_verified_at);
    }

    // إذا كان المستخدم قد قام بالتحقق من بريده الإلكتروني
    public function markEmailAsVerified()
    {
        $this->email_verified_at = now();
        $this->save();

        return true;
    }


//
//    public function payments()
//    {
//        return $this->hasMany(Payment::class, 'user_id');
//    }
}
