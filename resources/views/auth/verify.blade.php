@extends('layouts.app')

@section('content')
<section class="w3l-loginhny py-5" style="margin-top: 100px;">

    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info" style="max-width: 1000px;">
                <h2>Verify Your Email Address</h2>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ secure_route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection