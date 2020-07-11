<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">  
    <head>
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Title -->
		<title>PT. Daya Turangga Wisesa</title>

		<!-- CSS Plugins -->
        <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/simplebar.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/plugins/jquery.animatedheadline.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/subtle-slideshow.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/leaflet.css')}}">

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
    .isotope-pager .pager {
        display: inline-block;
        z-index: 1000;
    }

    </style>
    </head>
<body>
    <div id="app">
        <!-- Preloader -->
		<div id="preloader">
            <div class="loading-area">
              <div class="circle"></div>
            </div>
            <div class="left-side"></div>
            <div class="right-side"></div>
      </div>

      <!-- Main Site -->
      <div id="home">
        <div id="about">
       <div id="portfolio">
      <div id="contact">

          <div class="header-mobile">
              <a class="header-toggle"><i class="fas fa-bars"></i></a>
              <h2>DTW</h2>
          </div>

          <!-- Left Block -->
          <nav class="header-main" data-simplebar>

              <!-- Logo -->
              <div class="logo">
                  <img src="img/logo.png" alt="">
              </div>

                <ul>
                  <li data-tooltip="home" data-position="top">
                      <a href="#home" class="icon-h fas fa-house-damage"></a>
                  </li>
                  <li data-tooltip="about" data-position="top">
                      <a href="#about" class="icon-a fas fa-user-tie"></a>
                  </li>
                  <li data-tooltip="portfolio" data-position="top">
                      <a href="#portfolio" class="icon-p fas fa-briefcase"></a>
                  </li>
                  <li data-tooltip="contact" data-position="bottom">
                      <a href="#contact" class="icon-c fas fa-envelope"></a>
                  </li>
                </ul>
           </nav>

        
            @yield('content')
        
    <!-- All Script -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/leaflet.js')}}"></script>
    <script src="{{asset('js/simplebar.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.subtle-slideshow.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.animatedheadline.min.js')}}"></script>
    <script src="{{asset('js/jquery.easypiechart.js')}}"></script>
    <script src="{{asset('js/jquery.validation.js')}}"></script>
    <script src="{{asset('js/tilt.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>

    <script src="{{asset('setting/main-demo.js')}}"></script>
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
</body>
</html>
