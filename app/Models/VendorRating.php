<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorRating extends Model
{
    protected $fillable = [
        "user_id",
        "rate"	,
        "comment",	
        "vendor_id",	
        "is_active",	
        "created_at",	
        "updated_at",	
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'vendor_rating';
}
