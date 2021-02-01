<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'secondname',
        'email',
        'password',
        'phone_number',
        'avatar_image',
        'vefiried_status',
        'social_link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    public function appartment_ad(){
        return $this->hasMany('App\Appartment_ad');
    }
    public function house_ad(){
        return $this->hasMany('App\House_ad');
    }
    public function land_ad(){
        return $this->hasMany('App\Land_ad');
    }
    public function car_ad(){
        return $this->hasMany('App\Car_ad');
    }
    
    
}
