<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_model extends Model
{   
    public $table='car_models';
    use HasFactory;
    public function carmake () {
        return $this->belongsTo('App\Car_make', 'make_id');
    }
    public function car_ad(){
        return $this->hasMany('App\Car_ad');
    }
}
