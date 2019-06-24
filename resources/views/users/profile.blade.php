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

        
            <a href="#" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#editprof"><i class="glyphicon glyphicon-plus-sign"></i>Edit</a>


            </div>
            
            
            Gender:
            
            
            <div class="divfold56singles"> 

            <?php
               $gendershow= ( Auth::user()->is_female == 1) ? 'Female' : 'Male' ;
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
               $move= ( Auth::user()->CanMove == 1) ? 'Yes' : 'No' ;
            ?>  
            {{  $move }}

            </div>
        </div>
    </div>

    <div class="col-md-3">



    </div>


    
</div>




<div class="divfold57">
</div>  







<div class="modal" id="showimg" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Kenyan Love | {{ $user->UserName }} </h4>
      </div>
      <div class="modal-body" style="height: 700px;">

        <div style="text-align: center; height: 80%;  width: 100; overflow: hidden;">
          <img class="modal-content" style="max-height: 100%; max-height: 100%;" src="<?php echo asset("uploads/avatars/$user->mypic")?>"></img>    
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


<div class="modal" id="editprof" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
              <button type="button" class="close" 
              data-dismiss="modal" 
              aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Kenyan Love | Edit Profile {{ $user->UserName }} </h4>
              </div>

            <div class="modal-body" style="">



        

                    {{ Form::model($user, array('url' => array('update/profile'))) }}

                    @include("users._form")
                    

                    <div class="divfold50">
                        <div class="form-actions">


                            
                             <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Update
                             </button>
                        </div>

                    </div>
                    {!! Form::close() !!}


 
           
                
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