<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Car_make;
use Illuminate\Http\Request;

class CarMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $arr['carmakes'] = Car_make::all();
        return view ('admin.carmake.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.carmake.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Car_make $car_make)
    {
        $this->validate($request,[
            'carmake' => 'required',
            ]);
            $car_make->make = $request->carmake;
            $car_make->save();
            return redirect() -> route('admin.carmake.index')->with('success','New carmake Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_make  $car_make
     * @return \Illuminate\Http\Response
     */
    public function show(Car_make $car_make)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_make  $car_make
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_make $carmake)
    {
        $arr['carmakes'] = $carmake;
        return view('admin.carmake.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_make  $car_make
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_make $carmake)
    {
        $this->validate($request,[
            'carmake' => 'required',
            ]);
            $carmake->make = $request->carmake;
            $carmake->save();
            return redirect() -> route('admin.carmake.index')->with('success','Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_make  $car_make
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car_make::destroy($id);
        return redirect() -> route('admin.carmake.index');
    }
}
