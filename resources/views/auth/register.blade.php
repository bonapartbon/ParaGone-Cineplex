@extends('layouts.app')

@section('content')
<section class="w3l-loginhny py-5" style="margin-top: 100px;">

    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info">
                <h2>Register</h2>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger pb-0">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <form method="POST" action="{{ secure_route('register') }}">
                    @csrf
                    <label>Name</label>
                    <div class="input-group">
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    <label>Email</label>
                    <div class="input-group">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <label>Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                    <label>Confirm Password</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button class="btn read-button btn-login" type="submit">Register</button>
                </form>
                <p class="account1">Already have an account? <a href="{{ secure_route('login') }}">Login Now</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
