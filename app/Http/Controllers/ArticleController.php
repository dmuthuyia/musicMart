<?php
namespace musicMart\Http\Controllers;

use musicMart\Article;

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

class ArticleController extends Controller
{


		public function getNew()
		{
			return view('articles.new');
		}


	public function postNew(Request $request)
		{



				if($request->hasFile('article_img')){
		    		$article_img = $request->file('article_img');
		    		$filename = time() . '.' . $article_img->getClientOriginalExtension();
		    		//Image::make($article_img)->resize(300, 300)->save( public_path('/uploads/articles/' . $filename ) );
		    		$article_img->move(public_path().'/uploads/articles/', $filename);
		    	}

		    		else{

		    		$filename = 'missing.jpg';
		    	}


			$this->validate($request, [
            	'title' => 'required',
            	'body' => 'required',

			]);



			$title = $request['title'];
            $body = $request['body'];
            $url = $request['url'];
            $tags = $request['tags'];


			$article = new Article();
			

			$article->title = $title;
			$article->body = $body;
			$article->url = $url;
			$article->tags = $tags;
			//$article->user_id = Auth::user()->id;
			$article->category_id = 1;
			$article->article_img = $filename;

			$article->save();

	
			return redirect()->route('magazine');


		}




	public function getIndex()
		{
			//$whistles = Whistle::all();
			$articles = Article::orderBy('created_at', 'desc')->paginate(12);
			return view('articles.index', ['articles' => $articles]);
		}

    public function getShow($id)
    {

    	//$user = User::where('id', $id)->firstOrFail();
        $article = Article::where('id', $id)->firstOrFail();
        //$interested = Article::where('id', '!=', $id)->get()->random(3);

        return view('articles.show')->with(['article' => $article]);

    }
    
     // Show the form for editing the specified resource.
     // @param  int  $id
     // @return \Illuminate\Http\Response
    
    public function getEdit($id)
    {
        $article= Article::find($id);
        return view('articles.edit',compact('article'));
    }
    


		public function getProfilePicture($filename)
		{
			$filename = Storage::disk('local')->get($filename);
			return new Response($file, 200);
			
		}


}