<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BounceRate extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'rate'];

}
