<!DOCTYPE html>
<html>

<head>
    <title>Dennis Muthuyia</title>

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

        <div class="container4">
            <div class="mymenubackground">


                <div class="social1">

                    <i class="fa fa-phone" aria-hidden="true" style="font-size: 12px;"><a href="tel:25472222222">
                            +254 722 222222 </a> </i> | <i class="fa fa-envelope" aria-hidden="true"> <a
                            href="mailto:info@rubberstampsandsealskenya.com">dennis@dennis.com
                        </a></i>


                    <div class="social2">
                        <a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a> | <a href="#"><i
                                class="fa fa-twitter fa-lg" aria-hidden="true"></i></a> | <a href="#"><i
                                class="fa fa-instagram fa-lg" aria-hidden="true"></i></a> | <a href="#"><i
                                class="fa fa-youtube fa-lg" aria-hidden="true"></i></a> | <a href="#"><i
                                class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a>
                    </div>


                </div>




                @include('partials.errors')



            </div>
            <div class="imheader">
                <div
                    style="padding-top: 20px; padding-left: 40%; text-align: center; color: #ec9b1b; font-family: system-ui; font-size: 14px;">

                </div>



                <div style="padding-top: 20px;  ">
                    <div class="mnaveholder"><a id="m-nav" href="#">Menu</a></div>
                    @include('includes.wazo4')

                </div>

            </div>

        </div>

    </div>



    <div class="container">
        <div style="margin-bottom: 10px; margin-top: 160px;">
            <div class="filler12">
            </div>
            <div class="uso">
            </div>
        </div>
    </div>




    <div class="container">
        <div class="divfold50">
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
                        <div class="fireplace2side">
                            <div class="trybsprofcircle10">


                                <div class="image">

                                    <h4><strong> Recent Posts </strong> </h4>
                                    <hr>
                                    <a href="#">See more posts</a>

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

                    <hr>
                    <br /><a href="{{ route('home') }} ">About us</a>

                    <br /><a href="{{ route('home') }} ">Contact us</a>

                </div>
            </div>


            <div class="col-md-3">
                <div class="divfold57">

                    <hr>
                    <li></li>
                </div>
            </div>


            <div class="col-md-3">
                <div class="divfold57">
                </div>
            </div>

        </div>
    </div>

    <div class="containerf" style="background-color: #08185d;">
        <div class="footer1">

            <ul class="nav navbar-nav navbar-left">

                <li><a href="{{ route('home') }} ">copyright: Dennis</a>
                </li>
                <li><a href="" target="_blank">Dennis Murithi Muthuyia</a>
                </li>


            </ul>
            <ul class="nav navbar-nav navbar-right" style="display: inline;">



                <li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>

            </ul>


        </div>
    </div>







</body>

</html>