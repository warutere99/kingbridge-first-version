<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
        'county_name',
    ];
    public function city () {
        
        return $this->hasMany('App\City');
    }
    public function appartment_ad(){
        return $this->hasMany('App\Appartment_ad');
    }

}
