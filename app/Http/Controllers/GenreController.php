<?php
namespace musicMart\Http\Controllers;

use musicMart\Genre;
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

class GenreController extends Controller
{
		
	//fetch add new View
	public function getNew()
	{
		return view('genres.new');
	}

	// post New genre
	public function postNew(Request $request)
	{



	if($request->hasFile('genre_img')){
		$genre_img = $request->file('genre_img');
		$filename = time() . '.' . $genre_img->getClientOriginalExtension();
		//Image::make($genre_img)->resize(300, 300)->save( public_path('/uploads/genre/' . $filename ) );
		$genre_img->move(public_path().'/uploads/genre/', $filename);
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
	

	$genre = new Genre();
	

	$genre->title = $title;
	$genre->description = $description;
	$genre->url = $url;

	$genre->genre_img = $filename;

	$genre->save();


	return redirect()->route('magazine');


	}

	//Show list
	public function getIndex()
	{
		//$genres = Genre::all();
		$genres = Genre::orderBy('created_at', 'desc')->paginate(12);
		return view('genres.index', ['genres' => $genres]);
	}

	//Show page
    public function getShow($id)
    {

        $genres = Genre::where('id', $id)->firstOrFail();
        return view('genres.show')->with(['genres' => $genres]);

    }
    

    // Edit genre
    public function getEdit($id)
    {
        $genre= Genre::find($id);
        return view('genre.edit',compact('genre'));
    }
    

	// Store image
	public function getProfilePicture($filename)
	{
		$filename = Storage::disk('local')->get($filename);
		return new Response($file, 200);
		
	}


}