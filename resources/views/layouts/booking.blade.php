<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('user-style/styles.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>ParaGone Cineplex | Booking</title>
    <link rel="icon" type="image/png" href="{{asset('img/paragone-favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body style="background-color:#192f59;">
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
        <div class="booking-panel-section booking-panel-section4">
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

            <div class="booking-form-container">
                <form action="/booking" method="POST">
                @csrf
                    <input type="text" name="movieName" value="{{ $movie->movieTitle }}" hidden>

                    
                        <select name="bookingTheatre" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Theatre</option>
                            <option>Mini (3 Seats)</option>
                            <option>Medium (5 Seats)</option>
                            <option>Giant (10 Seats)</option>
                        </select>
                    

                    <select name="bookingType" required>
                        <option value="" disabled selected>TYPE</option>
                        <option value="3d">3D</option>
                        <option value="2d">2D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>

                    <select name="bookingDate" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="12-3">March 12,2019</option>
                        <option value="13-3">March 13,2019</option>
                        <option value="14-3">March 14,2019</option>
                        <option value="15-3">March 15,2019</option>
                        <option value="16-3">March 16,2019</option>
                    </select>

                    <select name="bookingTime" required>
                        <option value="" disabled selected>TIME</option>
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>

                    <input placeholder="First Name" type="text" name="bookingFName" required>

                    <input placeholder="Last Name" type="text" name="bookingLName">

                    <input placeholder="Phone Number" type="text" name="bookingPNumber" required>

                    <button type="submit" value="submit" name="submit" class="form-btn">Book a Seat</button>
                    
                </form>
                
                <!-- <form class="row g-3" action="{{ route('booking.store') }}" method="POST">
                    <h1>Add New Booking</h1>
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Title</label>
                        <input type="text" name="movieName" class="form-control" placeholder="Movie Title" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Theatre</label>
                        <select name="bookingTheatre" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Theatre</option>
                            <option>Mini (3 Seats)</option>
                            <option>Medium (5 Seats)</option>
                            <option>Giant (10 Seats)</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Type</label>
                        <select name="bookingType" class="form-select" aria-label="Default select example" required>
                            <option value="" disabled selected>Type</option>
                            <option>2D</option>
                            <option>3D</option>
                            <option>4DX</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input type="date" name="bookingDate" class="form-control" placeholder="Movie Date" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Time</label>
                        <input type="time" name="bookingTime" class="form-control" placeholder="Movie Time" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">First Name</label>
                        <input type="text" name="bookingFName" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="bookingLName" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="bookingPNumber" class="form-control" placeholder="Phone Number" required>
                    </div>



                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-lg">Add</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

    <script src="{{asset('user-scripts/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('user-scripts/script.js')}}"></script>
</body>

</html>