@extends('layouts.app')

@section('content')
<section class="w3l-loginhny py-5" style="margin-top: 100px;">

    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info">
                <h2>Reset Password</h2>
                <form method="POST" action="{{ secure_route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <label>Email</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label>Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label>Confirm Password</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button class="btn read-button btn-login" type="submit">Reset Password'</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection