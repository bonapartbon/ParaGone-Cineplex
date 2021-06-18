<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Booking</title>
</head>

<body>
@include('layouts.includes.header')
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>RESERVE YOUR TICKET</h1>
        </div>
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
                </table>
            </div>
            <!-- <div class="d-flex justify-content-center py-3">
                    <iframe class="" width="1120" height="630" src="https://www.youtube.com/embed/fEE4RO-_jug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
 
             <div class="booking-form-container">
                <form action="/booking" method="POST">
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

                    <input placeholder="Full Name" type="text" name="bookingName" required>
                    <input type="email" name="bookingEmail" class="form-control" placeholder="Email Address" required>
                    <input placeholder="Phone Number" type="text" name="bookingPNumber" required>

                    <button type="submit" value="submit" name="submit" class="form-btn">Book Now</button>

                </form>
            </div>


        </div>
    </div>

    <footer class="copyright">
        © COPYRIGHT RESERVED © 2021 PARAGONE CINEPLEX. ALL RIGHTS RESERVED.
    </footer>


    <script src="{{asset('user-scripts/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('user-scripts/script.js')}}"></script>
</body>

</html>