<?php
use Illuminate\Support\Facades\Input;
use musicMart\Artist;
use musicMart\Song;
use musicMart\Album;
use musicMart\Genre;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => ['web']], function () {
	
	//Route::get('/', function () {
   // return view('dds.home');
	//})->name('home');


	//Route::get('/', function () {
		//return redirect()->route('home');
	//});


	Route::get('/', [
		'uses' => 'DdsController@getHome', 
		'as' => 'home'

	]);


	Route::get('/signin', function () {
    return view('users.login');
	})->name('signin');


	Route::get('/users/register', function () {
    return view('users.register');
	})->name('registration form');


	//Route::get('/about-us', function () {
    //return view('aboutUs');
	//})->name('about us');

	Route::get('/about-us', [
		'uses' => 'DdsController@getAboutus', 
		'as' => 'about us'

	]);	



	Route::get('/contact-us', [
		'uses' => 'DdsController@getContact', 
		'as' => 'contact'

	]);	



	Route::post('/contact-us', [
		'uses' => 'DdsController@postContact', 
		'as' => 'contact'

	]);	



	
	Route::post('/signup', [
		'uses' => 'UserController@trybsSignUp', 
		'as' => 'signup'

	]);


	Route::get('register/verify/{confirmationCode}', [
	    'as' => 'confirmation_path',
	    'uses' => 'UserController@confirm'
	]);


	Route::post('/signin', [
		'uses' => 'UserController@trybsSignIn', 
		'as' => 'signin'

	]);

	Route::get('/logout', [
		'uses' => 'UserController@getLogout', 
		'as' => 'logout'

	]);


	Route::get('/profile', [
		'uses' => 'UserController@getProfile', 
		'as' => 'profile'

	]);


	Route::post('/update/profile', [
		'uses' => 'UserController@saveProfile', 
		//'as' => 'profile.save'

	]);


	Route::post('/profilepicture/{filename}', [
		'uses' => 'UserController@getProfilePicture', 
		'as' => 'profile.picture'

	]);


	Route::get('/artists/index', [
		'uses' => 'UserController@getIndex',
		'as' => 'index',
		'middleware' => 'auth'
	]);



	Route::get('/artists/profile/{id}', [
		'uses' => 'UserController@getShow',
		//'as' => 'user.show',
		'middleware' => 'auth'
	]);




	//artist *********************************************************

	Route::get('/artists/females', [
		'uses' => 'DdsController@females', 
		'as' => 'artists.females',
		'middleware' => 'auth'
	]);

	Route::get('/artists/females/kenyan', [
		'uses' => 'DdsController@kenyan_females', 
		'as' => 'kenyan.females',
		'middleware' => 'auth'
	]);

	Route::get('/artists/females/foreign', [
		'uses' => 'DdsController@non_kenyan_females', 
		'as' => 'foreign.females',
		'middleware' => 'auth'
	]);


	Route::get('/artists/males', [
		'uses' => 'DdsController@males', 
		'as' => 'artists.males',
		'middleware' => 'auth'
	]);


	Route::get('/artists/males/kenyan', [
		'uses' => 'DdsController@kenyan_males', 
		'as' => 'kenyan.males',
		'middleware' => 'auth'

	]);		


	Route::get('/artists/males/foreign', [
		'uses' => 'DdsController@non_kenyan_males', 
		'as' => 'foreign.males',
		'middleware' => 'auth'

	]);

//*********************************************************
// song

	Route::get('/song', [
		'uses' => 'SongController@getIndex', 
		'as' => 'song',
		//'middleware' => 'auth'

	]);

	Route::get('/song/new', [
		'uses' => 'SongController@getNew', 
		//'as' => 'song.new',
		//'middleware' => 'auth'

	]);


	Route::post('/song/new/post', [
		'uses' => 'SongController@postNew', 
		//'as' => 'song.post',
		//'middleware' => 'auth'

	]);


	Route::get('/song/show/{id}', [
		'uses' => 'SongController@getShow',
		//'as' => 'song.show',
		//'middleware' => 'auth'

	]);


	Route::post('/update/song', [
		'uses' => 'SongController@updateProduct', 
		//'as' => 'song.update'

	]);


	Route::get('/song/delete/{id}', [
		'uses' => 'SongController@deleteProduct', 
		//'as' => 'song.update'

	]);




	// genre*********************************************************



	Route::get('/genre', [
		'uses' => 'GenreController@getIndex', 
		'as' => 'genre',
		//'middleware' => 'auth'

	]);


	Route::get('/genre/new', [
		'uses' => 'GenreController@getNew', 
		//'as' => 'article.new',
		//'middleware' => 'auth'

	]);


	Route::post('/genre/new/post', [
		'uses' => 'GenreController@postNew', 
		//'as' => 'genre.post',
		//'middleware' => 'auth'

	]);


	Route::get('/genre/show/{id}', [
		'uses' => 'GenreController@getShow',
		//'as' => 'user.show',
		//'middleware' => 'auth'

	]);


	Route::post('/update/genre', [
		'uses' => 'GenreController@updateProduct', 
		//'as' => 'genre.update'

	]);


	Route::get('/genre/delete/{id}', [
		'uses' => 'GenreController@deleteProduct', 
		//'as' => 'genre.update'

	]);




// album ****************************************************

	Route::get('/album/featured', [
		'uses' => 'DdsController@getFeatured', 
		'as' => 'song.featured',
		//'middleware' => 'auth'

	]);

	Route::get('/album/best-selling', [
		'uses' => 'DdsController@getBestselling', 
		'as' => 'song.bestselling',
		//'middleware' => 'auth'

	]);


	Route::get('/album/new-arrivals', [
		'uses' => 'DdsController@getNewarrivals', 
		'as' => 'song.newarrivals',
		//'middleware' => 'auth'

	]);


	// album ********************************************************


	Route::get('/album', [
		'uses' => 'AlbumController@getIndex', 
		'as' => 'album',
		//'middleware' => 'auth'

	]);
	
	Route::get('/album/new', [
		'uses' => 'AlbumController@getNew', 
		//'as' => 'album.new',
		//'middleware' => 'auth'

	]);


	Route::post('/album/new/post', [
		'uses' => 'AlbumController@postNew', 
		//'as' => 'album.post',
		//'middleware' => 'auth'

	]);


	Route::get('/album/show/{id}', [
		'uses' => 'AlbumController@getShow',
		//'as' => 'album.show',
		//'middleware' => 'auth'

	]);


	Route::post('/update/album', [
		'uses' => 'AlbumController@updateProduct', 
		//'as' => 'album.update'

	]);


	Route::get('/album/delete/{id}', [
		'uses' => 'AlbumController@deleteProduct', 
		//'as' => 'album.update'

	]);







	//Route::controller('alarm', 'MisuseController');


Route::get('/cart', array('before'=>'auth.basic','as'=>'cart','uses'=>'CartController@getIndex','middleware' => 'auth'));
Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart','middleware' => 'auth'));
Route::get('/cart/delete/{id}', array('before'=>'auth.basic','as'=>'delete_album_from_cart','uses'=>'CartController@getDelete','middleware' => 'auth'));

Route::post('/order', array('before'=>'auth.basic','uses'=>'OrderController@postOrder'));
Route::get('/user/orders', array('before'=>'auth.basic','uses'=>'OrderController@getIndex','middleware' => 'auth'));

//*********************************************************
//ajax routes

		Route::get('/ajax-subcat',function(){
			$cat_id = Input::get('cat_id');
			//$cat_id = $request['email'];

			$subsong = Subcategory::where('category_id', '=', $cat_id)->get();

			return Response::json($subsong);

		});


		Route::get('/ajax-album',function(){
			$subcat_id = Input::get('subcat_id');
			//$cat_id = $request['email'];

			$services = Product::where('subcategory_id', '=', $subcat_id)->get();

			return Response::json($services);

		});


	//*********************************************************




});