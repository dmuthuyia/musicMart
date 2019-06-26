<?php
namespace musicMart\Http\Controllers;

use musicMart\Album;
use musicMart\Artist;
use musicMart\Song;

use Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Mail\Mailer;

use Mail;

//use Illuminate\Support\Facades\Request;

class AlbumController extends Controller
{
		
	//fetch add new View
	public function getNew()
	{
		return view('albums.new');
	}

	// post New album
	public function postNew(Request $request)
	{



	if($request->hasFile('album_img')){
		$album_img = $request->file('album_img');
		$filename = time() . '.' . $album_img->getClientOriginalExtension();
		//Image::make($album_img)->resize(300, 300)->save( public_path('/uploads/album/' . $filename ) );
		$album_img->move(public_path().'/uploads/album/', $filename);
	}

		else{

		$filename = 'missing.jpg';
	}


	$this->validate($request, [
		'title' => 'required',
		'description' => 'required',

	]);



	$title = $request['title'];
	$description = $request['description'];
	$url = $request['url'];
	$tags = $request['tags'];

	$album = new Album();
	

	$album->title = $title;
	$album->description = $description;
	$album->url = $url;

	$album->artist_id = 1;
	$album->album_img = $filename;

	$album->save();


	return redirect()->route('albums');


	}

	//Show list
	public function getIndex()
	{
		//$albums = Album::all();
		$album = Album::orderBy('created_at', 'desc')->paginate(12);
		return view('albums.index', ['albums' => $album]);
	}

	//Show page
    public function getShow($id)
    {

		$album = Album::where('id', $id)->firstOrFail();
		$songs = Song::where('album_id', $album->id)->get();
        return view('albums.show')->with(['album' => $album, 'songs' => $songs]);

    }
    

    // Edit album
    public function getEdit($id)
    {
        $album= Album::find($id);
        return view('albums.edit',compact('albums'));
    }
    

	// Store image
	public function getProfilePicture($filename)
	{
		$filename = Storage::disk('local')->get($filename);
		return new Response($file, 200);
		
	}


}