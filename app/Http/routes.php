<?php
use Illuminate\Support\Facades\Input;
use musicMart\Category;
use musicMart\Subcategory;
use musicMart\Product;
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


	Route::get('/', function () {
		return redirect()->route('home');
	});


	Route::get('/home', [
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


	Route::get('/singles/index', [
		'uses' => 'UserController@getIndex',
		'as' => 'index',
		'middleware' => 'auth'
	]);



	Route::get('/singles/profile/{id}', [
		'uses' => 'UserController@getShow',
		//'as' => 'user.show',
		'middleware' => 'auth'
	]);


	//Route::post('/edit', function(\Illuminate\Http\Request $request) {
		//return response()->json(['message' => $request['whistleId']]);
		/*
		*{
		*	message: '$request['body']'
		*}
		*/

	//})->name('edit');



	Route::post('/light', [
		'uses' => 'WhistleController@lightWhistle',
		'as' => 'light',
		'middleware' => 'auth'


	]);




	Route::get('send/can/{id}', [
		'uses' => 'CanController@getCan',
		//'as' => 'user.show',
		'middleware' => 'auth'
	]);




	Route::post('/abuse', [
		'uses' => 'MisuseController@postMisuse',
		//'as' => 'user.show',
		'middleware' => 'auth'
	]);

// blog ********************************************************

	Route::get('/magazine', [
		'uses' => 'ArticleController@getIndex', 
		'as' => 'magazine',
		//'middleware' => 'auth'

	]);


	Route::get('/magazine/article/new', [
		'uses' => 'ArticleController@getNew', 
		'as' => 'article.new',
		//'middleware' => 'auth'

	]);


	Route::post('/magazine/article/post', [
		'uses' => 'ArticleController@postNew', 
		//'as' => 'article.post',
		//'middleware' => 'auth'

	]);


	Route::get('/magazine/article/{id}', [
		'uses' => 'ArticleController@getShow',
		//'as' => 'user.show',
		//'middleware' => 'auth'

	]);

// testimonials ********************************************************

	Route::get('/testimonials', [
		'uses' => 'TestimonialController@getIndex', 
		'as' => 'testimonials',
		//'middleware' => 'auth'

	]);


	Route::get('/testimonial/article/new', [
		'uses' => 'TestimonialController@getNew', 
		'as' => 'testimonial.new',
		//'middleware' => 'auth'

	]);


	Route::post('/testimonials/article/post', [
		'uses' => 'TestimonialController@postNew', 
		//'as' => 'article.post',
		//'middleware' => 'auth'

	]);


	Route::get('/testimonials/article/{id}', [
		'uses' => 'TestimonialController@getShow',
		//'as' => 'user.show',
		//'middleware' => 'auth'

	]);



	Route::post('/update/testimonial', [
		'uses' => 'TestimonialController@updateTestimonial', 
		//'as' => 'product.update'

	]);


	Route::get('/testimonials/delete/{id}', [
		'uses' => 'TestimonialController@deleteTestimonial', 
		//'as' => 'product.update'

	]);

	// careers ********************************************************


	Route::get('/careers', [
		'uses' => 'CareerController@getIndex', 
		'as' => 'careers',
		//'middleware' => 'auth'

	]);




	Route::get('/career/advertise/new', [
		'uses' => 'CareerController@getNew', 
		//'as' => 'article.new',
		'middleware' => 'auth'

	]);


	Route::post('/careers/new/post', [
		'uses' => 'CareerController@postNew', 
		//'as' => 'article.post',
		'middleware' => 'auth'

	]);


	Route::get('/careers/show/{id}', [
		'uses' => 'CareerController@getShow',
		//'as' => 'user.show',
		//'middleware' => 'auth'

	]);


	//*********************************************************

	Route::get('/singles/females', [
		'uses' => 'DdsController@females', 
		'as' => 'singles.females',
		'middleware' => 'auth'
	]);

	Route::get('/singles/females/kenyan', [
		'uses' => 'DdsController@kenyan_females', 
		'as' => 'kenyan.females',
		'middleware' => 'auth'
	]);

	Route::get('/singles/females/foreign', [
		'uses' => 'DdsController@non_kenyan_females', 
		'as' => 'foreign.females',
		'middleware' => 'auth'
	]);


	Route::get('/singles/males', [
		'uses' => 'DdsController@males', 
		'as' => 'singles.males',
		'middleware' => 'auth'
	]);


	Route::get('/singles/males/kenyan', [
		'uses' => 'DdsController@kenyan_males', 
		'as' => 'kenyan.males',
		'middleware' => 'auth'

	]);		


	Route::get('/singles/males/foreign', [
		'uses' => 'DdsController@non_kenyan_males', 
		'as' => 'foreign.males',
		'middleware' => 'auth'

	]);

//*********************************************************
// categories

	Route::get('/categories', [
		'uses' => 'CategoryController@getCategories', 
		'as' => 'categories',
		//'middleware' => 'auth'

	]);



	Route::post('/categories/new', [
		'uses' => 'CategoryController@postCategory', 
		'as' => 'categories.new',
		//'middleware' => 'auth'

	]);


	Route::post('/subcategories/new', [
		'uses' => 'SubcategoryController@postSubcategory', 
		'as' => 'subcategories.new',
		//'middleware' => 'auth'

	]);


	//*********************************************************



	Route::get('/products', [
		'uses' => 'ProductController@getIndex', 
		'as' => 'products',
		//'middleware' => 'auth'

	]);


	Route::get('/products/new', [
		'uses' => 'ProductController@getNew', 
		//'as' => 'article.new',
		//'middleware' => 'auth'

	]);


	Route::post('/product/new/post', [
		'uses' => 'ProductController@postNew', 
		//'as' => 'product.post',
		//'middleware' => 'auth'

	]);


	Route::get('/products/show/{id}', [
		'uses' => 'ProductController@getShow',
		//'as' => 'user.show',
		//'middleware' => 'auth'

	]);


	Route::post('/update/product', [
		'uses' => 'ProductController@updateProduct', 
		//'as' => 'product.update'

	]);


	Route::get('/product/delete/{id}', [
		'uses' => 'ProductController@deleteProduct', 
		//'as' => 'product.update'

	]);



	Route::get('/service/cleaning/domestic', [
		'uses' => 'DdsController@getDomestic_cleaning', 
		'as' => 'cleaning.domestic',
		//'middleware' => 'auth'

	]);


	Route::get('/service/cleaning/commercial', [
		'uses' => 'DdsController@getCommercial_cleaning', 
		'as' => 'cleaning.commercial',
		//'middleware' => 'auth'

	]);


	Route::get('/service/gardening/', [
		'uses' => 'DdsController@getGardening', 
		'as' => 'gardening',
		//'middleware' => 'auth'

	]);


	Route::get('/service/pest/control', [
		'uses' => 'DdsController@getPcontrol', 
		'as' => 'pcontrol',
		//'middleware' => 'auth'

	]);


	Route::get('/service/deliveries/parcel', [
		'uses' => 'DdsController@getParcel_delivery', 
		'as' => 'delivery.parcel',
		//'middleware' => 'auth'

	]);


	Route::get('/service/deliveries/gas', [
		'uses' => 'DdsController@getCooking_gas_delivery', 
		'as' => 'delivery.cooking_gas',
		//'middleware' => 'auth'

	]);



	Route::get('/service/deliveries/shopping', [
		'uses' => 'DdsController@getShopping', 
		'as' => 'delivery.shopping',
		//'middleware' => 'auth'

	]);


	Route::get('/service/deliveries/moving', [
		'uses' => 'DdsController@getMoving', 
		'as' => 'delivery.moving',
		//'middleware' => 'auth'

	]);



	Route::get('/service/sitting/human', [
		'uses' => 'DdsController@getHuman', 
		'as' => 'sitting.human',
		//'middleware' => 'auth'

	]);



	Route::get('/service/sitting/property', [
		'uses' => 'DdsController@getProperty', 
		'as' => 'sitting.property',
		//'middleware' => 'auth'

	]);



	Route::get('/service/marketing/promotion', [
		'uses' => 'DdsController@getPromotion', 
		'as' => 'marketing.promotion',
		//'middleware' => 'auth'

	]);



	Route::get('/service/marketing/branding', [
		'uses' => 'DdsController@getBranding', 
		'as' => 'marketing.branding',
		//'middleware' => 'auth'

	]);



	Route::get('/service/security/home', [
		'uses' => 'DdsController@getHome_security', 
		'as' => 'security.home_security',
		//'middleware' => 'auth'

	]);



	Route::get('/service/security/office', [
		'uses' => 'DdsController@getOffice_security', 
		'as' => 'security.office_security',
		//'middleware' => 'auth'

	]);



	Route::get('/service/security/dogs', [
		'uses' => 'DdsController@getDogs', 
		'as' => 'security.dogs',
		//'middleware' => 'auth'

	]);



	Route::get('/service/shopping/brookside', [
		'uses' => 'DdsController@getBrookside', 
		'as' => 'shopping.brookside',
		//'middleware' => 'auth'

	]);


	Route::get('/service/shopping/perishable', [
		'uses' => 'DdsController@getPerishable', 
		'as' => 'shopping.perishable',
		//'middleware' => 'auth'

	]);


	Route::get('/service/shopping/nonperishable', [
		'uses' => 'DdsController@getNonperishable', 
		'as' => 'shopping.nonperishable',
		//'middleware' => 'auth'

	]);


	Route::get('/service/shopping/import', [
		'uses' => 'DdsController@getImport', 
		'as' => 'shopping.import',
		//'middleware' => 'auth'

	]);


	Route::get('/service/shopping/stylemycandy', [
		'uses' => 'DdsController@getStylemycandy', 
		'as' => 'shopping.stylemycandy',
		//'middleware' => 'auth'

	]);



// rubber staamps seals products ****************************************************

	Route::get('/products/featured', [
		'uses' => 'DdsController@getFeatured', 
		'as' => 'categories.featured',
		//'middleware' => 'auth'

	]);

	Route::get('/products/best-selling', [
		'uses' => 'DdsController@getBestselling', 
		'as' => 'categories.bestselling',
		//'middleware' => 'auth'

	]);


	Route::get('/products/new-arrivals', [
		'uses' => 'DdsController@getNewarrivals', 
		'as' => 'categories.newarrivals',
		//'middleware' => 'auth'

	]);

	Route::get('/products/categories/date-and-text-stamps', [
		'uses' => 'DdsController@getDateandTextstamps', 
		'as' => 'categories.dateandtextstamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/self-inking-rubber-stamps', [
		'uses' => 'DdsController@getSelfinkingrubberstamps', 
		'as' => 'categories.self-inking-rubber-stamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/plain-text-self-inking-stamps', [
		'uses' => 'DdsController@getPlaintextselfinkingstamps', 
		'as' => 'categories.plain-text-self-inking-stamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/heavy-duty-plain-and-dater-self-inking-stamps', [
		'uses' => 'DdsController@getHeavydutyplainanddaterSelfinkingstamps', 
		'as' => 'categories.heavy-duty-plain-and-dater-self-inking-stamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/pocket-stamps', [
		'uses' => 'DdsController@getPocketstamps', 
		'as' => 'categories.pocket-stamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/children-motivational-education-stamps', [
		'uses' => 'DdsController@getChildrenmotivationaleducationstamps', 
		'as' => 'categories.children-motivational-education-stamps',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/special-stamps-daters-text-and-numberers', [
		'uses' => 'DdsController@getSpecialstampsdaterstextandnumberers', 
		'as' => 'categories.special-stamps-daters-text-and-numberers',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/traditional-die-plate-daters-default', [
		'uses' => 'DdsController@getTraditionaldieplatedatersdefault', 
		'as' => 'categories.traditional-die-plate-daters-default',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/acrylic-stamps-default', [
		'uses' => 'DdsController@getAcrylicstampsdefault', 
		'as' => 'categories.acrylic-stamps-default',
		//'middleware' => 'auth'

	]);


	Route::get('/products/categories/company-seals-default', [
		'uses' => 'DdsController@getCompanysealsdefault', 
		'as' => 'categories.company-seals-default',
		//'middleware' => 'auth'

	]);


		Route::get('/products/categories/stamp-accessories-default', [
		'uses' => 'DdsController@getStampaccessoriesdefault', 
		'as' => 'categories.stamp-accessories-default',
		//'middleware' => 'auth'

	]);


		Route::get('/products/categories/automatic-numbering-machines-default', [
		'uses' => 'DdsController@getAutomaticnumberingmachinesdefault', 
		'as' => 'categories.automatic-numbering-machines-default',
		//'middleware' => 'auth'

	]);


		Route::get('/products/categories/wooden-stamps-default', [
		'uses' => 'DdsController@getWoodenstampsdefault', 
		'as' => 'categories.wooden-stamps-default',
		//'middleware' => 'auth'

	]);








	//Route::controller('alarm', 'MisuseController');


Route::get('/cart', array('before'=>'auth.basic','as'=>'cart','uses'=>'CartController@getIndex','middleware' => 'auth'));
Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart','middleware' => 'auth'));
Route::get('/cart/delete/{id}', array('before'=>'auth.basic','as'=>'delete_product_from_cart','uses'=>'CartController@getDelete','middleware' => 'auth'));

Route::post('/order', array('before'=>'auth.basic','uses'=>'OrderController@postOrder'));
Route::get('/user/orders', array('before'=>'auth.basic','uses'=>'OrderController@getIndex','middleware' => 'auth'));

//*********************************************************
//ajax routes

		Route::get('/ajax-subcat',function(){
			$cat_id = Input::get('cat_id');
			//$cat_id = $request['email'];

			$subcategories = Subcategory::where('category_id', '=', $cat_id)->get();

			return Response::json($subcategories);

		});


		Route::get('/ajax-products',function(){
			$subcat_id = Input::get('subcat_id');
			//$cat_id = $request['email'];

			$services = Product::where('subcategory_id', '=', $subcat_id)->get();

			return Response::json($services);

		});


	//*********************************************************
//jobcards



	Route::get('/jobcards/new', [
		'uses' => 'JobcardController@getNew', 
		//'as' => 'article.new',
		//'middleware' => 'auth'

	]);



});