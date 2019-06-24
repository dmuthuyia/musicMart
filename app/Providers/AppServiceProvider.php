<?php

namespace musicMart\Providers;

use Illuminate\Support\ServiceProvider;
use musicMart\User;
use musicMart\Contact;
use musicMart\Product;
use musicMart\Category;
use musicMart\Subcategory;
use musicMart\Testimonial;
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
use musicMart\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    view()->composer('layouts.nyumbaHome', function($view) {
        $articles = Article::orderBy('created_at', 'desc')->take(2)->get();

        $testimonials = Testimonial::where('approved', '=', 1)->orderBy('created_at', 'desc')->take(2)->get();

        $view->with(['articles' => $articles, 'testimonials' => $testimonials]);
    });

        view()->composer('layouts.nyumba', function($view) {
        $articles = Article::orderBy('created_at', 'desc')->take(2)->get();
        
        $testimonials = Testimonial::where('approved', '=', 1)->orderBy('created_at', 'desc')->take(2)->get();

        $view->with(['articles' => $articles, 'testimonials' => $testimonials]);
    });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
