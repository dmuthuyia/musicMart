<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title></title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

</head>
<body>


<div id="wrapper">
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider"> <img src="demo/images/toystory.jpg" data-thumb="demo/images/toystory.jpg" alt="" /> <a href="http://dev7studios.com"><img src="demo/images/up.jpg" data-thumb="demo/images/up.jpg" alt="" title="This is an example of a caption" /></a> <img src="demo/images/walle.jpg" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" /> <img src="demo/images/nemo.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="#htmlcaption" /> </div>
<div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" src="jquery.nivo.slider.js"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>