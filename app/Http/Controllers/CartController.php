<?php

namespace musicMart\Http\Controllers;


use musicMart\Cart;
use musicMart\Product;
use musicMart\Order;
use Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

//use Illuminate\Support\Facades\Request;

class CartController extends Controller {

  public function postAddToCart()
  {
    $rules=array(

      'amount'=>'required|numeric',
      'product'=>'required|numeric|exists:products,id'
    );

    $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails())
      {
          return Redirect::route('products')->with('error','The product could not added to your cart!');
      }

      $user_id = Auth::user()->id;
      $product_id = Input::get('product');
      $amount = Input::get('amount');

      $product = Product::find($product_id);
      $total = $amount*$product->minprice;

       $count = Cart::where('product_id','=',$product_id)->where('user_id','=',$user_id)->count();

       if($count){

         return Redirect::route('products')->with('error','The product already in your cart.');
       }

      Cart::create(
        array(
        'user_id'=>$user_id,
        'product_id'=>$product_id,
        'amount'=>$amount,
        'total'=>$total
        ));

      return Redirect::route('cart');
  }


  public function getIndex(){

    $user_id = Auth::user()->id;

    $cart_products=Cart::with('products')->where('user_id','=',$user_id)->firstOrFail();

    $cart_total=Cart::with('Products')->where('user_id','=',$user_id)->sum('total');

    if(!$cart_products){

      return Redirect::route('products')->with('error','Your cart is empty');
    }

    return view('products.cart')
            ->with('cart_products', $cart_products)
            ->with('cart_total',$cart_total);
  }

  public function getDelete($id){

    $cart = Cart::find($id)->delete();

    return Redirect::route('cart');
  }

}