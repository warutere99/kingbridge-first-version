<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['counties'] = County::all();
        return view ('admin.counties.index') ->with($arr);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, County $county)
    {
        $this->validate($request,[
            'county_name' => 'required',
            'country' => 'required',
            ]);

      $county->county_name = $request->county_name;
      $county->country = $request->country;
      $county->save();
      return redirect() -> route('admin.counties.index')->with('success','New County Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\County  $county
     * @return \Illuminate\Http\Response
     */
    public function show(County $county)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\County  $county
     * @return \Illuminate\Http\Response
     */
    public function edit(County $county)
    {
        $arr['county'] = $county;
        return view('admin.counties.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\County  $county
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, County $county)
    {
        $this->validate($request,[
            'county_name' => 'required',
            'country' => 'required',
            ]);

      $county->county_name = $request->county_name;
      $county->country = $request->country;
      $county->save();
      return redirect() -> route('admin.counties.index')->with('success','New County Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\County  $county
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        County::destroy($id);
        return redirect() -> route('admin.counties.index');
    }
}
