@extends('layouts.app')

@section('content')
<section class="w3l-loginhny py-5" style="margin-top: 100px;">

    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info">
                <h2>Reset Password</h2>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ secure_route('password.email') }}">
                    @csrf
                    <label>E-Mail Address</label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <button class="btn read-button btn-login" type="submit">Send Password Reset Link</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection