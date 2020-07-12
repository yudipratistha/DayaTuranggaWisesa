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
                                    <img alt="" src="{{'/storage/'.$about[0]->about_photo_path}}">
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-8">
                                <h4>{{$about[0]->about_title}}</h4>
                                <div class="loc">
                                    <i class="fas fa-map-marked-alt"></i> {{$about[0]->about_location}}
                                </div>
                                {!!$about[0]->about_description!!}
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
                        <input type="hidden" id="pt-lat" value="-8.688536075561665">
                        <input type="hidden" id="pt-lng" value="115.18988013267519">
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