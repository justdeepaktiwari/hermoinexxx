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
                    More</a></h4>

            <div class="row">
                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-success ms-2">Eco</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-success ms-2">Eco</span>
                                            <span class="badge bg-danger ms-2">-10%</span>
                                        </h5>

                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center container py-3">
            <h4 class="mt-2 mb-3 py-2 text-white text-start border-bottom border-danger d-flex justify-content-between">
                <strong>Most Purchased Products</strong> <a href=""
                    class="btn btn-outline-danger btn-sm rounded-0">See More</a></h4>

            <div class="row">
                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-success ms-2">Eco</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-success ms-2">Eco</span>
                                            <span class="badge bg-danger ms-2">-10%</span>
                                        </h5>

                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center container py-3">
            <h4 class="mt-2 mb-3 py-2 text-white text-start border-bottom border-danger d-flex justify-content-between">
                <strong>Recomded Products</strong><a href="" class="btn btn-outline-danger btn-sm rounded-0">See
                    More</a></h4>

            <div class="row">
                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-success ms-2">Eco</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5>
                                            <span class="badge bg-success ms-2">Eco</span>
                                            <span class="badge bg-danger ms-2">-10%</span>
                                        </h5>

                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-2">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                            <a href="{{ route('list.product.detail', 3) }}">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>Category</p>
                            </a>
                            <h6 class="mb-3">$61.99</h6>
                            <a href="{{ route('list.product.detail', 3) }}" class="btn btn-danger rounded-0 shadow-0">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('products.partials.footer')
@endsection
