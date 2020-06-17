<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Subtle Slideshow With Ken Burns Effect Example</title>
    

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/simplebar.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/plugins/owl.carousel.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/plugins/owl.theme.default.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/plugins/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/subtle-slideshow.css')}}">

    <!-- CSS Base -->
    <link rel="stylesheet" class="theme-st" href="{{asset('css/style-dark.css')}}">

    <!-- Settings Style -->
    <link rel="stylesheet" class="pos-nav" href="{{asset('css/settings/left-nav.css')}}" />
    <link rel="stylesheet" class="box-bd" href="{{asset('css/settings/box/box.css')}}">
    <link rel="stylesheet" class="box-st" href="{{asset('css/settings/box/circle.css')}}" />
    <link rel="stylesheet" class="box-tl" href="{{asset('css/settings/title/title.css')}}">
    <link rel="stylesheet" class="style-cl" href="{{asset('css/settings/color/green-color.css')}}" />

    <link rel="stylesheet" href="{{asset('setting/style-demo.css')}}">
    <style>
      .static-content {
        padding: 20px;
      }
      h1 {
        font-family: sans-serif;
        margin: 0;
        position: absolute;
        bottom: 20px;
        color: white;
        text-shadow: 0 2px 4px rgba(0,0,0,.4);
      }
    </style>
  </head>
  <body>

    <div id="slides">
      <a class="slide" title="Yoga Image | unsplash" href="#">
        
        <div class="static-content"><h1>Subtle Slideshow With Ken Burns Effect</h1></div><span class="animate down" style="background-image: url(https://source.unsplash.com/1200x900/?yoga)"></span>
      </a>
      <a class="slide" title="Fitness Image | unsplash" href="#">
        <span class="animate in" style="background-image: url(https://source.unsplash.com/1200x900/?fitness)"></span>
        <div class="static-content"><h1>Subtle Slideshow With Ken Burns z</h1></div>
      </a>
      <a class="slide" title="GYM Image | unsplash" href="#">
        <span class="animate down" style="background-image: url(https://source.unsplash.com/1200x900/?gym)"></span>
        <div class="static-content"><h1>Subtle Slideshow With Ken Burns x</h1></div>
      </a>
      <a class="slide" title="Cat Image | unsplash" href="#">
        <span class="animate out" style="background-image: url(https://source.unsplash.com/1200x900/?cat)"></span>
        <div class="static-content"><h1>Subtle Slideshow With Ken Burns s</h1></div>
      </a>
      <a class="slide" title="Dog | unsplash" href="#">
        <span class="animate right" style="background-image: url(https://source.unsplash.com/1200x900/?dog)"></span>
        <div class="static-content"><h1>Subtle Slideshow With Ken Burns Effect</h1></div>
      </a>
    </div>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.subtle-slideshow.js')}}"></script>
    <script>
      // These are te default settings.
      $('#slides').slideshow({
        randomize: false,      // Randomize the play order of the slides.
        slideDuration: 6000,  // Duration of each induvidual slide.
        fadeDuration: 1000,    // Duration of the fading transition. Should be shorter than slideDuration.
        animate: true,        // Turn css animations on or off.
        pauseOnTabBlur: false, // Pause the slideshow when the tab is out of focus. This prevents glitches with setTimeout().
        enableLog: false      // Enable log messages to the console. Useful for debugging.
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
