<?php

namespace musicMart\Http\Controllers;

use musicMart\Order;

use musicMart\Cart;
use musicMart\Product;

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


       $cart_products=Cart::with('products')->where('user_id','=',$user_id)->get();

       $cart_total=Cart::with('Products')->where('user_id','=',$user_id)->sum('total');

       if(!$cart_products){

         return Redirect::route('index')->with('error','Your cart is empty.');
       }



      $order = Order::create(
        array(
        'user_id'=>$user_id,
        'shipping_details'=>$shipping_details,
        'total'=>$cart_total
        ));

      foreach ($cart_products as $order_products) {

        $order->orderItems()->attach($order_products->product_id, array(
          'amount'=>$order_products->amount,
          'minprice'=>$order_products->Products->minprice,
          'total'=>$order_products->Products->minprice*$order_products->amount
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
    
    return view('products.order')
        ->with('orders', $orders);
  }
}