@extends('layouts.nyumba')

@section('kichwa')

    Kenyan love: Magazine

@endsection

@section('sebule')


	<div class="divfold50read">
		@foreach($articles as $article)
			<div class="divfold50read">
				<div class="col-md-3">
					<div class="trybsindexnews">
						<a href="{{ url('magazine/article', [$article->id]) }}"><img height="200" width="200" src="<?php echo asset("uploads/articles/$article->article_img")?>"></img></a>
					</div>
				</div>
				<div class="col-md-9">
					<a href="{{ url('magazine/article', [$article->id]) }}"><h3>{{ $article->title }}</h3></a>


                                <?php 

		                        	echo (nl2br(e(substr($article->body, 0, 300) . '......')))
								?>
				
					
					<br>
					
					<a href="{{ url('magazine/article', [$article->id]) }}"><h3>Read</h3></a>
				</div>
			</div>
			<hr>
		@endforeach
		<?php echo $articles->render(); ?>
	</div>




@endsection

				