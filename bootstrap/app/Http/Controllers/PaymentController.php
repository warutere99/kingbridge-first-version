<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use App\Appartment_ad;
use App\House_ad;
use App\Car_ad;
use App\Land_ad;
use App\Bnb_ad;
use App\Carshire_ad;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    

    public function cart(){
        $arr['apartment_ads'] = Appartment_ad::where('user_id',Auth::id())->take(10)->get();
        $arr['house_ads'] = House_ad::where('user_id',Auth::id())->take(10)->get();
        $arr['car_ads'] = Car_ad::where('user_id',Auth::id())->take(10)->get();
        $arr['land_ads'] = Land_ad::where('user_id',Auth::id())->take(10)->get();
        $arr['carshire_ads'] = Carshire_ad::where('user_id',Auth::id())->take(10)->get();
        $arr['bnb_ads'] = Bnb_ad::where('user_id',Auth::id())->take(10)->get();

        return view('user.user_cart')->with($arr);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
