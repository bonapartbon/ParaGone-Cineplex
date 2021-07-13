<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | About Us</title>
</head>

<body>

    @include('layouts.includes.header')

    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="/">Home</a> Â» <span class="breadcrumb_last" aria-current="page">About</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->
    <!-- /about-->
    <div class="w3l-ab-grids py-5">
        <div class="container py-lg-4">
            <div class="row ab-grids-sec align-items-center">
                <div class="col-lg-6 ab-right">
                    <img class="img-fluid" src="{{asset('template-images/banner1.jpg')}}">
                </div>
                <div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
                    <h3 class="hny-title">ParaGone Cineplex</h3>
                    <p class="mt-3">Prem Cineplex (UC) (Cambodia) is a state-of-the-art cinema originating in South Korea under the Eugenetek Corporation Group, headquartered in Korea. Eugenetek has been recognized as an exclusive consulting and supply company for the installation of equipment for large-scale modern cinema enterprises since 1986.</p>
                </div>
            </div>

            <div class="w3l-counter-stats-info text-center">
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{ \App\Models\Movie::where('movieCurrent', 'showing')->count('id') }}</p>
                            <h4>Showing Movies</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{ \App\Models\Movie::where('movieCurrent', 'upcoming')->count('id') }}</p>
                            <h4>Upcoming Movies</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{ \App\Models\User::where('is_admin', '0')->count('id') }}</p>
                            <h4>Users</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">2021</p>
                            <h4>Established</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //about-->
    <!--grids-sec1-->
    <section class="w3l-team" id="team">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Our Actors</h3>
                </div>
                <div class="owl-team owl-carousel owl-theme">
                    <div class="item vhny-grid">
                        <div class="d-grid team-info">
                            <div class="column position-relative">
                                <a href="#url"><img src="{{asset('template-images/a1.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                            </div>
                            <div class="column text-center">
                                <h3 class="name-pos"><a href="#url">Dwayne johnson</a></h3>

                                <div class="social">
                                    <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('template-images/a2.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">Karen Gillan</a></h3>

                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('template-images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">Chris Hemsworth</a></h3>

                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('template-images/a4.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">Elton John</a></h3>

                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('template-images/a5.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">Liu Yifei</a></h3>
                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('template-images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">Chris Hemsworth</a></h3>

                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </section>
    <!--//grids-sec1-->
    <!--/testimonials-->
    <section class="w3l-clients" id="clients">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Our Testimonials</h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div class="owl-clients owl-carousel owl-theme mb-lg-5">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team1.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Johnson smith</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team2.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Alexander leo</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team3.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Roy Linderson</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team4.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Mike Thyson</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team2.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Laura gill</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                            voluptate rem ullam dolore!.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="{{asset('template-images/team3.jpg')}}" class="img-fluid" alt="/">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Smith Johnson</h3>
                                            <p class="indentity">Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!--//testimonials-->

    @include('layouts.includes.footer')
</body>

</html>