@extends('layouts.nyumba')

@section('kichwa')

    Kenyan love: {{ $user->UserName }}'s profile

@endsection

@section('sebule')

<div class="divfold57">
	<div class="col-md-7">
		<div class="fireplace2showsingles">
			<h1>{{ $user->UserName }} | id: {{ $user->id }}</h1>
			<div class="fireplace2showimage">
			
				<a href="#" data-toggle="modal" data-target="#showimg"><img class="modal-content" style="    border-radius: 5px;cursor: pointer;transition: 0.3s;" src="<?php echo asset("uploads/avatars/$user->mypic")?>"></img></a>
				<!-- The Modal -->

			</div>

			{{ $user->ShortBio }}
	
			
			<div style="padding: 10px; margin-bottom: 10px;">

		
			<a href="{{ url('send/can', [$user->id]) }}" class="btn btn-primary cani">Send Can I</a>

			
			<a id="repo" href="#" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#reportModal"><i class="glyphicon glyphicon-plus-sign"></i>Report</a>


			</div>
			
			
			Gender:
			
			
			<div class="divfold56singles"> 




            <?php
               $gendershow= ( $user->is_female == 1) ? 'Female' : 'Male' ;
            ?>  
            {{  $gendershow }}
			
			</div>
			Age:

			<div class="divfold56singles"> 
				
				{{ $user->Age }}
			
			</div>
			Location:
			
			
			<div class="divfold56singles">  
				
				{{ $user->City }}
			
			</div>
			Country:
			
			<div class="divfold56singles"> 
				
				{{ $user->Country }}
			
			</div>
			Race:
			
			<div class="divfold56singles"> 
				
				{{ $user->Race }}
			
			</div>
			Religion:
			
			<div class="divfold56singles">  
				
				{{ $user->Religion }}
			
			</div>
			Hobby:
			
			<div class="divfold56singles">
				
				{{ $user->Hobby }}
			
			</div>
			About me:

			
			<div class="divfold56singles">  
				
				{{ $user->LongBio }}
			
			</div>
			I am looking for:

			
			<div class="divfold56singles"> 
				
				{{ $user->LookingFor }}
			
			</div>
			would consider moving?:

			<div class="divfold56singles">   

            <?php
               $move= ( $user->CanMove == 1) ? 'Yes' : 'No' ;
            ?>  
            {{  $move }}
			</div>
		</div>
	</div>

	<div class="col-md-3">

		@foreach ($interested as $myrandom)
			<div class="fireplace2showrandomsingles poscentre">
				<a href="{{ url('singles/profile', [$myrandom->id]) }}"><img src="<?php echo asset("uploads/avatars/$myrandom->mypic")?>"></img></a>

				<a href="{{ url('singles/profile', [$myrandom->id]) }}"><h3>{{ $myrandom->UserName }}</h3>
					<a href="{{ url('singles/profile', [$myrandom->id]) }}">id: {{ $myrandom->id }}</a> | age: 	{{ $myrandom->Age }} 
				<hr>
				<br />
				<div class="divfold56singles">
					Location:
						<em>
							{{ $myrandom->City }}</em>
				</div>
			</div>
		@endforeach


	</div>


	
</div>




<div class="divfold57">
</div> 	

<div class="modal" id="myModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Kenyan Love
        	<button type="button" 
            class="btn btn-default topcorner" 
            data-dismiss="modal" onclick="document.getElementById('myModal').style.display='none'">Close</button></h4>
      </div>
      <div class="modal-body">
        <p>
        <!-- Modal Content (The Image) -->
		<img class="modal-content" id="img01">
        </p>
      </div>
      <div class="modal-footer">
        <!--<button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>  -->

          <hr>

      </div>
    </div>
  </div>
</div>





<div class="modal" id="reportModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Kenyan Love | Report abuse on our dating service </h4>
      </div>
      <div class="modal-body">
        <p>
                        <form action="{{ url('/abuse') }}" method="post" accept-charset="UTF-8">

                            <div class="">
                                <label for="offender_id"> user id to be reported: </label><br>

                                <input  type="text" name="offender_id" id="offender_id" maxlength="20" size="20" value="{{ $user->id }}" readonly="true" required="true">
                            </div>

                            <div class="">
                                <label for="offender_username"> user id to be reported: </label><br>
                                <input  type="text" name="offender_username" id="offender_username" maxlength="20" size="20" value="{{ $user->UserName }}" disabled="disabled">
                            </div>


                            <div class="form-group">
                                <label for="offence"> Abuse type: </label><br>

                            {{ Form::select('offence', ['fraud' => 'fraud', 'nudity' => 'nudity', 'fake' => 'fake', 'emotional' => 'emotional'], 'fraud') }}

                            </div>

                            <div class="form-group">
                                <label for="description"> Description: </label>
                                <textarea id="description" class="form-control" name="description"></textarea>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-danger" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit"> Send
                                </button>

                        </form>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
  

        </span>
      </div>
    </div>
  </div>
</div>



<div class="modal" id="showimg" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> | {{ $user->UserName }} </h4>
      </div>
      <div class="modal-body" style="height: 700px;">

        <div style="text-align: center; height: 80%; overflow: hidden;">
          <img class="modal-content" style="min-height: 100%;" src="<?php echo asset("uploads/avatars/$user->mypic")?>"></img>    
        </div>

        <div>
        	
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
  

        </span>
      </div>
    </div>
  </div>
</div>


@endsection