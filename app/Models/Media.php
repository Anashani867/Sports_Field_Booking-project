<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'type', 'user_id','title','description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
