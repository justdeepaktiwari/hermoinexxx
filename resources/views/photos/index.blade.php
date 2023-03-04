@extends('photos.app-photo')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')
    @include('products.partials.header')

    <!-- Gallery -->
    <div class="container-fluid overflow-hidden py-2" style="min-height: 100vh; background-color: #000;">
        <h5 class="text-start p-2 border-bottom border-danger mb-3 text-white">Photo Gallery</h5>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>



            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>

                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light  rounded overflow-hidden"
                    data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <a href="{{ route('list.product.detail', 3) }}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                        </div>
                    </a>
                </div>



            </div>
        </div>
        <!-- Gallery -->

    </div>
    @include('products.partials.footer')
@endsection
