<?php

namespace musicMart\Http\Controllers;

use musicMart\Order;

use musicMart\Cart;
use musicMart\Album;

//use aerobusinessconsultancy\Whistle;
use Illuminate\Support\Facades\Validator;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

class OrderController extends Controller {

  public function postOrder()
  {
    $rules=array(

      'shipping_details'=>'required'
    );

  $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails())
      {
          return Redirect::route('cart')->with('error',' additional details field is required!');
      }

      $user_id = Auth::user()->id;

      $shipping_details = Input::get('shipping_details');


       $cart_albums=Cart::with('albums')->where('user_id','=',$user_id)->get();

       $cart_total=Cart::with('Albums')->where('user_id','=',$user_id)->sum('total');

       if(!$cart_albums){

         return Redirect::route('index')->with('error','Your cart is empty.');
       }



      $order = Order::create(
        array(
        'user_id'=>$user_id,
        'shipping_details'=>$shipping_details,
        'total'=>$cart_total
        ));

      foreach ($cart_albums as $order_albums) {

        $order->orderItems()->attach($order_albums->album_id, array(
          'amount'=>$order_albums->amount,
          'minprice'=>$order_albums->Albums->minprice,
          'total'=>$order_albums->Albums->minprice*$order_albums->amount
          ));

      }
      
      Cart::where('user_id','=',$user_id)->delete();

      return Redirect::route('index')->with('message','Your order processed successfully.');
  }


  public function getIndex(){

    $user_id = Auth::user()->id;

    if(Auth::user()->admin){

      $orders=Order::all();

    }else{

      $orders=Order::with('orderItems')->where('user_id','=',$user_id)->get();
    }

    if(!$orders){

      return Redirect::route('index')->with('error','There is no order.');
    }
    
    return view('albums.order')
        ->with('orders', $orders);
  }
}