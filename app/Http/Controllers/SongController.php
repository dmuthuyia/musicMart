<?php
namespace musicMart\Http\Controllers;

use musicMart\Song;
use musicMart\Artist;
use musicMart\Album;

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

class SongController extends Controller
{
		
	//fetch add new View
	public function getNew()
	{
		return view('song.new');
	}

	// post New song
	public function postNew(Request $request)
	{



	if($request->hasFile('song_img')){
		$song_img = $request->file('song_img');
		$filename = time() . '.' . $song_img->getClientOriginalExtension();
		//Image::make($song_img)->resize(300, 300)->save( public_path('/uploads/song/' . $filename ) );
		$song_img->move(public_path().'/uploads/song/', $filename);
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


	$song = new Song();
	

	$song->title = $title;
	$song->description = $description;
	$song->url = $url;
	//$song->user_id = Auth::user()->id;
	$song->album_id = 1;
	$song->song_img = $filename;

	$song->save();


	return redirect()->route('magazine');


	}

	//Show list
	public function getIndex()
	{
		//$songs = Song::all();
		$song = Song::orderBy('created_at', 'desc')->paginate(12);
		return view('song.index', ['song' => $song]);
	}

	//Show page
    public function getShow($id)
    {

        $song = Song::where('id', $id)->firstOrFail();
        return view('songs.show')->with(['song' => $song]);

    }
    

    // Edit song
    public function getEdit($id)
    {
        $song= Song::find($id);
        return view('song.edit',compact('song'));
    }
    

	// Store image
	public function getProfilePicture($filename)
	{
		$filename = Storage::disk('local')->get($filename);
		return new Response($file, 200);
		
	}


}