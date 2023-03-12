@extends('layouts.app')

@section("css")
<link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
@endsection

@section('content')
<div class="container-fluid h-100vh showcase">
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="{{ asset('assets/images/logo.webp') }}">

        <div class="right-side-button pe-2">
            <button class="btn btn-outline-light rounded-0">Instant Access</button>

            <a class="btn btn-danger rounded-0" href="{{ route('register') }}">Sign Up</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center ">
        <div class="col-md-5 col-12 shadow-sm border-dark text-white overflow-hidden login-section">
            <div style="height: 20px;"></div>
            <div class="fs-3 fw-700 mb-2 text-center">Sign In</div>
            <div class="col-md-10 col-11 mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control  rounded-0 text-white border-danger bg-transparent @error('email') is-invalid @enderror" name="email" required autocomplete="off" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="col-form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control  rounded-0 text-white border-danger bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input m-0 bg-transparent border-danger rounded-0 p-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="mb-0  text-center">
                        <button type="submit" class="btn btn-danger w-100 rounded-0">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link text-white mt-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 20px;"></div>
        </div>
    </div>
</div>
@endsection