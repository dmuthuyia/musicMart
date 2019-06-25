<?php
namespace musicMart\Http\Controllers;
//use Flash;

use musicMart\User;
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

use Illuminate\Mail\Mailer;

use Mail;

//use Illuminate\Support\Facades\Request;

class UserController extends Controller
{




	public function trybsSignUp(Request $request)
		{



				if($request->hasFile('mypic')){
		    		$mypic = $request->file('mypic');
		    		$filename = time() . '.' . $mypic->getClientOriginalExtension();
		    		//Image::make($mypic)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
                    //$file = Input::file('image');
                    $mypic->move(public_path().'/uploads/avatars/', $filename);
		    	}

		    		else{

		    		$filename = 'missing.jpg';

		    		//$user = Auth::user();
		    		//$user->mypic = $filename;
		    		//$user->save();
		    	}


			$this->validate($request, [
            	'FirstName' => 'required|max:255',
            	'UserName' => 'required|max:255',
            	'email' => 'required|email|max:255|unique:users',
            	'password' => 'required|min:6|confirmed',
            	'accepted_terms' => 'required'	
				
		
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
            

			$user->save();

			//Auth::login($user);

		    $thisdata = array(
			'email' => $email,
			'FirstName' => $FirstName,
			'LastName' => $LastName,
			'UserName' => $UserName,
			'filename' => $filename,
			
			'dobyear' => $dobyear,
			'is_female' => $is_female,

			'Country' => $Country,

			'confirmation_code' => $confirmation_code,

		);

		//Mail::send('mails.signup', $thisdata, function($message) use ($thisdata){
			//$message->from('app@kenyan-love.com');
			//$message->to('dennis.m@infohtechict.com');
			//$message->subject('New sign up');

		//});





		//Mail::send('mails.verify', $thisdata, function($message) use ($thisdata){

			//$message->from('musicMart@kenyan-love.com');
			//$message->to($thisdata['email']);
			//$message->subject('Verify your email address');

		//});




//        Flash::message('Thanks for signing up! Please check your email.');

			return redirect()->route('home');


		}


	public function trybsSignIn(Request $request)
		{
			//$user = User::where('id', '=', 1);

			//Auth::login("dmuthuyia@gmail.com", true);

			$user = User::where('email','=',"dmuthuyia@gmail.com")->first();
            Auth::loginUsingId($user->id, TRUE);

			//$this->validate($request, [
				//'email' => 'required',
				//'password' => 'required'
			//]);

			//if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
				//return redirect()->route('home');
			//}
			//return redirect()->back();




			//$this->validate($request, [
				//'email' => 'required',
				//'password' => 'required'
			//]);

			//if (Auth::attempt(['confirmed' => 1, 'email' => $request['email|exists:users'], 'password' => $request['password']])) {
				//Auth::login($user);
				//return redirect()->route('home');
			//}
			//return redirect()->back();




        //$rules = [
            //'email' => 'required|exists:users',
            //'password' => 'required'
        //];

        //$input = Input::only('username', 'email', 'password');
       // $input = Input::only('email', 'password');

        //$validator = Validator::make($input, $rules);

        //if($validator->fails())
        //{
           // return Redirect::back()->withInput()->withErrors($validator);
       // }

        //$credentials = [
            //'email' => Input::get('email'),
            //'password' => Input::get('password'),
            ////'confirmed' => 1
        //];

        //if ( ! Auth::attempt($credentials))
        //{
            // ->withInput()
                //->withErrors([
                    //'credentials' => 'We were unable to sign you in.'
                //]);
        //}

        //Flash::message('Welcome back!');

       // return redirect()->route('home');





		
		}


		public function getLogout()
		{
			Auth::Logout();
			return redirect()->route('home');
		}


		public function getProfile()
		{
			return view('users.profile', ['user' => Auth::user()]);
		}


		public function saveProfile(Request $request)
		{



				if($request->hasFile('mypic')){
		    		//$mypic = $request->file('mypic');
		    		//$filename = time() . '.' . $mypic->getClientOriginalExtension();
		    		//Image::make($mypic)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

                    $mypic = $request->file('mypic');
                    $filename = time() . '.' . $mypic->getClientOriginalExtension();
                    //Image::make($mypic)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
                    //$file = Input::file('image');
                    $mypic->move(public_path().'/uploads/avatars/', $filename);
		    	}

		    		else{

		    		$filename = 'missing.jpg';

		    		//$user = Auth::user();
		    		//$user->mypic = $filename;
		    		//$user->save();
		    	}


			$this->validate($request, [
            	'FirstName' => 'required|max:255',
            	'UserName' => 'required|max:255',
            	'email' => 'required|email|max:255',
            	'password' => 'required|min:6|confirmed',	
				
		
			]);


            $user = Auth::user();

			
			$user->password = bcrypt($request['password']);
			$user->FirstName =$request['FirstName'];
			$user->LastName = $request['LastName'];
			$user->UserName = $request['UserName'];
			$user->mypic = $filename;
			$user->dobyear = $request['dobyear']; 
			$user->dobmonth = $request['dobmonth']; 
			$user->dobday = $request['dobday'];		
            $user->is_female = $request->input('is_female');           

            $user->is_kenyan= $request->input('is_kenyan');
            $user->Country = $request['Country'];
            $user->City = $request['City'];
            $user->origin = $request['origin'];


			$user->update();


			return redirect()->route('profile');
		}





		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}

	public function getIndex()
		{
			//$whistles = Whistle::all();
			//$users = User::orderBy('created_at', 'desc')->get()
			$users = User::orderBy('created_at', 'desc')->paginate(12);
			return view('users.index', ['users' => $users]);
		}

    public function getShow($id)
    {

        $user = User::where('id', $id)->firstOrFail();
        //$interested = User::where('id', '!=', $id)->get();
        $interested = User::where('id', '!=', $id)->get()->random(3);

        return view('users.show')->with(['user' => $user, 'interested' => $interested]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $user= User::find($id);
        return view('UserCRUD.edit',compact('user'));
    }
    
     // Update the specified resource in storage.
     // @param  \Illuminate\Http\Request  $request
     // @param  int  $id
     // @return \Illuminate\Http\Response

     public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        //Flash::message('You have successfully verified your account.');
        Auth::login($user);

        return Redirect::route('home');
    }
    


}