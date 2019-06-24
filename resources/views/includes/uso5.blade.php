<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap Slider Component Carousel/Slideshow/Gallery/Banner</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- NAVBAR
    ================================================== -->
    <div class="container">
        @if(!Auth::check())

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('about us') }}">About Us</a></li>



                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cleaning<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('cleaning.domestic') }}">Domestic/Home</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('cleaning.commercial') }}">Commercial/Office</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('pcontrol') }}">Pest control</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('gardening') }}">Gardening/landscaping</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Delivery services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('delivery.parcel') }}">Parcel</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.cooking_gas') }}">Cooking gas</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.shopping') }}">Shopping</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.moving') }}">Moving</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sitting<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('sitting.human') }}">Human</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('sitting.property') }}">Property</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Marketing<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('marketing.promotion') }}">Promotion</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('marketing.branding') }}">Branding</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Security<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('security.home_security') }}">Home</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('security.office_security') }}">Office</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('security.dogs') }}">Dogs</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shopping<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('shopping.brookside') }}">Brookside dairy online agent</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('shopping.stylemycandy') }}">Style my candy: fahion & interiors</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('shopping.import') }}">import</a></li>
                        </ul>
                  </li>


                        <li><a href="{{ route('magazine') }}">Magazine</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>

                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                   
                    <div class="dropdown-menu" style="padding: 5px;">
                      </a>


                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="Password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                        <i class="fa fa-btn fa-user"></i> Login
                                </button>

                        </form>


                      </div>
                  </li>

                        <li><a href="{{ route('registration form') }}"><i class="icon-off"></i>Sign up</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @else

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('about us') }}">About Us</a></li>



                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cleaning<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('cleaning.domestic') }}">Domestic/Home</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('cleaning.commercial') }}">Commercial/Office</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('pcontrol') }}">Pest control</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('gardening') }}">Gardening/landscaping</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Delivery services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('delivery.parcel') }}">Parcel</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.cooking_gas') }}">Cooking gas</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.shopping') }}">Shopping</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('delivery.moving') }}">Moving</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sitting<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('sitting.human') }}">Human</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('sitting.property') }}">Property</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Marketing<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('marketing.promotion') }}">Promotion</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('marketing.branding') }}">Branding</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Security<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('security.home_security') }}">Home</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('security.office_security') }}">Office</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('security.dogs') }}">Dogs</a></li>
                        </ul>
                  </li>


                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shopping<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('shopping.brookside') }}">Brookside dairy online agent</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('shopping.stylemycandy') }}">Style my candy: fahion & interiors</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('shopping.import') }}">import</a></li>
                        </ul>
                  </li>


                        <li><a href="{{ route('magazine') }}">Magazine</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Acc: {{Auth::user()->FirstName}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="icon-off"></i>Logout</a></li>
                        </ul>
                    </li>


                        
                    </ul>





                </div>
            </div>
        </nav>

        @endif



    </div>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">
        
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="{{url('/assets/images/uso/banner1.png')}}" />
                </div>
                <div>
                    <img u="image" src2="{{url('/assets/images/uso/banner2.png')}}" />
                </div>
                <div>
                    <img u="image" src2="{{url('/assets/images/uso/banner3.png')}}" />
                </div>
                <div>
                    <img u="image" src2="{{url('/assets/images/uso/banner2.png')}}" />
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(../img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(../img/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
        </div>
        <!-- Jssor Slider End -->
        
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


<!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>
</html>