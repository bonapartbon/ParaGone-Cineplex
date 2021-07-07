<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Home</title>
</head>

<body>
    @include('layouts.includes.header')

    <!-- main-slider -->
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" style="background-image: url({{asset('template-images/banner1.jpg')}})">
                            <div class="banner-info">
                                <h3>Latest Movie Trailers</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
                                        voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view bg bg2" style="background-image: url({{asset('template-images/banner2.jpg')}})">
                            <div class="banner-info">
                                <h3>Latest Online Movies</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
                                        voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog2" class="popup-with-zoom-anim play-view1">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/395376850" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" style="background-image: url({{asset('template-images/banner3.jpg')}})">
                            <div class="banner-info">
                                <h3>Latest Movie Trailers</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
                                        voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog3" class="popup-with-zoom-anim play-view1">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/389969665" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" style="background-image: url({{asset('template-images/banner4.jpg')}})">
                            <div class="banner-info">
                                <h3>Latest Online Movies</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para"> Consequuntur hic odio
                                        voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog4" class="popup-with-zoom-anim play-view1">
                                    <span class="video-play-icon">
                                        <span class="fa fa-play"></span>
                                    </span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-slider-->
    <!-- main-slider -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Now Showing</h3>
                        </div>

                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                
                <div class="w3l-populohny-grids">

                    @foreach ($movies as $movie)
                    @if ($movie->movieCurrent == "showing")
                    <div class="item vhny-grid">
                    <a href="{{ route('booking.show', $movie->id) }}">
                        <div class="box16">
                                <figure>
                                    <img class="img-fluid" src="img/{{ $movie->movieImg }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">{{ $movie->movieTitle }}</h3>
                                    <h4>
                                        <span class="post"><span class="fa fa-clock-o"> </span> {{ $movie->movieDuration }}mn</span>
                                    </h4>
                                </div>                            
                        </div>
                        </a>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->


    @include('layouts.includes.footer')
</body>

</html>