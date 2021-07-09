<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Ticket</title>
</head>

<body>

    @include('layouts.includes.header')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="/">Home</a> » <span class="breadcrumb_last" aria-current="page">Ticket</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->

    {{-- Ticket Section --}}
    <section class="w3l-grids">
        <div class="grids-main py-5 ">
            <div class="container py-lg-3 ">
                <div class="headerhny-title mb-4">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">YOUR TICKET</h3>
                        </div>

                    </div>
                </div>
                <div class="w3l-populohny-grids">

                    @if (auth()->check())
                        <p class="display-none">
                            <span>{{ $totalBooking = 0 }}</span>
                        </p>
                        @foreach ($bookings as $booking)
                            @if (auth()->user()->email == $booking->bookingEmail)
                                <p class="display-none">
                                    <span>{{ $totalBooking = $loop->index + 1 }}</span>
                                </p>
                            @endif

                        @endforeach
                        @if ($totalBooking > 0)
                            @foreach ($bookings as $booking)
                                @if (auth()->user()->email == $booking->bookingEmail)
                                    <div class="card" style="width: 16rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Ticket</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Movie: {{ $booking->movieName }}
                                            </h6>
                                            <p class="card-subtitle mb-2 text-muted">Type: {{ $booking->bookingType }}
                                            </p>
                                            <p class="card-subtitle mb-2 text-muted">Time: {{ $booking->bookingTime }}
                                            </p>
                                            <p class="card-subtitle mb-2 text-muted">Seat:
                                                {{ $booking->bookingTicket }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <p>You don't have any ticket yet.</p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- End of section --}}

    <footer class="copyright" style="position: absolute; bottom: 0;">
        <p>© COPYRIGHT RESERVED © 2021 PARAGONE CINEPLEX. ALL RIGHTS RESERVED.</p>
    </footer>

    <script src="{{ asset('template-js/jquery-3.3.1.min.js') }}"></script>

    <!-- //responsive tabs -->
    <!--/theme-change-->
    <script src="{{ asset('template-js/theme-change.js') }}"></script>
    <!-- //theme-change-->
    <script src="{{ asset('template-js/owl.carousel.js') }}"></script>
    <!-- script for banner slider-->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <script src="{{ asset('template-js/bootstrap.min.js') }}"></script>

</body>


</html>
