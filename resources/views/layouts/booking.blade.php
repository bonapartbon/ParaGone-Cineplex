<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Booking</title>
</head>

<body>
    @include('layouts.includes.header')

    <!--/genre-single-->
    <section class="w3l-text-8 genre-single">
        <div class="text-bg-image">
            <iframe width="100%" height="450" src="{{$movie->movieTrailer}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container py-5">
            <div class="d-grid-1 py-lg-4">
                <div class="text">
                    <h3 class="hny-title">Reserve Your Ticket Now</h3>

                    <div class="genre-single-page my-lg-5 my-4">
                        <div class="row ab-grids-sec align-items-center">
                            <div class="col-lg-4 gen-right">
                                <img class="img-fluid" src="{{ $movie->movieImg }}">
                            </div>
                            <div class="col-lg-8 gen-left pl-lg-4 mt-lg-0 mt-5">

                                <h3 class="hny-title">{{ $movie->movieTitle }}</h3>
                                <p class="mt-2">{{ $movie->movieDes }}</p>

                                <div class="gen-right-1 mt-3">
                                    <div class="mb-1">
                                        <p><b>Genre: </b>{{ $movie->movieGenre }}</p>
                                    </div>
                                    <div class="mb-1">
                                        <p><b>Director: </b>{{ $movie->movieDirector }}</p>
                                    </div>
                                    <div class="mb-1">
                                        <p><b>Actors: </b>{{ $movie->movieActors }}</p>

                                    </div>
                                </div>

                                <ul class="admin-post mt-3">
                                    <li>
                                        <span class="fas fa-calendar-day"></span> {{ $movie->movieRelDate }}
                                    </li>
                                    <li>
                                        <span class="fa fa-clock-o"></span></span> {{ $movie->movieDuration }}mn
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @if ($movie->movieCurrent == "showing")
                    <div class="w3l-blog-single comments mt-5">
                        <div class="testi-top mt-5 pt-3">
                            <h3 class="post-content-title">SECURE YOUR SEATS</h3>
                            <div class="form-commets mt-4">
                                <form method="POST">
                                    @csrf


                                    <input type="text" name="movieName" value="{{ $movie->movieTitle }}" hidden>
                                    <input type="text" name="total" id="total" hidden>

                                    <div class="select-form">
                                        <select name="bookingType" class="form-control custom-select custom-select-lg" id="bookingType" aria-label="Default select example" oninput="calc();" required>
                                            <option value="" disabled selected>THEATRE TYPE </option>
                                            <option>2D</option>
                                            <option>3D</option>
                                            <option>4DX</option>
                                        </select>

                                        <select name="bookingDate" class="form-control custom-select custom-select-lg" required>
                                            <option value="" disabled selected>DATE</option>
                                            <option>June 19, 2021</option>
                                            <option>June 21, 2021</option>
                                            <option>June 22, 2021</option>
                                            <option>June 23, 2021</option>
                                            <option>June 24, 2021</option>
                                        </select>

                                        <select name="bookingStatus" class="display-none" required>
                                            <option value="Pending" selected></option>
                                        </select>
                                        <select name="status" class="display-none" required>
                                            <option value="Unpaid" selected></option>
                                        </select>

                                        <select name="bookingTime" class="form-control custom-select custom-select-lg" required>
                                            <option value="" disabled selected>TIME</option>
                                            <option>09:00 AM</option>
                                            <option>12:00 AM</option>
                                            <option>03:00 PM</option>
                                            <option>06:00 PM</option>
                                            <option>09:00 PM</option>
                                        </select>

                                        <select name="bookingTicket" class="form-control custom-select custom-select-lg" id="bookingTicket" oninput="calc();" required>
                                            <option value="" disabled selected>TICKETS</option>
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
                                    </div>
                                    <div class="media-form mt-4">
                                        @if (auth()->check())
                                        <input type="text" name="bookingName" required value="{{auth()->user()->name}}" placeholder="Full Name">
                                        <input type="email" name="bookingEmail" required value="{{auth()->user()->email}}" placeholder="Email Address">
                                        <input type="text" name="bookingPNumber" required placeholder="Phone Number">
                                        @else
                                        <input type="text" name="bookingName" required placeholder="Full Name">
                                        <input type="email" name="bookingEmail" class="form-control" required placeholder="Email Address">
                                        <input type="text" name="bookingPNumber" required placeholder="Phone Number">
                                        @endif
                                    </div>

                                    <div class="mt-3">
                                        <h3 class="text-center align-center pl-2">Total: $<span id="bookingTotal">0</span></h3>
                                    </div>
                                    <button class="btn read-button col-12 mt-3" type="submit" formaction="{{route('booking.store')}}">Book Now!</button>
                                    <hr class="mb-2 mt-4">
                                    <p class="text-center">or Buy with PayPal</p>
                                    <button class="btn read-button col-12 mt-2" type="submit" formaction="{{secure_url('/payment')}}">Buy Now!</button>
                                </form>


                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-warning" role="alert">
                        <p>Booking is not available for Upcoming Movies!<a href="/"> Back to Home</a></p>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('layouts.includes.footer')
</body>

</html>
