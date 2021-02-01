<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartment_ad extends Model
{
    
    public function category () {
        return $this->belongsTo('App\Category');
    }
    public function subcategory () {
        return $this->belongsTo('App\Subcategory');
    }
    public function county () {
        return $this->belongsTo('App\County');
    }
    public function city () {
        return $this->belongsTo('App\City');
    }
    public function package () {
        return $this->belongsTo('App\Package');
    }
    public function user () {
        return $this->belongsTo('App\User');
    }
}
