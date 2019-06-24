@extends('layouts.nyumba')

@section('kichwa')

    Kenyan love: Meet singles

@endsection

@section('sebule')

<div class="row">
	<div class="divfold52a">
		@foreach($users as $user)
			<div class="col-md-3">
				<div class="fireplace2singles poscentre">
					
					<a href="{{ url('singles/profile', [$user->id]) }}"><img height="200" width="200" src="<?php echo asset("uploads/avatars/$user->mypic")?>"></img></a>

					<!-- <a href="{{ URL::to("singles/profile/{$user->id}") }}">here</a> -->
					<a href="{{ url('singles/profile', [$user->id]) }}"><h3>{{ $user->UserName }}</h3>
					<a href="{{ url('singles/profile', [$user->id]) }}">id: {{ $user->id }}</a> | age: 	{{ $user->Age }} 
					<hr>

					<div class="divfold56singles">
						Location:
						<em>
							{{ $user->City }}</em>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
		
<div class="divfold50a">
	<?php echo $users->render(); ?>
</div>

@endsection