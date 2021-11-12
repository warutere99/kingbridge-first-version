<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Car_make;
use App\Car_model;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['carmodel'] = Car_model::all();
        return view ('admin.carmodel.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['carmakes'] = Car_make::all();
        return view ('admin.carmodel.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Car_model $carmodel)
    {
        $this->validate($request,[
            'make_id' => 'required',
            'model' => 'required',
            'year' => 'required | max:4',

            ]);

      $carmodel->model = $request->model;
      $carmodel->trim = $request->trim;
      $carmodel->year = $request->year;
      $carmodel->make_id= $request->make_id;
      $carmodel->save();
      return redirect() -> route('admin.carmodel.index')->with('success','New carmodel Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show(Car_model $car_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit (Car_model $carmodel)
    {
        $arr['carmodels'] = $carmodel;
        $arr['carmakes'] = Car_make::all();

        return view('admin.carmodel.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_model $carmodel)
    {
        $this->validate($request,[
            'make_id' => 'required',
            'model' => 'required',
            'year' => 'required | max:4',

            ]);

      $carmodel->model = $request->model;
      $carmodel->trim = $request->trim;
      $carmodel->year = $request->year;
      $carmodel->make_id= $request->make_id;
      $carmodel->save();
      return redirect() -> route('admin.carmodel.index')->with('success','Updated carmodel Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car_model::destroy($id);
        return redirect() -> route('admin.carmodel.index')->with('success','Deleted successfully');
    }
}
