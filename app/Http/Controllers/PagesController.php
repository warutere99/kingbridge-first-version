<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Appartment_ad;
use App\House_ad;
use App\Car_ad;
use App\Land_ad;
use App\County;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    
    Public function index (){
        $arr['cars'] = Car_ad::all();
        $arr['cities'] = City::all();
        return view ('pages.index')->with($arr);
        
    }

    public function car_search(Request $request){
        $cars = Car_ad::where([
            ['make', '!=', Null],
            ['model', '!=', Null],
            [ function ($query) use ($request) {
                if (( $make = $request->make)){
                    $query->orWhere('name', 'LIKE', '%' .$make. '%')->get();
                }
            }]

        ])
        ->orderBy("id", "desc")->take(10)->get();
        return view ('pages.car_listing', compact('cars'));
    }

    Public function about(){
        return view ('pages.about');
    }

    Public function services(){
        return view ('pages.services');
    }


    Public function pricing(){
        return view ('pages.pricing');
    }

    Public function car(Request $request, Car_ad $car_ad){
        $arr['car_ad'] = $car_ad;
        return view ('pages.car')->with($arr);
    }


    Public function car_listing(Request $request){
        $cars = Car_ad::where([
            ['make', '!=', Null],
            ['model', '!=', Null],
            [ function ($query) use ($request) {
                if (( $make = $request->make)){
                    $query->orWhere('make', 'LIKE', '%' .$make. '%')->get();
                }
                if (( $model = $request->model)){
                    $query->orWhere('model', 'LIKE', '%' .$model. '%')->get();
                }
            }]

        ])
        ->orderBy("id", "desc")->take(10)->get();
        return view ('pages.cars', compact('cars'));
     
    }


    Public function car_details(Car_ad $car_ad){
        $arr['car'] = $car_ad;
        $arr['cars'] = Car_ad::where('make',$car_ad->make)->orderBy('make','DESC')->get();
        return view ('pages.car_details')->with($arr);
    }

    Public function properties(){
        $arr['appartments'] = Appartment_ad::all();
        $arr['houses'] = House_ad::all();
        $arr['lands'] = Land_ad::all();
        return view ('pages.properties')->with($arr);
    }

    Public function house(){
        $arr['houses'] = House_ad::all();
        return view ('pages.house')->with($arr);
    }

    Public function house_listing(Request $request){
        $houses = house_ad::where([
            ['title', '!=', Null],
            ['city_id', '!=', Null],
            [ function ($query) use ($request) {
                if (( $house = $request->house)){
                    $query->orWhere('title', 'LIKE', '%' .$title. '%')->get();
                }
                if (( $city_id = $request->city_id)){
                    $query->orWhere('city_id', 'LIKE', '%' .$city_id. '%')->get();
                }
            }]

        ])
        ->orderBy("id", "desc")->take(10)->get();
        return view ('pages.houses', compact('houses'));
    }

    Public function house_details(House_ad $house_ad){
        $arr['house_ad'] = $house_ad;
        $arr['houses'] = House_ad::all();
        return view ('pages.house_details')->with($arr);
    }

    Public function appartment_listing(Request $request){
        $appartments = Appartment_ad::where([
            ['title', '!=', Null],
            ['city_id', '!=', Null],
            [ function ($query) use ($request) {
                if (( $appartment = $request->appartment)){
                    $query->orWhere('title', 'LIKE', '%' .$title. '%')->get();
                }
                if (( $city_id = $request->city_id)){
                    $query->orWhere('city_id', 'LIKE', '%' .$city_id. '%')->get();
                }
            }]

        ])
        ->orderBy("id", "desc")->take(10)->get();
        return view ('pages.apartments', compact('appartments'));
    }

    Public function appartment_details(Appartment_ad $appartment_ad){
        $arr['appartment'] = $appartment_ad;
        $arr['appartments'] = Appartment_ad::all();

        return view ('pages.apartment_details')->with($arr);
    }
    Public function land_listing(Request $request){
        $lands = Land_ad::where([
            ['title', '!=', Null],
            ['city_id', '!=', Null],
            [ function ($query) use ($request) {
                if (( $land = $request->land)){
                    $query->orWhere('title', 'LIKE', '%' .$title. '%')->get();
                }
                if (( $city_id = $request->city_id)){
                    $query->orWhere('city_id', 'LIKE', '%' .$city_id. '%')->get();
                }
            }]

        ])
        ->orderBy("id", "desc")->take(10)->get();
        return view ('pages.lands', compact('lands'));
    }

    Public function land_details(land_ad $land_ad){
        $arr['land'] = $land_ad;
        $arr['lands'] = Land_ad::all();
        return view ('pages.land_details')->with($arr);
    }

    Public function contact(){
        return view ('pages.contact');
    }

    Public function postanadd(){
        return view ('pages.postanadd');
    }
    Public function payments(){
        return view ('pages.payments');
    }

    Public function messages(){
        return view ('pages.messages');
    }

    Public function my_ads(){
        return view('pages.my_ads');
    }

    Public function checkout(){
        return view('pages.checkout');
    }

    Public function profile_setting(){
        return view('pages.profile_setting');
    }

    Public function postaddhouse(){
        return view('pages.postaddhouse');
    }

}
