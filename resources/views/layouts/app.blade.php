<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Login</title>
</head>

<body>
    <div id="app">

        @include('layouts.includes.header')

        <main class="py-4 login-container">
            @yield('content')

        </main>
    </div>
</body>

<footer class="copyright" style="position: absolute; bottom: 0;">
    <p>© COPYRIGHT RESERVED © 2021 PARAGONE CINEPLEX. ALL RIGHTS RESERVED.</p>
</footer>
<script src="{{asset('template-js/jquery-3.3.1.min.js')}}"></script>

<!-- //responsive tabs -->
<!--/theme-change-->
<script src="{{asset('template-js/theme-change.js')}}"></script>
<!-- //theme-change-->
<script src="{{asset('template-js/owl.carousel.js')}}"></script>
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

<script src="{{asset('template-js/bootstrap.min.js')}}"></script>
</html>