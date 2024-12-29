<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserField extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    // إذا كنت بحاجة إلى جدول مخصص
    protected $table = 'user_fields';

    // السماح للحقول القابلة للتعبئة
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
    ];

    // إخفاء الحقول عند الإرجاع (مثل كلمة المرور)
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
