<!DOCTYPE html>
<html>
    <head>
        <title>@yield('kichwa')</title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/bootstrap/css/bootstrap.min.css') }} ">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/fontawesome/css/font-awesome.min.css') }} ">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/animate.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/app.css') }} ">


        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/nivo-slider.css') }} ">
        


       
        <script src="{{ URL::to('assets/js/jquery-3.1.1.min.js') }} "></script>
        <script src="{{ URL::to('assets/js/jquery-migrate-1.4.1.min.js') }} "></script>
        <script src="{{ URL::to('assets/js/jqueryui/jquery-ui.js') }} "></script>

        <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }} "></script>
        <script src="{{ URL::to('assets/js/app.js') }} "></script>
        <script src="{{ URL::to('assets/js/jssor.slider-22.2.16.min.js') }} "></script>
        <script src="{{ URL::to('assets/js/viewportchecker.js') }} "></script>
       








        
    </head>


    <body>

    
        <div class="myfixedmenu">
            
            <div class="container">

                <div class="mymenubackground">
                

                <div class="social1">
                    
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 12px;"><a href="tel:254722174777"> +254 722 174777 </a> / <a href="tel:254722174777"> +254 722 174777 </a> </i>   |   <i class="fa fa-envelope" aria-hidden="true">  <a href="mailto:info@rubberstampsandsealskenya.com">info@rubberstampsandsealskenya.com </a></i>
                    

                    <div class="social2">  
                        <a href="#"><i class="fa fa-facebook fa-lg"  aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a> | <a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a>                
                    </div>

                
                </div>




                    @include('partials.errors')
                    
                    
                    
                </div>
                <div class="imheader">
                    <div style="padding-top: 20px; padding-left: 40%; text-align: center; color: #ec9b1b; font-family: system-ui; font-size: 14px;">
                        Your Rubber stamps, Acrylic Stamps, Company seals <br>
                        Experts in Kenya.
                    </div>


                 
                    <div style="padding-top: 20px; padding-left: 3%; ">
                        <div class="mnaveholder"><a id="m-nav" href="#">Menu</a></div>
                        @include('includes.wazo5b')

                   </div>
                
                </div>

            </div>

        </div>

    

        <div class="container">
            <div style="margin-bottom: 10px; margin-top: 98px;">
                <div class="filler12">
                   
                </div> 


                <div class="uso">

                @include('includes.uso3')
                </div>
            </div>
          

        </div>   
        
    


    <div class="container">
    <div  class="divfold50">
        <div class="col-md-9">
            
                <div class="row">
                    <div class="col-md-12">
                      
                            @yield('sebule')
                    </div>
                </div>
                
                
       
            
           
        </div>

       <div class="col-md-3">
       
            <div class="row">
                <div class="col-md-12">
                    <div class="fireplace2siderel">
                       
                        <div class="trybsprofcircle10">
                            
                            @include('includes.uso6')

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="fireplace2side">
                        <div class="trybsprofcircle10">


                            <div class="image">
                            
                                <h4><strong> FAQ'S (Frequently asked questions) </strong> </h4>
                                <hr>

                                    @foreach($articles as $article)
                                        <div class="divfold50readRposts">
                                        
                                            <div class="col-md-12" style="text-align: left;">
                                                <strong><a href="{{ url('magazine/article', [$article->id]) }}">{{ $article->title }}</a></strong> <br>

                                                {{ str_limit($article->body, $limit = 20, $end = '...') }}
                                            
                                                
                                                <br>
                                                
                                                <a href="{{ url('magazine/article', [$article->id]) }}">Read</a>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach

                                <a href="{{ route('magazine') }} ">See more</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>            


            <div class="row">
                <div class="col-md-12">
                    <div class="fireplace2side">
                        <div class="trybsprofcircle10">


                            <div class="image">
                            
                                <img src="{{url('/assets/images/featured/Automatic Numbering Machine.png')}}" alt=""/>

                                <div class="textoverlay"><span>New Automatic Numbering Machines by traxx<span class='spacer'></span><br /><span class='spacer'></span> 6 Digits, 8 Digits, 12 Digits </span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-12">
                    <div class="fireplace2side">
                        <div class="trybsprofcircle10">


                            <div class="image">
                            
                                <h4><strong> Recent Posts </strong> </h4>
                                <hr>

                                    @foreach($articles as $article)
                                        <div class="divfold50readRposts">
                                            <div class="col-md-3" style="background-color: gray; padding: 2px;">
                                                <div class="trybsindexnews">
                                                    <a href="{{ url('magazine/article', [$article->id]) }}"><img height="50" width="50" src="<?php echo asset("uploads/articles/$article->article_img")?>"></img></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9" style="text-align: left;">
                                                <strong><a href="{{ url('magazine/article', [$article->id]) }}">{{ $article->title }}</a></strong> <br>

                                                {{ str_limit($article->body, $limit = 20, $end = '...') }}
                                            
                                                
                                                <br>
                                                
                                                <a href="{{ url('magazine/article', [$article->id]) }}">Read</a>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach

                                <a href="{{ route('magazine') }} ">See more posts</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        
        </div>

    </div>
    </div>



    
    
    <div class="container">
    <div class="footer">


        <div class="col-md-3">
            <div class="divfold57">
                <h3> Services </h3>
                <hr>
                <br /><a href="{{ route('home') }} ">About us</a>
                <br /><a href="{{ route('home') }} ">Our services</a>
                <br /><a href="{{ route('home') }} ">magazine</a>
                <br /><a href="{{ route('home') }} ">Buy products</a>
                <br /><a href="{{ route('home') }} ">Careers</a>
                <br /><a href="{{ route('home') }} ">Contact us</a>

            </div>
        </div>


        <div class="col-md-3">
            <div class="divfold57">
                <h3> Clients </h3>
                <hr>         
                <li></li>
            </div>
        </div>


        <div class="col-md-3">
            <div class="divfold57">
                <h3>Testimonials</h3>
                <hr>

                                    @foreach($testimonials as $testimonial)
                                        <div class="divfold50readRposts">
                                            <div class="col-md-3" style="background-color: gray; padding: 2px;">
                                                <div class="trybsindexnews">
                                                    <?php  
                                                        $testimonialuserpic = $testimonial->user->mypic
                                                    ?>
                                            <a href="{{ url('testimonials/article', [$testimonial->id]) }}"><img height="70" width="50" src="<?php echo asset("uploads/avatars/$testimonialuserpic")?>"></img></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9" style="text-align: left;">
                                                <strong><a href="{{ url('testimonials/article', [$testimonial->id]) }}">{{ $testimonial->name }}</a></strong> <br>

                                                <?php 

                                                    echo (nl2br(e(substr($testimonial->body, 0, 70) . '......')))
                                                ?>
                                            
                                                
                                                <br>
                                                
                                                <a href="{{ url('testimonials/article', [$testimonial->id]) }}">Show</a>
                                            </div>
                                        </div>
                                      
                                    @endforeach

                                <a href="{{ route('testimonials') }} ">See more</a>

    
            </div>
        </div>
       

        <div class="col-md-3">
            <div class="divfold57">
                <h3> Contact  </h3>
                <hr>
                <p>        
                <strong> Sales: </strong><br>
                Terry House,<br>
                Mfangano Street,<br>
                Nairobi, Kenya.<br>
                Call: 0728-760 926. 0722-174 777.
                </p>

                <p>
                <strong> Production: </strong><br>
                Midtown Business Centre,<br>
                Taveta Road,<br>
                Nairobi, Kenya.<br>
                Call: 0722-174 777.0728-760 926.<br>
                </p>
                <p>

                    <div class="social1">
                    
                          <i class="fa fa-envelope" aria-hidden="true">  <a href="#">Send us mail</a></i> | <i class="fa fa-phone" aria-hidden="true" style="font-size: 12px;"><a href="tel:254722174777"> Call us </a></i>
                    </div>

                </p>

            </div>
        </div>


    </div>
    </div>




    <div class="container">
    <div class="footer1">
   
            <ul class="nav navbar-nav navbar-left">

                <li><a  href="{{ route('home') }} ">copyright: Carison limited:Rubberstampsandcompanyseals  © 2017</a></li>
                <li><a  href="http://stackoverflow.com" target="_blank">technology: Infohtech ict Consultancy Agency</a></li>

               
            </ul>
            <ul class="nav navbar-nav navbar-right" style="display: inline;">


                     
                    <li><a href="#"><i class="fa fa-facebook fa-lg"  aria-hidden="true"></i></a></li>

                    <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>

                    <li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li> 
                    <li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>               
                
            </ul>


    </div>
    </div>

<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=76409877"></script>

    



    </body>
</html>