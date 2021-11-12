<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\County;
use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['cities'] = City::all();
        return view ('admin.cities.index') ->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['counties'] = County::all();
        return view('admin.cities.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, City $city)
    {
        $this->validate($request,[
            'city' => 'required',
            'county_id' => 'required',
            ]);

      $city->city = $request->city;
      $city->county_id = $request->county_id;
      $city->save();
      return redirect() -> route('admin.cities.index')->with('success','New City Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $arr['cities'] = $city;
        $arr['county'] = County::all();
        return view('admin.cities.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->city = $request->city;
        $city->county_id = $request->county_id;
        $city->save();
        return redirect() -> route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::destroy($id);
        return redirect() -> route('admin.cities.index');
    }
}
