@extends('layouts.app')

@section('content')

    <!-- Home Section -->
      <div class="pt-home">

        <div class="addition-bg">
            <div class="overlay overlay-dark-20 cover-all">
                <div id="slides">
                    @foreach ($sliders as $num => $slider)
                    <div class="slide">
                        <span class="animate {{$slider->slider_animated}}" style="background-image: url(../storage/{{$slider->slider_photo_path}})"></span>
                        <div class="banner">{!!$slider->slider_description!!}</div>
                    </div>
                    @endforeach
                    {{-- <div class="slide">
                    <span class="animate down" style="background-image: url(../img/slider/8.jpg)"></span>
                    <div class="banner"><h1>Testing Slideshow With Photo 1</h1></div>
                    </div>
                    <div class="slide">
                    <span class="animate in" style="background-image: url(../img/slider/10.jpeg)"></span>
                    <div class="banner"><h1>Testing Slideshow With Photo 2</h1></div>
                    </div>
                    <div class="slide">
                    <span class="animate down" style="background-image: url(../img/slider/15.jpg)"></span>
                    <div class="banner"><h1>Testing Slideshow With Photo 3</h1></div>
                    </div>
                    <div class="slide">
                    <span class="animate out" style="background-image: url(../img/slider/16.jpg)"></span>
                    <div class="banner"><h1>Testing Slideshow With Photo 4</h1></div>
                    </div>
                    <div class="slide">
                    <span class="animate right" style="background-image: url(../img/slider/17.jpeg)"></span>
                    <div class="banner"><h1>Testing Slideshow With Photo 5</h1></div>
                    </div> --}}
                </div>
                <div class="square">
                    <div class="the-square"></div>
                </div>
            </div>    
        </div>

         <section>
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
                <h2>About Us</h2>
                <span></span>
            </div>

            <!-- Personal Info Start -->
            <div class="row mt-100">

                <!-- Information Block -->
                <div class="col-lg-12 col-sm-12">
                    <div class="info box-1">
                        <div class="row">
                            <div class="col-lg-3 col-sm-4">
                                <div class="">
                                    <img alt="" src="{{asset('img/logo-pt-daya-turangga-wisesa.png')}}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <h4>PT. Daya Turangga Wisesa</h4>
                                <div class="loc">
                                    <i class="fas fa-map-marked-alt"></i> Denpasar, Bali, Indonesia
                                </div>
                                <p>PT. Daya Turangga Wisesa provides Information Technology, Electrical, Building Construction and plumbing services.
                                </p>
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
                        <h3>Our Services</h3>
                    </div>
                </div>
                @foreach ($services as $num => $service)
                    <div class="col-lg-6 col-sm-6">
                        <div class="service box-1 mb-40">
                            <i class="{{$service->service_icon}}"></i>
                            <h4>{{$service->service_title}}</h4>
                            {!!$service->service_description!!}
                        </div>
                    </div>
                @endforeach
                {{-- <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-1 mb-40">
                        <i class="fas fa-desktop"></i>
                        <h4>Information Technology</h4>
                        <p>Scope of work cisco partner, fire alarm installation, public address and sound system, CCTV, IPTV, IP phone, call nurse system, access door control, LED videotron and monitor, LAN (Local Area Network), software and aplication and trainee data and network.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-2 mb-40">
                        <i class="fas fa-bolt"></i>
                        <h4>Electrical</h4>
                        <p>Scope of work electric installation, armature and ligting, LV power electric panel, lightning protection, grounding system, power system and control, power electronic and control, electric power and monitor system, energy management system, power transformer and installation, power copensator design and power industrial and installation.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-2 mb-40">
                        <i class="far fa-building"></i>
                        <h4>Building Construction</h4>
                        <p>Scope of work building construction and civil construction.</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-6 col-sm-6">
                    <div class="service box-1 mb-40">
                        <i class="fas fa-tint"></i>
                        <h4>Plumbing</h4>
                        <p>Scope of work pumps installation, motor drive and electric machine, AC (Air Condition) installation, lift, travelator, hygienic AC for hospital, commercial AC (office, hotels, etc), water hydrant installation, water sprinkler installation, fire pumps, diesel pumps, pressurized fan and ducting.</p>
                    </div>
                </div> --}}
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
                        <li data-filter="*">All</li>
                        @foreach ($portfolio_tags as $num => $portfolio_tag)
                            @if($num == '0')
                                <input type="hidden" id="filter-portfolio" value="{{$portfolio_tag->portfolio_tag_name}}">
                            @endif
                            <li data-filter="{{$portfolio_tag->portfolio_tag_name}}">{{$portfolio_tag->portfolio_tag_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Portfolio Item Row Start -->
            <div class="row portfolio-items mt-100 mb-100">
                @foreach ($portfolios as $num => $portfolio)
                    <div class="item col-lg-4 col-sm-6" data-filter="{{$portfolio->PortfolioTag->portfolio_tag_name}}">
                        <figure>
                            <img alt="" src="{{'/storage/'.$portfolio->portfolio_photo_path}}">
                            <figcaption>
                                <h3>{{$portfolio->portfolio_name}}</h3>
                                <p>{{$portfolio->PortfolioTag->portfolio_tag_name}}</p><i class="fas fa-image"></i>
                                <a class="image-link" href="{{'/storage/'.$portfolio->portfolio_photo_path}}"></a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                {{-- <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="building construction">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/construction - Marka Runway.jpg')}}">
                        <figcaption>
                            <h3>Marka Runway</h3>
                            <p>Building Construction</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/construction - Marka Runway.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="building-construction">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/construction - Steel Canopy.jpg')}}">
                        <figcaption>
                            <h3>Steel Canopy</h3>
                            <p>Building Construction</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/construction - Steel Canopy.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="building-construction">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/construction - Steel Construction.jpg')}}">
                        <figcaption>
                            <h3>Steel Construction</h3>
                            <p>Building Construction</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/construction - Steel Construction.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="building-construction">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/construction - Steel Construction2.jpg')}}">
                        <figcaption>
                            <h3>Steel Construction</h3>
                            <p>Building Construction</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/construction - Steel Construction2.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="electrical">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/electrical - MV Panel.jpg')}}">
                        <figcaption>
                            <h3>MV Panel</h3>
                            <p>Electrical</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/electrical - MV Panel.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="electrical">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/electrical - Outdoor Installation.jpg')}}">
                        <figcaption>
                            <h3>Outdoor Installation</h3>
                            <p>Electrical</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/electrical - Outdoor Installation.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="electrical">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/electrical - Power Transformer and Test Insullation.jpg')}}">
                        <figcaption>
                            <h3>Power Transformer and Test Insullation</h3>
                            <p>Electrical</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/Power Transformer and Test Insullation.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="electrical">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/electrical -LV Power Panel.jpg')}}">
                        <figcaption>
                            <h3>LV Power Panel</h3>
                            <p>Electrical</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/electrical -LV Power Panel.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="information-technology">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/it - Controller Solar Cell.jpg')}}">
                        <figcaption>
                            <h3>Controller Solar Cell</h3>
                            <p>Information Technology</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/it - Controller Solar Cell.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="information-technology">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/it - Inverter.jpg')}}">
                        <figcaption>
                            <h3>Inverter</h3>
                            <p>Information Technology</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/it - Inverter.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="information-technology">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/it - LED Videotron Installation.jpg')}}">
                        <figcaption>
                            <h3>LED Videotron Installation</h3>
                            <p>Information Technology</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/it - LED Videotron Installation.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="information-technology">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/it - Test LED Videotron.jpg')}}">
                        <figcaption>
                            <h3>Test LED Videotron</h3>
                            <p>Information Technology</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/it - Test LED Videotron.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="plumbing">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/Plumbing - Maintenance Sewage Drainage STP.jpg')}}">
                        <figcaption>
                            <h3>Maintenance Sewage Drainage STP</h3>
                            <p>Plumbing</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/Plumbing - Maintenance Sewage Drainage STP.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="plumbing">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/Plumbing - Plumbing and Valves Installation.jpg')}}">
                        <figcaption>
                            <h3>Plumbing and Valves Installation</h3>
                            <p>Plumbing</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/Plumbing - Plumbing and Valves Installation.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="plumbing">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/Plumbing - Power Pump Control Panel.jpg')}}">
                        <figcaption>
                            <h3>Power Pump Control Panel</h3>
                            <p>Plumbing</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/Plumbing - Power Pump Control Panel.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="item col-lg-4 col-sm-6" data-filter="plumbing">
                    <figure>
                        <img alt="" src="{{asset('img/portfolio/Plumbing - Sewage Submersible Pumps and Installation.jpg')}}">
                        <figcaption>
                            <h3>Sewage Submersible Pumps and Installation</h3>
                            <p>Plumbing</p><i class="fas fa-image"></i>
                            <a class="image-link" href="{{asset('img/portfolio/Plumbing - Sewage Submersible Pumps and Installation.jpg')}}"></a>
                        </figcaption>
                    </figure>
                </div> --}}
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

            <!-- Contact Info -->
            <div class="box-2 contact-info">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 info">
                        <i class="fas fa-paper-plane"></i>
                        <span>E-Mail</span>
                        <p>admin@dayaturanggawisesa.co.id</p>
                    </div>
                    <div class="col-lg-3 col-sm-12 info">
                        <i class="fas fa-phone"></i>
                        <span>Telephone</span>
                         <p>+62361499093</p>
                    </div>
                    <div class="col-lg-2 col-sm-12 info">
                        <i class="fas fa-fax"></i>
                        <span>Fax</span>
                        <p>+62361483586</p>
                    </div>
                    <div class="col-lg-4 col-sm-12 info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Addres</span>
                        <p>Jl. Gunung Soputan No.28. Kel. Pemecutan Kelod Kecamatan Denpasar Barat Denpasar Bali.</p>
                    </div>
                    
                </div>
            </div>

            <!--Google Map Start-->
            <div class="google-map box-1 mt-100 mb-100">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div> --}}
                        <div id="mapid"></div>
                        <input type="hidden" id="pt-name" value="PT. Daya Turangga Wisesa">
                        <input type="hidden" id="pt-telephone" value="+62361499093">
                        <input type="hidden" id="pt-fax" value="+62361483586">
                        <input type="hidden" id="pt-address" value="Jl. Gunung Soputan No.28. Kel. Pemecutan Kelod Kecamatan Denpasar Barat Denpasar Bali.">
                        <input type="hidden" id="pt-lat" value="-8.688396">
                        <input type="hidden" id="pt-lng" value="115.189303">
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