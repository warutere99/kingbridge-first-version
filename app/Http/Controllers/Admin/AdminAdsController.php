<?php

namespace App\Http\Controllers\Admin;

use App\Appartment_ad;
use App\Car_ad;
use App\House_ad;
use App\Http\Controllers\Controller;
use App\Land_ad;
use Illuminate\Http\Request;

class AdminAdsController extends Controller
{
   public function index() {

        $arr['apartment_ads'] = Appartment_ad::all();
        $arr['house_ads'] = House_ad::all();
        $arr['car_ads'] = Car_ad::all();
        $arr['land_ads'] = Land_ad::all();

        return view('admin.ads.index')->with($arr);
   }
   public function apartmentAds(){
      $arr['apartments'] = Appartment_ad::orderBy('id','desc')->paginate(5);
      return view('admin.ads.apartments')->with($arr);
   }
   public function houseAds(){
      $arr['houses'] = House_ad::orderBy('id','desc')->get();
      return view('admin.ads.houses')->with($arr);
   }
   public function landAds(){
      $arr['lands'] = Land_ad::orderBy('id','desc')->get();
      return view('admin.ads.lands')->with($arr);
   }
   public function carAds(){
      $arr['cars'] = Car_ad::orderBy('id','desc')->get();
      return view('admin.ads.cars')->with($arr);
   }

   public function editApartmentAd(Appartment_ad $apartment_ad){
      $arr['apartment'] = $apartment_ad;
      return view('admin.ads.apartment_ad_edit')->with('success',$arr);
   }
   public function editHouseAd(House_ad $house_ad){
      $arr['house'] = $house_ad;
      return view('admin.ads.house_ad_edit')->with('success',$arr);
   }
   public function editLandAd(Land_ad $land_ad){
      $arr['land'] = $land_ad;
      return view('admin.ads.land_ad_edit')->with('success',$arr);
   }
   public function editCarAd(Car_ad $car_ad){
      $arr['car'] = $car_ad;
      return view('admin.ads.car_ad_edit')->with('success',$arr);
   }
}
