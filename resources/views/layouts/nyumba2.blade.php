<!DOCTYPE html>
<html>
    <head>
        <title>@yield('kichwa')</title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/app.css') }} ">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/fontawesome/css/font-awesome.min.css') }} ">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/nivo-slider.css') }} ">
        


       <script src="{{ URL::to('assets/js/jquery-1.7.1.min.js') }} "></script>
       <script src="{{ URL::to('assets/js/jssor.slider-22.2.16.min.js') }} "></script>
       








        
    </head>
    <body>

    <div style="margin-bottom: 10px; background-color: #BFEFFF; width: 100%">
        <div class="premenu">
            <div class="container">

                <i class="fa fa-phone" aria-hidden="true"> +254 780 666944 / +254 726 168409 </i>   |   <i class="fa fa-envelope" aria-hidden="true"> info@goldensparkleservices.com</i> 
                <div style="float: right;">  
                    <a href="#"><i class="fa fa-facebook fa-lg"  aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a>                
                </div>

            </div>
        </div>

        
            <div class="row">
            <div class="col-md-12">
            <div>
            @include('includes.wazo3')
            </div>
            </div> 
            </div>
              
       


        @include('partials.errors')
        @include('includes.uso3')
        
        <div class="filler1">
            
        </div>      
        
    </div>


    <div class="container">
    <div  class="divfold50read" style="border-radius: 5px;">
        <div class="col-md-9">
          
                @yield('sebule')
           
        </div>

       <div class="col-md-3">
       
            <div class="row">
                <div class="fireplace2side">
                   
                    <div class="trybsprofcircle10">

                        <img src="" alt=""/>
                        @include('includes.promo1')

                    </div>
                </div>
            </div>
            


            <div class="row">
                <div class="fireplace2side">
                    <div class="trybsprofcircle10">


                        <div class="image">
                        
                            <img src="{{url('/assets/images/')}}" alt=""/>

                            <div class="textoverlay"><span><em>Aims to Create employment<span class='spacer'></span><br /><span class='spacer'></span> for a thousand and Satisfy thousand clients.</em></span></div>
                        </div>

                    </div>
                </div>
            </div>

        
        </div>

    </div>
    </div>



    
    <div class="footer1">

        <div class="col-md-4">
            <div class="divfold57">
                <h2> Services </h2>
                <hr>
                <br /><a href="{{ route('home') }} ">About us</a>
                <br /><a href="{{ route('home') }} ">Our services</a>
                <br /><a href="{{ route('home') }} ">magazine</a>
                <br /><a href="{{ route('home') }} ">Buy products</a>
                <br /><a href="{{ route('home') }} ">Careers</a>
                <br /><a href="{{ route('home') }} ">Contact us</a>

            </div>
        </div>
 
        <div class="col-md-4">
            <div class="divfold57">
                <h2> Partners </h2>
                <hr>         
                <li></li>
            </div>
        </div>

        <div class="col-md-4">
            <div class="divfold57">
                <h2>Testimonials</h2>
                <hr>
    
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <ul class="nav navbar-nav navbar-left">

                <li><a class="navbar-brand" href="{{ route('home') }} ">copyright: Golden Sparkle Services  © 2017</a></li>
                <li><a class="navbar-brand" href="http://stackoverflow.com" target="_blank">technology: Infohtech ict Consultancy Agency</a></li>

               
            </ul>
            <ul class="nav navbar-nav navbar-right">


                     
                    <li><a href="#"><i class="fa fa-facebook fa-lg"  aria-hidden="true"></i></a></li>

                    <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>

                    <li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li> 
                    <li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>               
                
            </ul>


        </div>
    </div>



        <script src="{{ URL::to('assets/js/jquery-3.1.1.min.js') }} "></script>
        <script src="{{ URL::to('assets/js/jquery-migrate-1.4.1.min.js') }} "></script>
        <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }} "></script>

        
        
        <script src="{{ URL::to('assets/js/app.js') }} "></script>




    </body>
</html>