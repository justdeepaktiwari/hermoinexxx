@extends('photos.app-photo')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')
    @include('photos.partials.header')

    <!-- Gallery -->
    <div class="container-fluid overflow-hidden py-2" style="min-height: 100vh; background-color: #000;">
        <h5 class="text-start p-2 border-bottom border-danger mb-3 text-white">Photo Gallery</h5>
        <div class="row">
            
            @foreach($photos as $photo)
                <div class="col-md-4 overflow-hidden">
                    <div class="bg-image border hover-zoom ripple ripple-surface ripple-surface-light  rounded w-100 h-100"
                        data-mdb-ripple-color="light">
                        <img src="{{ $photo->photo_url }}"
                            class="w-100 shadow-1-strong rounded mb-4" alt="{{ $photo->photo_title }}" />
                        <a href="#">
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Gallery -->
    </div>
    @include('products.partials.footer')
@endsection
