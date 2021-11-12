<?php

namespace App\Http\Controllers;

use App\Appartment_ad;
use App\Order;
use App\Order_detail;
use Closure;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders( Request $request , Appartment_ad $appartment, Order $order, Order_detail $order_detail){

        $userInput = $request->all();

        $this->validate($request,[
            'grant_total' => 'required',
            'appartment_ad_id' => 'required',


            ]);

        $order->grant_total = $request->grant_total;

        $order->save();

            if(count($request->appartment_ad_id) > 0)
            {
            foreach( $userInput['appartment_ad_id'] as $key=>$appartment_ad){
                $data = array(
                    'appartment_ads_id' => $request->appartment_ad_id[$key],
                    'orders_id' => $order->id,
                );
                Order_detail::insert($data );
                }
            } 
            if(count($request->house_ad_id) > 0)
            {
            foreach( $userInput['house_ad_id'] as $key=>$house_ad){
                $data2 = array(
                    'house_ads_id' => $request->house_ad_id[$key],
                    'orders_id' => $order->id,
                );
        

                Order_detail::insert($data2 );
                } 
            }
            
            
            foreach( $userInput['car_ad_id'] as $key=>$car_ad){
                $data4 = array(
                    'car_ads_id' => Null,
                    'orders_id' => $order->id,
                );
                

                Order_detail::insert($data4);
                } 
           
           
            foreach( $userInput['land_ad_id'] as $key=>$land_ad){
                $data3 = array(
                    'land_ads_id' => $request->land_ad_id[$key],
                    'orders_id' => $order->id,
                );
        

                Order_detail::insert($data3);
                } 
           
         
   
        return redirect() -> route('user.dashboard')->with('success','New Order Ad Added');
    }

    
}