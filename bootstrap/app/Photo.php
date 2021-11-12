<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['appartment_ads_id','houses_ads_id','cars_ads_id','lands_ads_id', 'images'];

    public function appartment_ad()
    {
        return $this->belongsTo('App\Appartment_ad');
    }
    public function house_ad()
    {
        return $this->belongsTo('App\House_ad');
    }
}
