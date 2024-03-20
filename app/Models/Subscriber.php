<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        "email_id",
        "created_at",	
        "updated_at",	
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'subscribers';
}
