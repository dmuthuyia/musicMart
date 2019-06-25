@extends('layouts.nyumba')

@section('kichwa')

     Magazine

@endsection

@section('sebule')

<div class="divfold50">
	<div class="divfold50read">
		
		<div class="row">

			<div class="col-md-6">

				<div style="height: 400; width: 400;">
					<div class="fireplace2showimage">
					<img src="<?php echo asset("uploads/articles/$article->article_img")?>"></img>
					</div>
				
				</div>
			</div>

			<div class="col-md-6" style="text-align: center;">
				<h1>{{ $article->title }}</h1>
			</div>

	    </div>

	    <hr>

	    <div class="row">
			
			<div class="col-md-12">


                                <?php 

		                        	echo (nl2br(e(substr($article->body, 0, 300) . '......')))
								?>

		



			
		    </div>

	    </div>


	</div>
</div>




@endsection

