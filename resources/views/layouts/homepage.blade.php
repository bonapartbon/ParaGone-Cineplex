<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Home</title>
</head>

<body>
    @include('layouts.includes.header')
    <div id="home-section-1" class="movie-show-container">

        <h1>Currently Showing</h1>
        <h3>Book a movie now</h3>
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-4 pb-0">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="movies-container">
            @foreach ($movies as $movie)
            @if ($movie->movieCurrent == "showing")
            <div class="movie-box">
                <img src="img/{{ $movie->movieImg }}" class="img-thumbnail">
                <div class="movie-info">
                    <h3>{{ $movie->movieTitle }}</h3>
                    <a href="{{ route('booking.show', $movie->id) }}"><i class="fas fa-ticket-alt"></i> Book a seat</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <div id="home-section-2" class="services-section">
        <h1>How it works</h1>
        <h3>3 Simple steps to book your favourit movie!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choose your favourite movie</h2>
                <p>choose the movie you want to watch at our theaters</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Pay for your tickets</h2>
                <p>choose the movie you want to watch at our theaters</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Pick your seats & Enjoy watching</h2>
                <p>choose the movie you want to watch at our theaters</p>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>


    @include('layouts.includes.footer')
</body>

</html>
