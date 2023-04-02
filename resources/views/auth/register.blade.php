@extends('layouts.app')

@section("css")
<link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
@endsection

@section('content')

<div class="container-fluid h-100vh showcase" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.55)), url(/assets/images/feature_img.webp) no-repeat center center/cover;">
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="{{ asset('assets/images/logo.webp') }}">

        <div class="right-side-button pe-2">
            <a class="btn btn-outline-danger rounded-0" href="{{ route('login') }}">Sign In</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center">
    <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="fs-1 text-danger fw-bold">Hermoine<span class="text-uppercase fw-bold text-white shadow p-1 rounded-2 bg-d315c8">XXX</span></div>
            <div style="height: 30px;"></div>
            <h2 class="text-white fw-800">There's a lot more to HermoineXXX than you think!</h2>
            <div style="height: 30px;"></div>
            <div style="height: 30px;"></div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 col-12 shadow-sm border-dark text-white overflow-hidden login-section">
            <div style="height: 20px;"></div>
            <div class="fs-3 fw-700 mb-2 text-center">Sign Up For Free</div>
            <div class="col-md-10 col-11 mx-auto">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name</label>
                        <input id="name" type="text" class="form-control  rounded-0 text-white border-danger bg-transparent @error('name') is-invalid @enderror" name="name" required autocomplete="off" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control  rounded-0 text-white border-danger bg-transparent @error('email') is-invalid @enderror" name="email"  value="{{ $email ?? '' }}" required autocomplete="off" autofocus>

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
                        <label for="password" class="col-form-label">Confirm Password</label>
                        <input id="password" type="password" class="form-control  rounded-0 text-white border-danger bg-transparent" name="password_confirmation" required autocomplete="off">
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input m-0 bg-transparent border-danger rounded-0 p-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} required>

                            <label class="form-check-label" for="remember">
                                By sign up you agree to the <strong>Term & Conditions</strong>
                            </label>
                        </div>
                    </div>

                    <div class="mb-0  text-center">
                        <button type="submit" class="btn btn-danger w-100 rounded-0">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 20px;"></div>
        </div>
        @php
            $ads_video_register = \DB::table("ads_sections")->where("ads_for", "register")->first();
        @endphp
        <div class="col-md-3 col-12 p-4 bg-dark my-auto mx-auto" role="button" onclick="window.location.href = `{{ $ads_video_register->ads_redirect_url }}`">
            <div class="p-3 overflow-hidden" style="max-width: 400px;">
                <img src="{{ asset('uploads/ads/'.$ads_video_register->ads_gif) }}" class="img-fluid w-100 h-100" alt="{{ $ads_video_register->ads_gif }}">
            </div>
        </div>
    </div>
</div>
@endsection