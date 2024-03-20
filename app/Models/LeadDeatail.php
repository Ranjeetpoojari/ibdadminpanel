<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDeatail extends Model
{
    
    protected $fillable = [
        'user_id',
        'vender_id',
        'product_id',
        'lead_date',
        'lead_time',
        'category_id',
        'subcategory_id',
        'subsubcategory_id',
        'source',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'lead_detail';


}
