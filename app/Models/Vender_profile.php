<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vender_profile extends Model
{
 protected $fillable =[
    'id',
    'User_id',
    'slug',
    'address',
    'city',
    'stste',
    'pincode',
    'country',
    'is_verfied',
    'contact_email',
    'contact_number',
    'is_active',
    'crested_at',
    'updated_at',
 ];
 protected $hidden =[
    'is_verfied',
    'is_active',
    'crested_at',
    'updated_at',
 ];
 protected $table ='vendor_profile';
}
