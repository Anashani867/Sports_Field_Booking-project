<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait
use Illuminate\Foundation\Auth\User as AuthenticateAdmin;

class Admin extends AuthenticateAdmin
{
    use HasFactory; // Use the HasFactory trait

    protected $guard = 'admin'; // Match the guard in auth.php

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
