<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city',
    ];
    public function county(){
        
        return $this->belongsTo('App\County');
    }
    public function appartment_ad(){
        return $this->hasMany('App\Appartment_ad');
    }
    public function house_ad(){
        return $this->hasMany('App\House_ad');
    }
    public function bnb_ad(){
        return $this->hasMany('App\Bnb_ad');
    }
    public function user () {
        return $this->belongsTo('App\User');
    }

}
