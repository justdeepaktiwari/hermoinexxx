@extends('products.app-product')

@section('title', 'Hermoinexxx - Product')
@section('css')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .h-100vh{
        min-height: 100vh !important;
    }

    section {
        padding: 60px 0;
    }
</style>
@endsection

@section('content')
<section style="background-color: #000; min-height: 100vh;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="card bg-black">
                    <div class="card-body px-4 text-white">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5>
                                    <a href="{{ route('list.product') }}" class="text-white">
                                        <i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping
                                    </a>
                                </h5>
                                <section style="background-color: #000;">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-12">

                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h3 class="fw-normal mb-0 text-white">Shopping Cart (<span class="totalCartCount">{{$total_count}}</span>)</h3>
                                                </div>
                                                @foreach ($product_cart as $product)
                                                    @php
                                                        $product_key_randon = 'product'.$product['id'];
                                                    @endphp
                                                    <div class="card rounded-3 mb-4 bg-dark itemcontainer">
                                                        <div class="card-body px-4 py-2">
                                                            <div class="row">
                                                                <p class="lead fw-normal mb-2">{{$product['name']}}</p>
                                                            </div>
                                                            <div class="row d-flex justify-content-between align-items-center">
                                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                                    <img src="{{ asset($product['img']) }}" class="img-fluid rounded-3" alt="{{$product['name']}}">
                                                                </div>
                                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                                   
                                                                    <p class="text-white"><span class="text-white">Size: </span>{{$product['size']}}<br><span class="text-white">Color: </span>{{$product['color']}}</p>
                                                                </div>
                                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                                    <button class="btn btn-link text-success bg-dark px-2 updateCartQuantity" data-updateCartClass="{{"updateCart".$product_key_randon}}" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>

                                                                    <input  min="1" name="quantity" value="{{$product['quantity']}}" 
                                                                    type="number" class="form-control form-control-sm bg-transparent text-white updateCart {{"updateCart".$product_key_randon}} {{$product_key_randon.'quantity'}}" style="width: 40px;"
                                                                    data-addCartType = "product" 
                                                                    data-addCartUrl = "{{ route('add-to-cart') }}" 
                                                                    data-itemId="{{$product['id']}}"
                                                                    data-productKey = "{{$product_key_randon}}"
                                                                    />

                                                                    <button class="btn btn-link text-success bg-dark px-2 updateCartQuantity"  data-updateCartClass="{{"updateCart".$product_key_randon}}" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                                    <h5 class="mb-0 fs-6 {{$product_key_randon.'totalPrice'}}">{{priceFormate($product['total_price'])}}</h5>
                                                                </div>
                                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                                    <input type="hidden" name="{{$product_key_randon.'size'}}" class="{{$product_key_randon.'size'}}" value="{{$product['size']}}">
                                                                    <input type="hidden" name="{{$product_key_randon.'color'}}" class="{{$product_key_randon.'color'}}" value="{{$product['color']}}">
                                                                    <a style="cursor: pointer;"
                                                                    data-removeCartType = "product" 
                                                                    data-removeCartUrl = "{{ route('remove-to-cart') }}" 
                                                                    data-itemId="{{$product['id']}}"
                                                                    class="text-danger removeToCart"><i class="fas fa-trash fa-lg"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-dark text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <!-- <h5 class="mb-0">Card details</h5> -->
                                            <img src="{{ asset('assets/images/logo.webp') }}" class="img-fluid rounded-3" style="width: 145px;" alt="Avatar">
                                        </div>

                                        <p class="small mb-2">Card type</p>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                                                <label class="form-label" for="typeName">Cardholder's Name</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                <label class="form-label" for="typeText">Card Number</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                                        <label class="form-label" for="typeExp">Expiration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                                        <label class="form-label" for="typeText">Cvv</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">$4798.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping</p>
                                            <p class="mb-2">$20.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total(Incl. taxes)</p>
                                            <p class="mb-2">$4818.00</p>
                                        </div>

                                        <button type="button" class="btn btn-danger shadow-0 btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span>$4818.00</span>
                                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src = "{{ asset("js/add-cart.js") }}"></script>
@endsection