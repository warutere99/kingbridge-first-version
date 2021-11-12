<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arr['subcategories'] = Subcategory::all();
        return view ('admin.subcategories.index') ->with($arr);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['categories'] = Category::all();
        return view('admin.subcategories.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subcategory $subcategory)
    {
        $this->validate($request,[
            'subcategory_name' => 'required',
            'category_id' => 'required',
            ]);

      $subcategory->subcategory_name = $request->subcategory_name;
      $subcategory->category_id = $request->category_id;
      $subcategory->save();
      return redirect() -> route('admin.subcategories.index')->with('success','New SubCategory Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $arr['subcategory'] = $subcategory;
        $arr['categories'] = Category::all();
        return view('admin.subcategories.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
      $subcategory->subcategory_name = $request->subcategory_name;
      $subcategory->category_id = $request->category_id;
      $subcategory->save();
      return redirect() -> route('admin.subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect() -> route('admin.subcategories.index');
    }
}
