@extends('layouts.app')

@section('content')

    <!-- Home Section -->
      <div class="pt-home">

        <div class="addition-bg">
            <div class="overlay overlay-dark-20 cover-all">
                <div id="slides">
                <div class="slide">
                  <span class="animate down" style="background-image: url(../img/slider/8.jpg)"></span>
                  <div class="banner"><h1>Subtle Slideshow With Ken Burns Effect</h1></div>
                </div>
                <div class="slide">
                  <span class="animate in" style="background-image: url(../img/slider/10.jpeg)"></span>
                  <div class="banner"><h1>Subtle Slideshow With Ken Burns z</h1></div>
                </div>
                <div class="slide">
                  <span class="animate down" style="background-image: url(../img/slider/slide-1.jpg)"></span>
                  <div class="banner"><h1>Subtle Slideshow With Ken Burns x</h1></div>
                </div>
                <div class="slide">
                  <span class="animate out" style="background-image: url(../img/slider/slide-1.jpg)"></span>
                  <div class="banner"><h1>Subtle Slideshow With Ken Burns s</h1></div>
                </div>
                <div class="slide">
                  <span class="animate right" style="background-image: url(../img/slider/slide-1.jpg)"></span>
                  <div class="banner"><h1>Subtle Slideshow With Ken Burns Effect</h1></div>
                </div>
              </div>
              <div class="the-square"></div>
            </div>
        </div>

         <section>
            <!-- Banner -->
            {{-- <div class="banner">
                  <h1>Alex Smith</h1>
                <p class="cd-headline rotate-1">
                    <span>I am a</span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Developer</b>
                        <b>Photographer</b>
                        <b>Designer</b>
                        <b>Freelancer</b>
                    </span>
                </p>
            </div> --}}

            <!-- Language -->
            <div class="lang">
                <ul>
                       <li><a href="#" class="active">eng</a></li>
                    <li><a href="#">rus</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
          </section>
      </div>

    <!-- About Section -->
    <div class="page pt-about" data-simplebar>
        <section class="container">

            <!-- Section Title -->
            <div class="header-page mt-70 mob-mt">
                <h2>About Me</h2>
                <span></span>
            </div>

            <!-- Personal Info Start -->
            <div class="row mt-100">

                <!-- Information Block -->
                <div class="col-lg-12 col-sm-12">
                    <div class="info box-1">
                        <div class="row">
                            <div class="col-lg-3 col-sm-4">
                                <div class="photo">
                                    <img alt="" src="{{asset('img/user-photo.jpg')}}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <h4>Alex Smith</h4>
                                <div class="loc">
                                    <i class="fas fa-map-marked-alt"></i> New York, USA
                                </div>
                                <p>Hello! I’m Alex Smith a self-taught & award winning Digital Designer & Developer with over five years  work experience. I started in my children’s room, got pro at renowned digital agencies akij co and nork blue lebel. Now I’m based in USA, America, working for Apple fredmansky and enjoying the life in the countryside.
                                </p>
                                <p>I have couple of hobbies but I like to travel. I have already travelled almost all the districts of our country with my father. I am fond of fruit.
                                </p>
                            </div>

                            <!-- Icon Info -->
                            <div class="col-lg-3 col-sm-4">
                                <div class="info-icon">
                                     <i class="fas fa-award"></i>
                                     <div class="desc-icon">
                                        <h6>8 Years Job</h6>
                                        <p>Experience</p>
                                       </div>
                                </div>
                            </div>

                            <!-- Icon Info -->
                            <div class="col-lg-3 col-sm-4">
                                <div class="info-icon">
                                     <i class="fas fa-certificate"></i>
                                     <div class="desc-icon">
                                        <h6>500+ Projects</h6>
                                        <p>Completed</p>
                                      </div>
                                </div>
                            </div>

                            <!-- Icon Info -->
                            <div class="col-lg-3 col-sm-4">
                                <div class="info-icon">
                                     <i class="fas fa-user-astronaut"></i>
                                     <div class="desc-icon">
                                        <h6>Freelance</h6>
                                           <p>Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12 pt-50">
                                <a href="#" class="btn-st">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interests Row Start -->
            <div class="row mt-100">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-50">
                        <h3>My Interests</h3>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <div class="box-2">
                        <div class="row">
                            <!-- Interests Item -->
                            {{-- <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-music"></i>
                                     <div class="desc-inter">
                                        <h6>Music</h6>
                                       </div>
                                </div>
                            </div> --}}

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-route"></i>
                                     <div class="desc-inter">
                                        <h6>Travelling</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="far fa-image"></i>
                                         <div class="desc-inter">
                                        <h6>Photos</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-film"></i>
                                     <div class="desc-inter">
                                        <h6>Movies</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-space-shuttle"></i>
                                     <div class="desc-inter">
                                        <h6>Space</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-book"></i>
                                     <div class="desc-inter">
                                        <h6>Books</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-gamepad"></i>
                                     <div class="desc-inter">
                                        <h6>Video games</h6>
                                       </div>
                                </div>
                            </div>

                            <!-- Interests Item -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="inter-icon">
                                     <i class="fas fa-tree"></i>
                                     <div class="desc-inter">
                                        <h6>Forest</h6>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Row Start -->
            <div class="row mt-100">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-50">
                        <h3>Services</h3>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-1 mb-40">
                        <i class="fas fa-desktop"></i>
                        <h4>Web Design</h4>
                        <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-2 mb-40">
                        <i class="fas fa-cogs"></i>
                        <h4>Web Development</h4>
                        <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-2 mb-40">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Responsive Design</h4>
                        <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-1 mb-40">
                        <i class="fas fa-medkit"></i>
                        <h4>quick Support</h4>
                        <p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Row Start -->
            <div class="row testimonial mt-60">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-50">
                        <h3>Testimonials</h3>
                    </div>
                </div>

                <div class="owl-carousel owl-theme">

                    <!-- Testimonail Item -->
                    <div class="testimonial-item">
                        <div class="media">
                            <img src="{{asset('img/testimonials/testimonial-1.jpg')}}" alt="">
                            <div class="content">
                                <h4>John Doe</h4>
                                <p>Web Development</p>
                            </div>
                            <ul class="rating">
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                             </ul>
                        </div>
                        <div class="comment pt-30">
                            <p>
                                Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
                                sem just metup consequat gestas facilisis eleifend posure tempor
                                metus sem just metup consequat gestas facilisis eleifend posures
                                temporureture.
                            </p>
                        </div>
                    </div>

                    <!-- Testimonail Item -->
                    <div class="testimonial-item">
                        <div class="media">
                            <img src="{{asset('img/testimonials/testimonial-2.jpg')}}" alt="">
                            <div class="content">
                                <h4>Alex Doe</h4>
                                <p>UI/UX Designer</p>
                            </div>
                            <ul class="rating">
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star-half"></i></li>
                             </ul>
                        </div>
                        <div class="comment pt-30">
                            <p>
                                Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
                                sem just metup consequat gestas facilisis eleifend posure tempor
                                metus sem just metup consequat gestas facilisis eleifend posures
                                temporureture.
                            </p>
                        </div>
                    </div>

                    <!-- Testimonail Item -->
                    <div class="testimonial-item">
                        <div class="media">
                            <img src="{{asset('img/testimonials/testimonial-3.jpg')}}" alt="">
                            <div class="content">
                                <h4>David Doe</h4>
                                <p>UI/UX Designer</p>
                            </div>
                            <ul class="rating">
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                             </ul>
                        </div>
                        <div class="comment pt-30">
                            <p>
                                Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
                                sem just metup consequat gestas facilisis eleifend posure tempor
                                metus sem just metup consequat gestas facilisis eleifend posures
                                temporureture.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Price Row Start -->
            <div class="row mt-100 mb-60">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-90">
                        <h3>Price</h3>
                    </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                    <div class="price box-1">
                        <div class="head-price">
                            <i class="fa fa-user"></i>
                            <h4>Basic</h4>
                        </div>
                        <div class="body-price">
                            <div class="price-plan">
                                <span class="currency">$</span>
                                <span class="number">25</span>
                                <span class="period">month</span>
                            </div>
                            <div class="list-price">
                                <ul>
                                    <li>Web Design</li>
                                    <li>Web Development</li>
                                    <li class="disable">Responsive Design</li>
                                    <li class="disable">Game Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-price">
                            <a href="#" class="btn-st">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                    <div class="price box-2">
                        <div class="head-price">
                            <i class="fa fa-briefcase"></i>
                            <h4>Standard</h4>
                        </div>
                        <div class="body-price">
                            <div class="price-plan">
                                <span class="currency">$</span>
                                <span class="number">40</span>
                                <span class="period">month</span>
                            </div>
                            <div class="list-price">
                                <ul>
                                    <li>Web Design</li>
                                    <li>Web Development</li>
                                    <li>Responsive Design</li>
                                    <li class="disable">Game Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-price">
                            <a href="#" class="btn-st">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Price Item -->
                <div class="col-lg-4 col-sm-12">
                    <div class="price box-1">
                        <div class="head-price">
                            <i class="fa fa-globe"></i>
                            <h4>Premium</h4>
                        </div>
                        <div class="body-price">
                            <div class="price-plan">
                                <span class="currency">$</span>
                                <span class="number">55</span>
                                <span class="period">month</span>
                            </div>
                            <div class="list-price">
                                <ul>
                                    <li>Web Design</li>
                                    <li>Web Development</li>
                                    <li>Responsive Design</li>
                                    <li>Game Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-price">
                            <a href="#" class="btn-st">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
          </section>
     </div>

    <!-- resum Section -->
      <div class="page pt-resum" data-simplebar>
        <section class="container">

            <!-- Section Title -->
            <div class="header-page mt-70 mob-mt">
                <h2>resum</h2>
                <span></span>
            </div>

            <!-- Experience & Education Row Start -->
            <div class="row mt-100">

                <!-- Experience Column Start -->
                <div class="col-lg-6 col-sm-12">

                    <!-- Header Block -->
                    <div class="header-box mb-50">
                        <h3>Experience</h3>
                    </div>

                    <div class="experience box-1">

                        <!-- Experience Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Web Design</h4>
                                <p><i class="far fa-calendar-alt"></i>2012 - 2014 | Сompany Inc</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>

                        <!-- Experience Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Fornt-End Developer</h4>
                                <p><i class="far fa-calendar-alt"></i>2014 - 2015 | Сompany Inc</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>

                        <!-- Experience Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Web Development</h4>
                                <p><i class="far fa-calendar-alt"></i>2015 - 2019 | Сompany Inc</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>
                    </div>
                </div>

                <!-- Education Column Start -->
                <div class="col-lg-6 col-sm-12">

                    <!-- Header Block -->
                    <div class="header-box mb-50 mob-box-mt">
                        <h3>Education</h3>
                    </div>

                    <div class="experience box-2">

                        <!-- Education Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Phd</h4>
                                <p><i class="far fa-calendar-alt"></i>2011 - 2013 | Computer Science</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>

                        <!-- Education Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Post Graduation</h4>
                                <p><i class="far fa-calendar-alt"></i>2013 - 2016 | Computer Science</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>

                        <!-- Education Item -->
                        <div class="item">
                            <div class="main">
                                <h4>Gradution</h4>
                                <p><i class="far fa-calendar-alt"></i>2016 - 2018 | Computer Science</p>
                            </div>
                            <p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Row Start -->
            <div class="row mt-100">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-50">
                        <h3>Skills</h3>
                    </div>
                </div>
            </div>

            <div class="box-1 skills">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">

                        <!-- Skill Item -->
                        <div class="skill-item">
                            <h4 class="progress-title">HTML5</h4>
                            <div class="progress">
                                <div class="progress-bar" style="width:98%">
                                    <div class="progress-value">98%</div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="skill-item">
                            <h4 class="progress-title">CSS3</h4>
                            <div class="progress">
                                <div class="progress-bar" style="width:85%">
                                    <div class="progress-value">85%</div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="skill-item">
                            <h4 class="progress-title">JavaScript</h4>
                            <div class="progress">
                                <div class="progress-bar" style="width:90%">
                                    <div class="progress-value">90%</div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Item -->
                        <div class="skill-item">
                            <h4 class="progress-title">UI/UX designer</h4>
                            <div class="progress">
                                <div class="progress-bar" style="width:77%">
                                    <div class="progress-value">77%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="row">

                            <!-- Skill Item -->
                            <div class="col-lg-6 col-sm-6">
                                <div class="chart" data-percent="80" data-bar-color="#fff"> 80% <p>PHP</p></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="col-lg-6 col-sm-6">
                                <div class="chart" data-percent="70" data-bar-color="#fff"> 70% <p>Illustrator</p></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="col-lg-6 col-sm-6">
                                <div class="chart" data-percent="60" data-bar-color="#fff"> 60% <p>Photoshop</p></div>
                            </div>

                            <!-- Skill Item -->
                            <div class="col-lg-6 col-sm-6">
                                <div class="chart" data-percent="90" data-bar-color="#fff"> 90% <p>AngularJS</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Work Process Row Start -->
            <div class="row mt-100">

                <!-- Header Block -->
                <div class="col-md-12">
                    <div class="header-box mb-50">
                        <h3>My Working Process</h3>
                    </div>
                </div>
            </div>

            <div class="box-2 work-process mb-100">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 ltr">

                        <!-- Working Process Item-->
                           <div class="single-wp width-sm process-1">
                            <p class="wp-step">01</p>
                            <h4 class="wp-title">Discuss idea</h4>
                            <p>I could describe these conceptions, also impress upon paper all that is living.</p>
                        </div>

                        <!-- Working Process Item-->
                        <div class="single-wp width-sm process-2">
                            <p class="wp-step">02</p>
                            <h4 class="wp-title">Creative concept</h4>
                            <p>I could describe these conceptions, also impress upon paper all that is living.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 hidden-sm">

                        <!-- Working Process Circle-->
                        <div class="wp-circle">
                            <h4>Working Process</h4>
                            <span class="dots top-l"></span>
                            <span class="dots bottom-l"></span>
                            <span class="dots top-r"></span>
                            <span class="dots bottom-r"></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 rtl">

                        <!-- Working Process Item-->
                        <div class="single-wp width-sm process-3">
                            <p class="wp-step">03</p>
                            <h4 class="wp-title">Web concept</h4>
                            <p>I could describe these conceptions, also impress upon paper all that is living.</p>
                        </div>

                        <!-- Working Process Item-->
                        <div class="single-wp width-sm process-4">
                            <p class="wp-step">04</p>
                            <h4 class="wp-title">Final concept</h4>
                            <p>I could describe these conceptions, also impress upon paper all that is living.</p>
                        </div>
                    </div>
                </div>
            </div>
          </section>
     </div>

    <!-- Portfolio Section -->
      <div class="page pt-portfolio" data-simplebar>
        <section class="container">

            <!-- Section Title -->
            <div class="header-page mt-70 mob-mt">
                <h2>Portfolio</h2>
                <span></span>
            </div>

            <!-- Portfolio Filter Row Start -->
            <div class="row mt-100">
                <div class="col-lg-12 col-sm-12 portfolio-filter">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".brand">Brand</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".graphic">Graphic</li>
                    </ul>
                </div>
            </div>

            <!-- Portfolio Item Row Start -->
            <div class="row portfolio-items mt-100 mb-100">

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 graphic">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-1.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Graphic</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-1.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 design">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-2.jpg')}}">
                            <figcaption>
                            <h3>Project Name</h3>
                            <p>Design</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-2.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 brand">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-3.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Graphic</p><i class="fas fa-video"></i>
                            <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 graphic">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-4.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Design</p><i class="fas fa-image"></i>
                            <a class="image-link" href="img/portfolio/img-4.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 design">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-5.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Design</p><i class="fas fa-video"></i>
                            <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 brand">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-6.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Brand</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-6.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 graphic">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-7.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Brand</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-7.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 design">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/img-8.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Brand</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-8.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>

                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6 brand">
                    <figure>
                        <img alt="" src="img/portfolio/img-9.jpg')}}">
                        <figcaption>
                            <h3>Project Name</h3>
                            <p>Graphic</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/img-9.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
          </div>
     <!-- Blog Section -->
      <div class="page pt-blog" data-simplebar>
        <section class="container">

            <!-- Section Title -->
             <div class="header-page mt-70 mob-mt">
                <h2>Blog</h2>
                <span></span>
            </div>

            <!-- Blog Row Start -->
            <div class="row blog-masonry mt-100 mb-50">

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-1.jpg')}}"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                            <li><a href="#">15 April 2019</a></li>
                            <li><a href="#">Lifestyle</a></li>
                           </ul>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-2.jpg')}}"></a>
                            <a href="https://www.youtube.com/watch?v=k_okcNVZqqI" class="btn-play"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                            <li><a href="#">10 March 2019</a></li>
                            <li><a href="#">Lifestyle</a></li>
                           </ul>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-3.jpg')}}"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                            <li><a href="#">02 March 2019</a></li>
                            <li><a href="#">Work</a></li>
                        </ul>
                        <p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-4.jpg')}}"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                            <li><a href="#">29 March 2019</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-5.jpg')}}"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                            <li><a href="#">14 April 2019</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                        <p>Tower Hamlets or mass or members of propaganda bananas real estate. However, a large and a mourning, vel euismod.</p>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single-blog.html"><img alt="" src="{{asset('img/blog/img-6.jpg')}}"></a>
                            <a href="https://www.youtube.com/watch?v=k_okcNVZqqI" class="btn-play"></a>
                        </div>
                        <h4><a href="single-blog.html">Road to success</a></h4>
                        <ul>
                                <li><a href="#">29 April 2019</a></li>
                                <li><a href="#">Career</a></li>
                        </ul>
                        <div class="blog-btn">
                            <a href="single-blog.html" class="btn-st">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-100 mb-90">
                <div class="col-lg-12 col-sm-12 text-center">
                    <a href="blog-list.html" class="btn-st">My Blog</a>
                </div>
            </div>

        </section>
    </div>

    <!-- Contact Section -->
     <div class="page pt-contact" data-simplebar>
        <section class="container">

            <!-- Section Title -->
              <div class="header-page mt-70 mob-mt">
                <h2>Contact</h2>
                <span></span>
            </div>

            <!-- Form Start -->
            <div class="row mt-100">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form ">
                        <form method="post" class="box-1 contact-valid" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="form-control" name="note"  id="note" placeholder="Your Message"></textarea>
                                </div>
                                 <div class="col-lg-12 col-sm-12 text-center">
                                    <button type="submit" class="btn-st">Send Message</button>
                                    <div id="loader">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="error-messages">
                                        <div id="success">
                                            <i class="far fa-check-circle"></i>Thank you, your message has been sent.
                                        </div>
                                        <div id="error">
                                            <i class="far fa-times-circle"></i>Error occurred while sending email. Please try again later.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="box-2 contact-info">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 info">
                        <i class="fas fa-paper-plane"></i>
                         <p>example@example.com</p>
                          <span>Email</span>
                    </div>
                    <div class="col-lg-4 col-sm-12 info">
                        <i class="fas fa-map-marker-alt"></i>
                         <p>123 Lorem Ipsum, USA</p>
                          <span>Addres</span>
                    </div>
                    <div class="col-lg-4 col-sm-12 info">
                        <i class="fas fa-phone"></i>
                         <p>(+1) 123 456 7890</p>
                          <span>Phone</span>
                    </div>
                </div>
            </div>

            <!--Google Map Start-->
            <div class="google-map box-1 mt-100 mb-100">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div> --}}
                        <div id="mapid"></div>
                    </div>
                </div>
            </div>
        </section>
      </div>

</div>
  </div>
</div>
  </div>
</div>
</div>
@endsection