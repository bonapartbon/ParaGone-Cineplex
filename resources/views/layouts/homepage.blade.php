<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Home</title>
</head>

<body>
    @include('layouts.includes.header')
    @include('layouts.includes.main-slider')

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