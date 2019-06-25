<?php
namespace musicMart\Http\Controllers;

use musicMart\Artist;
use musicMart\Album;
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

class ArtistController extends Controller
{
		
	//fetch add new View
	public function getNew()
	{
		return view('artist.new');
	}

	// post New artist
	public function postNew(Request $request)
	{



	if($request->hasFile('artist_img')){
		$artist_img = $request->file('artist_img');
		$filename = time() . '.' . $artist_img->getClientOriginalExtension();
		//Image::make($artist_img)->resize(300, 300)->save( public_path('/uploads/artist/' . $filename ) );
		$artist_img->move(public_path().'/uploads/artist/', $filename);
	}

		else{

		$filename = 'missing.jpg';
	}


	$this->validate($request, [
		'title' => 'required',
		'body' => 'required',

	]);



	$email = $request['email'];
	$password = bcrypt($request['password']);
	$FirstName = $request['FirstName'];
	$LastName = $request['LastName'];
	$UserName = $request['UserName'];
	//$date_of_birth = $request['date_of_birth']; 
	$dobyear = $request['dobyear']; 
	$dobmonth = $request['dobmonth']; 
	$dobday = $request['dobday'];   
	//$is_female = (isset($_POST['is_female']) == '1' ? '1' : '0');
	$is_female = $request->input('is_female');

	$is_kenyan = $request->input('is_kenyan');
	$Country = $request['Country'];
	$City = $request['City'];
	$origin = $request['origin'];

	$confirmation_code = str_random(30);


	$user = new User();
	


	$user->email = $email;
	$user->password = $password;
	$user->FirstName = $FirstName;
	$user->LastName = $LastName;
	$user->UserName = $UserName;
	$user->mypic = $filename;
	//$user->date_of_birth = $date_of_birth;
	$user->dobyear = $dobyear;
	$user->dobmonth = $dobmonth;
	$user->dobday = $dobday;

	$user->is_female = $is_female;             

	$user->is_kenyan = $is_kenyan;
	$user->Country = $Country;
	$user->City = $City;
	$user->origin = $origin;


	//$user->accepted_terms = $accepted_terms;
	$user->accepted_terms = $request->has('accepted_terms');

	$user->confirmation_code = $confirmation_code;

	$artist->save();


	return redirect()->route('magazine');


	}

	//Show list
	public function getIndex()
	{
		//$artists = Artist::all();
		$artist = Artist::orderBy('created_at', 'desc')->paginate(12);
		return view('artist.index', ['artist' => $artist]);
	}

	//Show page
    public function getShow($id)
    {

        $artist = Artist::where('id', $id)->firstOrFail();
        return view('artist.show')->with(['artist' => $artist]);

    }
    

    // Edit artist
    public function getEdit($id)
    {
        $artist= Artist::find($id);
        return view('artist.edit',compact('artist'));
    }
    

	// Store image
	public function getProfilePicture($filename)
	{
		$filename = Storage::disk('local')->get($filename);
		return new Response($file, 200);
		
	}


}