<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['packages'] = Package::all();
        return view ('admin.packages.index') ->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Package $package)
    {
        $this->validate($request,[
            'package_name' => 'required',
            'package_amount' => 'required',
            'package_duration' => 'required',
            'package_description' => 'required',
            
            ]);

      $package->package_name = $request->package_name;
      $package->package_amount = $request->package_amount;
      $package->package_duration = $request->package_duration;
      $package->package_featuring = $request->package_feature;
      $package->description = $request->package_description;
      $package->save();
      return redirect() -> route('admin.packages.index')->with('success','New Package Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $arr['package'] = $package;
        return view ('admin.packages.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $this->validate($request,[
            'package_name' => 'required',
            'package_amount' => 'required',
            'package_duration' => 'required',
    
            ]);

      $package->package_name = $request->package_name;
      $package->package_amount = $request->package_amount;
      $package->package_duration = $request->package_duration;
      $package->package_featuring = $request->package_feature;
      $package->description = $request->package_description;
      $package->save();
      return redirect() -> route('admin.packages.index')->with('success','Package Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        package::destroy($id);
        return redirect() -> route('admin.packages.index')->with('success','Package Has been successfuly deleted');
    }
}
