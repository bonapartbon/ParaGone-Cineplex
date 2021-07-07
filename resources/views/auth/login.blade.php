@extends('layouts.app')

@section('content')

<section class="w3l-loginhny py-5" style="margin-top: 100px;">
    
    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info">
                <h2>Login to your Account</h2>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger pb-0">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>Email</label>
                    <div class="input-group">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <label>Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    <div class="login-check">
                        <input class="" type="checkbox" >

                        
                        <a class="forgot" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <button class="btn read-button btn-login" type="submit">Login</button>
                </form>
                <p class="account1">Dont have an account yet? <a href="{{ route('register') }}">Get it now</a></p>
            </div>
        </div>
    </div>
</section>

@endsection