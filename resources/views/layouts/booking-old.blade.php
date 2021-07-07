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
                    <input type="text" name="total" id="total" hidden>

                    <select name="bookingType" class="form-select" id="bookingType" aria-label="Default select example" oninput="calc();" required>
                        <option value="" disabled selected>THEATRE TYPE</option>
                        <option>2D</option>
                        <option>3D</option>
                        <option>4DX</option>
                    </select>

                    <select name="bookingDate" required>
                        <option value="" disabled selected>DATE</option>
                        <option>June 19, 2021</option>
                        <option>June 21, 2021</option>
                        <option>June 22, 2021</option>
                        <option>June 23, 2021</option>
                        <option>June 24, 2021</option>
                    </select>

                    <select name="bookingTime" required>
                        <option value=""  disabled selected>TIME</option>
                        <option>09:00 AM</option>
                        <option>12:00 AM</option>
                        <option>03:00 PM</option>
                        <option>06:00 PM</option>
                        <option>09:00 PM</option>
                    </select>

                    <select name="bookingTicket" id="bookingTicket" oninput="calc();" required>
                        <option value="" disabled selected>NUMBER OF TICKETS</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>

                    @if (auth()->check())
                    <input type="text" name="bookingName" required value="{{auth()->user()->name}}">
                    <input type="email" name="bookingEmail" required value="{{auth()->user()->email}}">
                    @else
                    <input type="text" name="bookingName" required placeholder="Full Name" >
                    <input type="email" name="bookingEmail" class="form-control" placeholder="Email Address" required>

                    @endif

                    <input placeholder="Phone Number" type="text" name="bookingPNumber" required>

                    <button type="submit" value="submit" formaction="{{route('booking.index')}}" class="form-btn"><b>Book Now - Total: $<span id="bookingTotal">0</span></b></button>

                </form>
            </div>
            @endif
        </div>
    </div>
    @include('layouts.includes.footer')
</body>

</html>