@extends('products.app-product')

@section('title', 'Hermoinexxx - Product')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')
@include('products.partials.header')

<section style="background-color: #000;">
    <div class="text-center container py-3">
        <h4 class="mt-2 mb-3 py-2 text-white text-start border-bottom border-danger d-flex justify-content-between">
            <strong>Latest Products</strong> <a href="" class="btn btn-outline-danger btn-sm rounded-0">See
                More</a>
        </h4>

        <div class="carousel-product owl-carousel">
            @forelse ($latest_product as $item)
                @php
                    $random_img = json_decode($item->product_image);
                    $random_number = floor(rand(0, (count($random_img)-1)));
                @endphp
                <div>
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{ asset('uploads/products/'.$random_img[$random_number]) }}" class="w-100" style="height: 170px;" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5 class="fs-6"><span class="rounded-0 badge bg-warning ms-2">5 &#9733;</span>
                                        @if($item->product_percentage_discount)
                                            <span class="rounded-0 badge bg-danger ms-2">-{{ $item->product_percentage_discount }}%</span>
                                        @endif
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-start text-white">
                                <h5 class="card-title fs-6">{{ $item->product_name }}</h5>
                            </a>
                            <p class="text-start mb-0  small fw-400"><span class="text-danger">Color:</span> Blue</p>
                            <p  class="text-start small mb-0"><span class="text-danger">Sizes Available:</span> S, M, L</p>
                            <h6 class="mb-1 text-start"><span class="text-info">Amount:</span> <s class="text-danger">${{ $item->product_real_amount }}</s><strong class="ms-2 text-success">${{ $item->product_discounted_amount ?? "10" }}</strong></h6>
                            <a href="" class="text-start text-white small">
                                <p class="mb-2"><span class="text-danger">Detail: </span>{{ substr($item->product_detail, 0, 80) }}..</p>
                            </a>
                            <div class="btn-section d-flex gap-2">
                                <a href="{{ auth()->check() ? route('list.product.detail', 3) : route('login') }}" class="btn btn-danger rounded-0 shadow-0">Add Cart</a>
                                <a href="{{ route('list.product.detail', 3) }}" class="btn btn-success rounded-0 shadow-0">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
    <div class="text-center container py-3">
        <h4 class="mt-2 mb-3 py-2 text-white text-start border-bottom border-danger d-flex justify-content-between">
            <strong>Most Purchased Products</strong> <a href="" class="btn btn-outline-danger btn-sm rounded-0">See More</a>
        </h4>

        <div class="carousel-product owl-carousel">
            @forelse ($latest_product as $item)
                @php
                    $random_img = json_decode($item->product_image);
                    $random_number = floor(rand(0, (count($random_img)-1)));
                @endphp
                <div>
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{ asset('uploads/products/'.$random_img[$random_number]) }}" class="w-100" style="height: 170px;" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5 class="fs-6"><span class="rounded-0 badge bg-warning ms-2">5 &#9733;</span>
                                        @if($item->product_percentage_discount)
                                            <span class="rounded-0 badge bg-danger ms-2">{{ $item->product_percentage_discount }}%</span>
                                        @endif
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-start text-white">
                                <h5 class="card-title">{{ $item->product_name }}</h5>
                            </a>
                            <a href="" class="text-start text-white small">
                                <p>{{ substr($item->product_detail, 0, 80) }}..</p>
                            </a>
                            <h6 class="mb-3 text-start">Amount: <s class="text-danger">${{ $item->product_real_amount }}</s><strong class="ms-2 text-success">${{ $item->product_discounted_amount ?? "10" }}</strong></h6>
                            <div class="btn-section d-flex gap-2">
                                <a href="{{ auth()->check() ? route('list.product.detail', 3) : route('login') }}" class="btn btn-danger rounded-0 shadow-0">Add Cart</a>
                                <a href="{{ route('list.product.detail', 3) }}" class="btn btn-success rounded-0 shadow-0">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>

    <div class="text-center container py-3">
        <h4 class="mt-2 mb-3 py-2 text-white text-start border-bottom border-danger d-flex justify-content-between">
            <strong>Recomded Products</strong><a href="" class="btn btn-outline-danger btn-sm rounded-0">See
                More</a>
        </h4>


        <div class="carousel-product owl-carousel">
            @forelse ($latest_product as $item)
                @php
                    $random_img = json_decode($item->product_image);
                    $random_number = floor(rand(0, (count($random_img)-1)));
                @endphp
                <div>
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="{{ asset('uploads/products/'.$random_img[$random_number]) }}" class="w-100" style="height: 170px;" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5 class="fs-6"><span class="rounded-0 badge bg-warning ms-2">5 &#9733;</span>
                                        @if($item->product_percentage_discount)
                                            <span class="rounded-0 badge bg-danger ms-2">{{ $item->product_percentage_discount }}%</span>
                                        @endif
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-start text-white">
                                <h5 class="card-title">{{ $item->product_name }}</h5>
                            </a>
                            <a href="" class="text-start text-white small">
                                <p>{{ substr($item->product_detail, 0, 80) }}..</p>
                            </a>
                            <h6 class="mb-3 text-start">Amount: <s class="text-danger">${{ $item->product_real_amount }}</s><strong class="ms-2 text-success">${{ $item->product_discounted_amount ?? "10" }}</strong></h6>
                            <div class="btn-section d-flex gap-2">
                                <a href="{{ auth()->check() ? route('list.product.detail', 3) : route('login') }}" class="btn btn-danger rounded-0 shadow-0">Add Cart</a>
                                <a href="{{ route('list.product.detail', 3) }}" class="btn btn-success rounded-0 shadow-0">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>
</section>

@include('products.partials.footer')
@endsection

@section("js")
<script>
    $('.carousel-product').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: false,
        responsiveClass: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            }
        }
    });
</script>
@endsection