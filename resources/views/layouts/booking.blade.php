<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Booking</title>
</head>

<body>
    @include('layouts.includes.header')
    <div class="booking-panel">
        @if ($movie->movieCurrent == "showing")
        <div class="booking-panel-section booking-panel-section1">
            <h1>RESERVE YOUR TICKET</h1>
        </div>
        @else
        <div class="booking-panel-section booking-panel-section1">
            <h1>UPCOMING MOVIE</h1>
        </div>
        @endif
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <img src="/img/{{$movie->movieImg}}" class="img-thumbnail">
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4 ">
            <div class="title">{{ $movie->movieTitle }}</div>

            <div class="movie-information">

                <table>
                    <tr>
                        <td>GENGRE</td>
                        <td>{{ $movie->movieGenre }}</td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td>{{ $movie->movieDuration }} min</td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td>{{ $movie->movieRelDate }}</td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td>{{ $movie->movieDirector }}</td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td>{{ $movie->movieActors }}</td>
                    </tr>
                    <tr>
                        <td>TRAILER</td>
                        <td><button style="background-color: #192f59; color: white;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#TrailerModal">Click Here!</button></td>
                    </tr>
                </table>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="TrailerModal" tabindex="-1" aria-labelledby="TrailerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="position-absolute top-50 start-50 translate-middle">
                            <iframe width="1120" height="630" src="{{ $movie->movieTrailer }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>

            @if ($movie->movieCurrent == "showing")
            <div class="booking-form-container">
                <form method="POST">
                    @csrf
                    <input type="text" name="movieName" value="{{ $movie->movieTitle }}" hidden>
                    
                    <select name="bookingType" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>THEATRE TYPE</option>
                        <option>2D</option>
                        <option>3D</option>
                        <option>4DX</option>
                    </select>
                    
                    <select name="bookingDate" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="June 19, 2021">June 19, 2021</option>
                        <option value="June 21, 2021">June 21, 2021</option>
                        <option value="June 22, 2021">June 22, 2021</option>
                        <option value="June 23, 2021">June 23, 2021</option>
                        <option value="June 24, 2021">June 24, 2021</option>
                    </select>

                    <select name="bookingTime" required>
                        <option value="" disabled selected>TIME</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="12:00 AM">12:00 AM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="06:00 PM">06:00 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                    </select>

                    <select name="bookingTicket" required>
                        <option value="" disabled selected>NUMBER OF TICKETS</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>

                    @if (auth()->check())
                    <input type="text" name="bookingName" required  value="{{auth()->user()->name}}">
                    <input type="email" name="bookingEmail" required  value="{{auth()->user()->email}}">
                    @else
                    <input placeholder="Full Name" type="text" name="bookingName" required>
                    <input type="email" name="bookingEmail" class="form-control" placeholder="Email Address" required>
                    @endif

                    <input placeholder="Phone Number" type="text" name="bookingPNumber" required>
                    <button type="submit" value="submit" formaction="{{route('booking.index')}}" class="form-btn">Book Now</button>

                </form>
            </div>
            @endif
        </div>
    </div>
    @include('layouts.includes.footer')
</body>

</html>