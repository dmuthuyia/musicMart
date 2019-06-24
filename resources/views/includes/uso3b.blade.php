    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
    <script src="js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


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
            background: url('/assets/images/uso3/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('/assets/images/uso3/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="{{url('/assets/images/uso3/oval.svg')}}" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{url('/assets/images/uso3/banner1.png')}}" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;"><a  href="#">Rubber stamps</a></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">Your only rubber stamp experts </div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:200px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    
                    <div style="position:absolute;top:40px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">Date and Text, Automatic Numbering Machine,<br> Self Inking, Special Stamps, Pocket<br>Children Motivational-<br>
                    Education Stamps</div>
                </div>
            </div>

            <div>
                <img data-u="image" src="{{url('/assets/images/uso3/banner3.png')}}" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;"><a  href="#">Company Seals</a></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">Quality seals at competitive prices</div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    
                    <div style="position:absolute;top:40px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">Company seals, heavy duty seals, <br>smart seals & wax seals</div>
                </div>
            </div>

            
            <div>
                <img data-u="image" src="{{url('/assets/images/uso3/banner2.png')}}" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;"><a  href="#">Acrylic  stamps</a></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">variety of Acrylic  stamps available</div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                   
                    <div style="position:absolute;top:40px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">crystal stamps & Plastic stamps</div>
                </div>
            </div>

            <div>
                <img data-u="image" src="{{url('/assets/images/uso3/banner4.png')}}" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;"><a  href="#">Rubberstamp Accessories</a></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">All rubber stamp accessories at affordable prices</div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;"></div>
                    <div style="position:absolute;top:40px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">Deluxe & economy ink & pads, Permanent, Fabric,Indelible &  Security UV Ink</div>
                </div>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->