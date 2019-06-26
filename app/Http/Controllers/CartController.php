<?php

namespace musicMart\Http\Controllers;


use musicMart\Cart;
use musicMart\Album;
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
      'album'=>'required|numeric|exists:album,id'
    );

    $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails())
      {
          return Redirect::route('album')->with('error','The album could not added to your cart!');
      }

      $user_id = Auth::user()->id;
      $album_id = Input::get('album');
      $amount = Input::get('amount');

      $album = Album::find($album_id);
      $total = $amount*$album->price;

       $count = Cart::where('album_id','=',$album_id)->where('user_id','=',$user_id)->count();

       if($count){

         return Redirect::route('album')->with('error','The album already in your cart.');
       }

      Cart::create(
        array(
        'user_id'=>$user_id,
        'album_id'=>$album_id,
        'amount'=>$amount,
        'total'=>$total
        ));

      return Redirect::route('cart');
  }


  public function getIndex(){

    $user_id = Auth::user()->id;
    //$user_id = "3";
   

    $cart_albums=Cart::with('Albums')->where('user_id','=',$user_id)->get();

    $cart_total=Cart::with('Albums')->where('user_id','=',$user_id)->sum('total');

    //die($cart_albums->Albums->amount);
    
    if(!$cart_albums){

      return Redirect::route('album')->with('error','Your cart is empty');
    }

    return view('albums.cart')
            ->with('cart_albums', $cart_albums)
            ->with('cart_total',$cart_total);
  }

  public function getDelete($id){

    $cart = Cart::find($id)->delete();

    return Redirect::route('cart');
  }

}