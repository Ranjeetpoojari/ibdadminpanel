<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use Notifiable;
    
    protected $guard = "users";
    protected $fillable = [
      'id',
      'firstname',
      'lastname',
      'profile_img',
      'email',
      'mobile',
      'password',
      'role_id',
      'is_active',
      'created_at',
      'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'email_verified_at',
        'password',
        'role_id',
        'is_active',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $table = 'users';
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setPasswordAttribute($value){
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
