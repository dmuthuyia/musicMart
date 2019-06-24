<?php

namespace musicMart\Http\Controllers;

use musicMart\Album;

use Image;
use musicMart\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class AlbumController extends Controller {

  public function getIndex()
  {

    //$album = Album::all();
    $album = Album::orderBy('created_at', 'desc')->paginate(6);
    //$album  = Album::where('category_id', '<>', 6)->orderByRaw("RAND()")->paginate(6);


    //return View::make('album_list')->with('album',$album);
    return view('album.index')->with('album', $album);


  }




		public function getNew()
		{

	    	$categories = Category::all();

			return view('album.new')->with(['categories' => $categories]);
		}


	public function postNew(Request $request)
		{




			$this->validate($request, [
            	'title' => 'required',
            	
            	'minprice' => 'required',

			]);







			$title = $request['title'];
            $description = $request['description'];
            $minprice = $request['minprice'];
            $category = $request['category'];
            $subcategory = $request['subcategory'];
           



			$album = new Album();
			

			$album->title = $title;
			$album->description = $description;		
			$album->minprice = $minprice;
			//$album->user_id = Auth::user()->id;
			$album->category_id = $category;
			
			$album->producer_id = 1;

			if ( !empty ( $subcategory ) ) {
				
			    $album->subcategory_id = $subcategory;
			}



				if($request->hasFile('album_img')){
		    		$album_img = $request->file('album_img');
		    		$filename = substr(pathinfo($album_img->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img->getClientOriginalExtension();

		    		//Image::make($album_img)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img->move(public_path().'/uploads/album/', $filename);

		    $album->album_img = $filename;

		    	}



				if($request->hasFile('album_img2')){
		    		$album_img2 = $request->file('album_img2');
		    		$filename2 = substr(pathinfo($album_img2->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img2->getClientOriginalExtension();

		    		//Image::make($album_img2)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img2->move(public_path().'/uploads/album/', $filename2);

			$album->album_img2 = $filename2;
		    	}


				if($request->hasFile('album_img3')){
		    		$album_img3 = $request->file('album_img3');
		    		$filename3 = substr(pathinfo($album_img3->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img3->getClientOriginalExtension();
		    		//Image::make($album_img3)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img3->move(public_path().'/uploads/album/', $filename3);

		    $album->album_img3 = $filename3;
		    	}




            $album->featured = $request->has('featured');
			$album->best_selling = $request->has('best_selling');
			$album->new_arrival = $request->has('new_arrival');

			$album->save();

	
			return redirect()->route('album');


		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $album = Album::where('id', $id)->firstOrFail();


        $subcategory = $album->subcategory_id;
        $me = $album->id;

        $interestedRecs = Album::where('subcategory_id', '=', $subcategory)->where('id', '!=', $me)->get()->count();
       
        if($interestedRecs >= 3){

		    $interested = Album::where('subcategory_id', '=', $subcategory)->where('id', '!=', $me)->get()->random(3);

		} else {
			$interested = Album::where('subcategory_id', '=', $subcategory)->where('id', '!=', $me)->get();
		}


	    $categories = Category::all();



        return view('album.show')->with(['album' => $album, 'interested' => $interested, 'categories' => $categories]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $album= Album::find($id);
        return view('album.edit',compact('album'));
    }


	public function updateAlbum(Request $request)
		{




			$this->validate($request, [
            	'title' => 'required',
            	
            	'minprice' => 'required',
            	
			]);


			$methis = $request['id'];

			$title = $request['title'];
            $description = $request['description'];
            $minprice = $request['minprice'];
            $category = $request['category'];
            $subcategory = $request['subcategory'];
           

			$album = Album::where('id', '=', $methis)->first();
			//$album = Album::findOrFail($methis);
			

			$album->title = $title;
			$album->description = $description;		
			$album->minprice = $minprice;
			//$album->user_id = Auth::user()->id;
			$album->category_id = $category;
			$album->subcategory_id = $subcategory;
			$album->producer_id = 1;



				if($request->hasFile('album_img')){
		    		$album_img = $request->file('album_img');
		    		$filename = substr(pathinfo($album_img->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img->getClientOriginalExtension();

		    		//Image::make($album_img)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img->move(public_path().'/uploads/album/', $filename);

		    $album->album_img = $filename;

		    	}



				if($request->hasFile('album_img2')){
		    		$album_img2 = $request->file('album_img2');
		    		$filename2 = substr(pathinfo($album_img2->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img2->getClientOriginalExtension();

		    		//Image::make($album_img2)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img2->move(public_path().'/uploads/album/', $filename2);

			$album->album_img2 = $filename2;
		    	}


				if($request->hasFile('album_img3')){
		    		$album_img3 = $request->file('album_img3');
		    		$filename3 = substr(pathinfo($album_img3->getClientOriginalName(), PATHINFO_FILENAME), 0, 18) . time() . '.' . $album_img3->getClientOriginalExtension();
		    		//Image::make($album_img3)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		    	    $album_img3->move(public_path().'/uploads/album/', $filename3);

		    $album->album_img3 = $filename3;
		    	}



            $album->featured = $request->has('featured');
			$album->best_selling = $request->has('best_selling');
			$album->new_arrival = $request->has('new_arrival');

			$album->save();

	
			return redirect::back();
		}



    public function deleteAlbum($id)
    {
        //$album= Album::find($id);
        //$album->delete();

        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('album');
    }





}