  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
    <div class="justify-content-start">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"></button>
      <a class="navbar-brand text-brand" href="/"><img src="{{asset('img/paragone-logo.png')}}" width="15%"> </a>
      </div>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('upcoming')}}">Upcoming</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('showtimes')}}">Showtimes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{url('contact')}}">Contact</a>
          </li>
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else

          <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
            <div class="dropdown-menu">
            @if (auth()->user()->is_admin == 1)
            <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Admin Dashboard</a>
            @endif
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            </div>
          </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
          </li>
          @endguest

        </ul>
      </div>



    </div>
  </nav>
  <!-- End Header/Navbar -->
