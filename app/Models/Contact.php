<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected $fillable = [
        'name',
        'phone',
        'email_id',
        'subject',
        'message',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'contact_us';


}
