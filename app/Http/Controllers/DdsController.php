<?php

namespace musicMart\Http\Controllers;

use musicMart\Artist;
use musicMart\Contact;
use musicMart\Album;
use musicMart\Genre;
use musicMart\Song;
use Illuminate\Mail\Mailer;

use Mail;

use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use View;
use Illuminate\Support\Facades\Input;

class DdsController extends Controller
{
	public function getHome(){

		//$categories = Genrey::all(['id', 'title']);
		//$categories = Genrey::all();
        //$interested = User::all()->get()->random(4);
	   // $interested = User::all()->random(4);
	   
	   	//$albums = Album::all();
		$albums = Album::orderBy('created_at', 'desc')->paginate(12);
		return view('albums.index', ['albums' => $albums]);

	}


	public function getAboutus(){

		
		return view('dds.aboutUs');

	}



	public function getContact(){
		
		return view('dds.contact');

	}


	public function postContact(Request $request){

		$this->validate($request, [
			'email' => 'required|email',
			'name' => 'required|min:2',
			'subject' => 'required|min:4',
			'message' => 'required|min:10']);

		$thisdata = array(
			'email' => $request->email,
			'name' => $request->name,
			'phone' => $request->phone,
			'subject' => $request->subject,
			'themessage' => $request->message,

		);

		Mail::send('mails.contact', $thisdata, function($message) use ($thisdata){
			$message->from($thisdata['email']);
			$message->to('dennis.m@infohtechict.com');
			$message->subject($thisdata['subject']);

		});
		
		return redirect()->route('home');

	}


//******************************************************************






//******************************************************************
//products




//******************************************************************
//products stamps and seals


	public function getFeatured(){
		
		$featured = Album::where('featured', '=', 1)->paginate(6);


		return view('products.featured')->with(['featured' => $featured]);


	}



	public function getBestselling(){
		
		$bestselling = Album::where('best_selling', '=', 1)->paginate(6);


		return view('products.bestselling')->with(['bestselling' => $bestselling]);

	}



	public function getNewarrivals(){
		
		$newarrivals = Album::where('new_arrivals', '=', 1)->paginate(6);


		return view('products.newarrivals')->with(['newarrivals' => $featured]);

	}



}