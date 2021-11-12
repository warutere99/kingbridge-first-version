<?php

namespace App\Http\Controllers;


use App\Appartment_ad;
use App\Category;
use App\Subcategory;
use App\County;
use App\City;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;


class AppartmentAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        
        $arr['appartment_ads'] = Appartment_ad::all();
        return view ('user.appartment_ads.index') ->with($arr);
    }
    public function category(){
        $arr['categories'] = Category::all();
        $arr['subcategories'] = Subcategory::all();
        $arr['counties'] = County::all();
        $arr['cities'] = City::all();
        return view('user.appartment_ads.create')->with($arr);
    }
    public function subcategory(Request $request)
    {
       $data = Subcategory::select('subcategory_name','id')->where('category_id',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success
    }
    public function city(Request $request)
    {
       $data = City::select('city','id')->where('county_id',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['categories'] = Category::all();
        $arr['subcategories'] = Subcategory::all();
        $arr['counties'] = County::all();
        $arr['cities'] = City::all();
        return view ('user.appartment_ads.create') ->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Appartment_ad $appartment_ad)
    {
        $this->validate($request,[
            'title' => 'required',
            'ads_type' => 'required',
            'real_state_type' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'square_meters' => 'required',
            'amenities' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'county_id' => 'required',
            'city_id' => 'required',
            'user_id' => 'required',
            'package_id' => 'required',
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,bmp,png,jpg|max:2000',

            ]);
         
            $images = $request->File('photos');
            $count = 0;
            if($request->File('photos')){
                foreach($images as $item){
                    if($count < 4){
                        $var = date_create();
                        $date = date_format($var, 'Ymd');
                        $imageName = $date.'-'.$item->getClientOriginalName();
                        $item->move(public_path().'/photos/', $imageName);
                        $url = URL::to("/").'/photos/'.$imageName;
                        $arr[] = $url;
                        $count++;

                    }
                }
                $images = implode(",", $arr);

            $appartment_ad->title = $request->title;
            $appartment_ad->ads_type = $request->ads_type;
            $appartment_ad->real_state_type = $request->real_state_type;
            $appartment_ad->condition = $request->condition;
            $appartment_ad->price = $request->price;
            $appartment_ad->bedroom = $request->bedroom;
            $appartment_ad->bathroom = $request->bathroom;
            $appartment_ad->square_meters = $request->square_meters;
            $appartment_ad->amenities = $request->amenities;
            $appartment_ad->description = $request->description;
            $appartment_ad->category_id = $request->category_id;
            $appartment_ad->subcategory_id = $request->subcategory_id;
            $appartment_ad->county_id = $request->county_id;
            $appartment_ad->city_id = $request->city_id;
            $appartment_ad->user_id = $request->user_id;
            $appartment_ad->package_id = $request->package_id;
            $appartment_ad->photos = $images;
            $appartment_ad->save();
            }
             

            return redirect() -> route('appartment_ads.index')->with('success','New Appartment Ad Added');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appartment_ad  $appartment_ad
     * @return \Illuminate\Http\Response
     */
    public function show(Appartment_ad $appartment_ad)
    {
        $arr['ad'] = $appartment_ad;
        $arr['categories'] = Category::select('category_name','id')->where('id',1)->get();
        $arr['subcategories'] = Subcategory::select('subcategory_name','id')->where('category_id',1)->get();
        $arr['counties'] = County::all();
        $arr['cities'] = City::all();
        return view('user.appartment_ads.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appartment_ad  $appartment_ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartment_ad $appartment_ad)
    {
        $arr['appartment_ads'] = $appartment_ad;
        $arr['categories'] = Category::select('category_name','id')->where('id',1)->get();
        $arr['subcategories'] = Subcategory::select('subcategory_name','id')->where('category_id',1)->get();
        $arr['counties'] = County::all();
        $arr['cities'] = City::all();
        return view('user.appartment_ads.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartment_ad  $appartment_ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartment_ad $appartment_ad)
    {
        $this->validate($request,[
            'title' => 'required',
            'ads_type' => 'required',
            'real_state_type' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'square_meters' => 'required',
            'amenities' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'county_id' => 'required',
            'city_id' => 'required',
            'user_id' => 'required',
            'package_id' => 'required',
            'photos' => 'required',

            ]);

            
            $appartment_ad->title = $request->title;
            $appartment_ad->ads_type = $request->ads_type;
            $appartment_ad->real_state_type = $request->real_state_type;
            $appartment_ad->condition = $request->condition;
            $appartment_ad->price = $request->price;
            $appartment_ad->bedroom = $request->bedroom;
            $appartment_ad->bathroom = $request->bathroom;
            $appartment_ad->square_meters = $request->square_meters;
            $appartment_ad->amenities = $request->amenities;
            $appartment_ad->description = $request->description;
            $appartment_ad->category_id = $request->category_id;
            $appartment_ad->subcategory_id = $request->subcategory_id;
            $appartment_ad->county_id = $request->county_id;
            $appartment_ad->city_id = $request->city_id;
            $appartment_ad->user_id = $request->user_id;
            $appartment_ad->package_id = $request->package_id;
            $appartment_ad->photos = $request->photos;
            $appartment_ad->save();
            return redirect() -> route('appartment_ads.index')->with('success','New Appartment Ad Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appartment_ad  $appartment_ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appartment_ad::destroy($id);
        return redirect() -> route('appartment_ads.index')->with('success','Deleted Succesfully');;
    }
}
