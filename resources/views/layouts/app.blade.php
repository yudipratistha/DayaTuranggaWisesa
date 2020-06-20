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
    </head>
<body>
    <div id="app">
        <!--Theme Options Start-->
		<div class="style-options">
			<div class="toggle-btn">
				<span><svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"></path></g></svg>					</span>
			</div>
			<div class="style-menu" data-simplebar>
				<div class="theme-style">
					<h4 class="mt-30 mb-10">Theme Style</h4>
					<ul>
						<li><a href="{{asset('css/style-dark.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z" fill="#000000"/></g></svg> Dark</a>
						</li>
						<li><a href="{{asset('css/style-light.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" opacity="0.3" cx="12" cy="9" r="8"/><path d="M14.5297296,11 L9.46184488,11 L11.9758349,17.4645458 L14.5297296,11 Z M10.5679953,19.3624463 L6.53815512,9 L17.4702704,9 L13.3744964,19.3674279 L11.9759405,18.814912 L10.5679953,19.3624463 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M10,22 L14,22 L14,22 C14,23.1045695 13.1045695,24 12,24 L12,24 C10.8954305,24 10,23.1045695 10,22 Z" fill="#000000" opacity="0.3"/><path d="M9,20 C8.44771525,20 8,19.5522847 8,19 C8,18.4477153 8.44771525,18 9,18 C8.44771525,18 8,17.5522847 8,17 C8,16.4477153 8.44771525,16 9,16 L15,16 C15.5522847,16 16,16.4477153 16,17 C16,17.5522847 15.5522847,18 15,18 C15.5522847,18 16,18.4477153 16,19 C16,19.5522847 15.5522847,20 15,20 C15.5522847,20 16,20.4477153 16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 C8,20.4477153 8.44771525,20 9,20 Z" fill="#000000"/></g></svg> Light </a>
						</li>
					</ul>
				</div>
				<div class="theme-rtl">
					<h4 class="mt-30 mb-10">LTR/RTL Style</h4>
					<ul>
						<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"/><path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000"/></g></svg> LTR </a>
						</li>
						<li><a href="rtl/ind-rtl-slider.html"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M5,5 L19,5 C19.5522847,5 20,5.44771525 20,6 C20,6.55228475 19.5522847,7 19,7 L5,7 C4.44771525,7 4,6.55228475 4,6 C4,5.44771525 4.44771525,5 5,5 Z M5,13 L19,13 C19.5522847,13 20,13.4477153 20,14 C20,14.5522847 19.5522847,15 19,15 L5,15 C4.44771525,15 4,14.5522847 4,14 C4,13.4477153 4.44771525,13 5,13 Z" fill="#000000" opacity="0.3"/><path d="M11,9 L19,9 C19.5522847,9 20,9.44771525 20,10 C20,10.5522847 19.5522847,11 19,11 L11,11 C10.4477153,11 10,10.5522847 10,10 C10,9.44771525 10.4477153,9 11,9 Z M11,17 L19,17 C19.5522847,17 20,17.4477153 20,18 C20,18.5522847 19.5522847,19 19,19 L11,19 C10.4477153,19 10,18.5522847 10,18 C10,17.4477153 10.4477153,17 11,17 Z" fill="#000000"/></g></svg> RTL </a>
						</li>
					</ul>
				</div>
				<div class="style-nav">
                    <h4 class="mt-30 mb-10">Menu Position</h4>
                    <ul>
						<li><a href="{{asset('css/settings/top-nav.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/><rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/></g></svg> Top</a></li>
                        <li><a href="{{asset('css/settings/left-nav.css')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" ><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="9" y="5" width="13" height="14" rx="1.5"/><rect fill="#000000" opacity="0.3" x="2" y="5" width="5" height="14" rx="1"/></g></svg> Left</a></li>
                        <li><a href="{{asset('css/settings/right-nav.css')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="2" y="5" width="13" height="14" rx="1.5"/><rect fill="#000000" opacity="0.3" x="17" y="5" width="5" height="14" rx="1"/></g></svg> Right</a></li>
                        <li><a href="{{asset('css/settings/bottom-nav.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" style="transform: rotateZ(180deg);"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/><rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/></g></svg> Bottom</a></li>
                    </ul>
                </div>
				<div class="box-body">
					<h4 class="mt-30 mb-10">Box Style</h4>
					<ul>
						<li><a href="{{asset('css/settings/box/box.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4,7 L20,7 L20,19.5 C20,20.3284271 19.3284271,21 18.5,21 L5.5,21 C4.67157288,21 4,20.3284271 4,19.5 L4,7 Z M10,10 C9.44771525,10 9,10.4477153 9,11 C9,11.5522847 9.44771525,12 10,12 L14,12 C14.5522847,12 15,11.5522847 15,11 C15,10.4477153 14.5522847,10 14,10 L10,10 Z" fill="#000000"/><rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="4" rx="1"/></g></svg> Box </a>
						</li>
						<li><a href="{{asset('css/settings/box/no-box.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"/><path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"/></g></svg> No Box</a>
						</li>
					</ul>
				</div>
				<div class="box-title">
					<ul>
						<li><a href="{{asset('css/settings/title/title.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M3,19 L5,19 L5,21 L3,21 L3,19 Z M8,19 L10,19 L10,21 L8,21 L8,19 Z M13,19 L15,19 L15,21 L13,21 L13,19 Z M18,19 L20,19 L20,21 L18,21 L18,19 Z" fill="#000000" opacity="0.3"></path><path d="M10.504,3.256 L12.466,3.256 L17.956,16 L15.364,16 L14.176,13.084 L8.65000004,13.084 L7.49800004,16 L4.96000004,16 L10.504,3.256 Z M13.384,11.14 L11.422,5.956 L9.42400004,11.14 L13.384,11.14 Z" fill="#000000"></path></g></svg> Title</a>
						</li>
						<li><a href="{{asset('css/settings/title/no-title.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000"><rect x="0" y="7" width="16" height="2" rx="1"></rect><rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"></rect></g></g></svg> No Title</a>
						</li>
					</ul>
				</div>
				<div class="box-style">
					<ul>
						<li><a href="{{asset('css/settings/box/circle.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M12,16 C14.209139,16 16,14.209139 16,12 C16,9.790861 14.209139,8 12,8 C9.790861,8 8,9.790861 8,12 C8,14.209139 9.790861,16 12,16 Z" fill="#000000"/><circle fill="#000000" opacity="0.3" cx="12" cy="12" r="1"/></g></svg> Circle</a>
						</li>
						<li><a href="{{asset('css/settings/box/hexagon.css')}}"><svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M12.7442084,3.27882877 L19.2473374,6.9949025 C19.7146999,7.26196679 20.003129,7.75898194 20.003129,8.29726722 L20.003129,15.7027328 C20.003129,16.2410181 19.7146999,16.7380332 19.2473374,17.0050975 L12.7442084,20.7211712 C12.2830594,20.9846849 11.7169406,20.9846849 11.2557916,20.7211712 L4.75266256,17.0050975 C4.28530007,16.7380332 3.99687097,16.2410181 3.99687097,15.7027328 L3.99687097,8.29726722 C3.99687097,7.75898194 4.28530007,7.26196679 4.75266256,6.9949025 L11.2557916,3.27882877 C11.7169406,3.01531506 12.2830594,3.01531506 12.7442084,3.27882877 Z M12,14.5 C13.3807119,14.5 14.5,13.3807119 14.5,12 C14.5,10.6192881 13.3807119,9.5 12,9.5 C10.6192881,9.5 9.5,10.6192881 9.5,12 C9.5,13.3807119 10.6192881,14.5 12,14.5 Z" fill="#000000"/></g></svg> Hexagon</a>
						</li>
					</ul>
				</div>
				<div class="style-color mb-70">
					<h4 class="mt-30 mb-10">Theme Color</h4>
					<ul>
						<li><a href="{{asset('css/settings/color/green-color.css')}}" style="background-color: #25ca7f;"></a></li>
						<li><a href="{{asset('css/settings/color/blue-color.css')}}" style="background-color: #00a3e1;"></a></li>
						<li><a href="{{asset('css/settings/color/red-color.css')}}" style="background-color: #d94c48;"></a></li>
						<li><a href="{{asset('css/settings/color/purple-color.css')}}" style="background-color: #bb68c8;"></a></li>
						<li><a href="{{asset('css/settings/color/sea-color.css')}}" style="background-color: #0dcdbd;"></a></li>
						<li><a href="{{asset('css/settings/color/yellow-color.css')}}" style="background-color: #eae328;"></a></li>
					</ul>
				</div>
			</div>
        </div>
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
              <h2>Baha</h2>
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
