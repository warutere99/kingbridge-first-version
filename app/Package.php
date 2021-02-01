<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
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
