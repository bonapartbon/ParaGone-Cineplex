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
                <a href="/">Home</a> » <span class="breadcrumb_last" aria-current="page">PayPal Payment</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->

    {{-- Ticket Section --}}
    <section class="w3l-grids">
        <div class="grids-main py-5 ">
            <div class="container py-lg-3 ">
                <h1 class="text-center mb-3">Pay With Paypal</h1>
                <h5 class="text-center mb-3">Order Has Been Made.</h5>
                <div class="text-center">
                    <p>Title: {{ $bookings->movieName }}</p>
                    <p>Type: {{ $bookings->bookingType }}</p>
                    <p>Ticket: {{ $bookings->bookingTicket }}</p>
                    <p>Time: {{ $bookings->bookingTime }}</p>
                    <p>Total: ${{ number_format($bookings->total,2) }}</p>
                </div>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    @csrf
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="paragonecineplex@gmail.com">
                    <input type="hidden" name="item_name" value="{{ $bookings->movieName }} Ticket(s)">
                    @if ($bookings->bookingType == "2D")
                    <input type="hidden" name="amount" value="3">
                    @elseif ($bookings->bookingType == "3D")
                    <input type="hidden" name="amount" value="4">
                    @elseif ($bookings->bookingType == "4DX")
                    <input type="hidden" name="amount" value="5">
                    @endif
                    <input type="hidden" name="quantity" value="{{ $bookings->bookingTicket }}">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="{{ secure_url('payment/success') }}">
                    <input type="hidden" name="cancel_return" value="{{ secure_url('payment/fail') }}">
                    <div class="text-center mt-3">
                        <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- End of section --}}

    <footer class="copyright" style="position: absolute; bottom: 0;">
        <p>© COPYRIGHT RESERVED © 2021 PARAGONE CINEPLEX. ALL RIGHTS RESERVED.</p>
    </footer>

    <script src="{{ secure_asset('template-js/jquery-3.3.1.min.js') }}"></script>

    <!-- //responsive tabs -->
    <!--/theme-change-->
    <script src="{{ secure_asset('template-js/theme-change.js') }}"></script>
    <!-- //theme-change-->
    <script src="{{ secure_asset('template-js/owl.carousel.js') }}"></script>
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

    <script src="{{ secure_asset('template-js/bootstrap.min.js') }}"></script>

</body>


</html>