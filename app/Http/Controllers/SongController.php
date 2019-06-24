<?php
namespace musicMart\Http\Controllers;

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

class SongController extends Controller
{


		public function getNew()
		{
			return view('song.new');
		}


	public function postNew(Request $request)
		{



				if($request->hasFile('song_img')){
		    		$song_img = $request->file('song_img');
		    		$filename = time() . '.' . $song_img->getClientOriginalExtension();
		    		Image::make($song_img)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
		    	}

		    		else{

		    		$filename = 'missing.jpg';
		    	}


			$this->validate($request, [
            	'title' => 'required',
            	'advertiser' => 'required',
            	'description' => 'required',
            	'application_deadline' => 'required',

			]);

          


			$title = $request['title'];
            $description = $request['description'];
            $advertiser = $request['advertiser'];
            $qualification = $request['qualification'];
            $salary = $request['salary'];
            $application_deadline = $request['application_deadline'];
            $start_date = $request['start_date'];


			$song = new Song();
			

			$song->title = $title;
			$song->description = $description;
			$song->advertiser = $advertiser;
			$song->qualification = $qualification;
			$song->salary = $salary;
			$song->advertiser = $advertiser;
			$song->application_deadline = $application_deadline;
			$song->start_date = $start_date;

			$song->user_id = Auth::user()->id;
			$song->song_img = $filename;

			$song->save();

	
			return redirect()->route('song');


		}




	public function getIndex()
		{
			//$whistles = Whistle::all();
			$song = Song::orderBy('created_at', 'desc')->paginate(6);
			return view('song.index', ['song' => $song]);
		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $song = Song::where('id', $id)->firstOrFail();
        //$interested = Song::where('id', '!=', $id)->get()->random(3);

        return view('song.show')->with(['song' => $song]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $song= Song::find($id);
        return view('song.edit',compact('song'));
    }
    


		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}


}