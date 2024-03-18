<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenderProfile extends Model
{
 protected $fillable =[
    'User_id',
    'business_name',
    'address',
    'city',
    'stste',
    'pincode',
    'country',
    'is_verfied',
    'contact_email',
    'contact_number',
    'profile_image',
    'is_active',
    'crested_at',
    'updated_at',
 ];
 protected $hidden =[
    'is_active',
    'crested_at',
    'updated_at',
 ];
 protected $table ='vendor_profile';
}
