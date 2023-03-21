@extends('products.app-product')

@section('title', 'Hermoinexxx - Product List')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')
@include('products.partials.header')

<section style="background-color: #000;">
    <div class="text-center container py-3">
        <div class="row">
            @forelse ($products as $item)
                @php
                    $random_img = json_decode($item->product_image);
                    $random_number = floor(rand(0, (count($random_img)-1)));
                @endphp
                <div class="col-sm-3">
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
                            <p class="text-start mb-0  small fw-400"><span class="text-danger">Color: </span> Blue</p>
                            <p  class="text-start small mb-0"><span class="text-danger">Sizes: </span> S, M, L</p>
                            <p class="mb-1 text-start"><span class="text-info">Amt: </span> <s class="text-danger">{{ priceFormate($item->product_real_amount) }}</s><strong class="ms-2 text-success">{{ priceFormate($item->product_discounted_amount) }}</strong></p>
                            <a href="" class="text-start text-white small">
                                <p class="mb-2"><span class="text-danger">Detail: </span>{{ substr($item->product_detail, 0, 80) }}..</p>
                            </a>
                            <div class="btn-section d-flex gap-2">
                                <a 
                                data-addCartType = "product" 
                                data-addCartUrl = "{{ route('add-to-cart') }}" 
                                data-itemId="{{$item->id}}"
                                class="btn btn-danger rounded-0 shadow-0 addToCart">Add Cart</a>
                                <a href="{{ route('list.product.detail', $item->id) }}" class="btn btn-success rounded-0 shadow-0">View Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <p style="color: #fff;">Not product found</p>
                </div>
            @endforelse
        </div>
        {!! $products->links() !!}
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
<script src = "{{ asset("js/add-cart.js") }}"></script>
@endsection