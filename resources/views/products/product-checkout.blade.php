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

    .hide{
        display: none !important;
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
                                <div class="card bg-dark text-white rounded-3 add-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <!-- <h5 class="mb-0">Card details</h5> -->
                                            <img src="http://162.215.128.180/assets/images/logo.webp" class="img-fluid rounded-3" style="width: 145px;" alt="Avatar">
                                        </div>
                                        @if ($addresses->count())
                                        <h6>Select your address</h6>
                                        @foreach ($addresses as $address)
                                            @php
                                                $first_address = $address->name.', '.$address->phone;
                                                $second_address = '';
                                                if($address->line1!=''){
                                                    $second_address = $address->line1;
                                                }
                                                if($address->line2!=''){
                                                    if($second_address==''){
                                                        $second_address = $address->line2;
                                                    }else{
                                                        $second_address =$second_address.', '. $address->line2; 
                                                    }
                                                }
                                                if($second_address!='') $second_address =$second_address.', ';
                                                $second_address = $address->city.', '.$address->state.', '.$address->country.', '.$address->postal_code;
                                            @endphp
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="radio{{$address->id}}" name="addressid" value="{{$address->id}}" checked>
                                                <label class="form-check-label" for="radio{{$address->id}}">{{$first_address}}</label></br>
                                                <p class="form-check-label" for="radio{{$address->id}}">{{$second_address}}</p>
                                            </div>
                                        @endforeach
                                        
                                        <button type="button" class="btn btn-danger shadow-0 btn-block btn-lg proceedToCheckOut"
                                        data-proceedToCheckOutUrl = "{{route('product-checkout-form')}}"
                                        >
                                            <div class="d-flex justify-content-between">
                                                <span>Proceed with this address <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>
                                        <hr class="my-4">
                                        @endif
                                        <p class="small fw-bold mb-2">Add your address</p>
                                        {!! Form::open(array('route' => 'add-address','method'=>'POST', 'enctype' => "multipart/form-data",'class'=>'mt-4')) !!}
                                            <div class="row">
                                                <div class="col-md-6  mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-lg','id'=>'name')) !!}
                                                        {{-- <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" /> --}}
                                                        <label class="form-label" for="name">Name</label>
                                                    </div>
                                                    @error('name')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6  mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('email', null, array('placeholder' => 'Email Id','class' => 'form-control form-control-lg','id'=>'email_id')) !!}
                                                        {{-- <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" /> --}}
                                                        <label class="form-label" for="email_id">Email Id</label>
                                                    </div>
                                                    @error('email')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12  mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('mobile', null, array('placeholder' => 'Phone Number','class' => 'form-control form-control-lg','id'=>'phone')) !!}
                                                        <label class="form-label" for="phone">Phone Number</label>
                                                    </div>
                                                    @error('mobile')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12  mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('line1', null, array('placeholder' => 'line1 Address','class' => 'form-control form-control-lg','id'=>'line1')) !!}
                                                        <label class="form-label" for="line1">line1 Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('line2', null, array('placeholder' => 'line2 Address','class' => 'form-control form-control-lg','id'=>'line2')) !!}
                                                        <label class="form-label" for="line2">line2 Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control form-control-lg','id'=>'city')) !!}
                                                        <label class="form-label" for="city">City</label>
                                                    </div>
                                                    @error('city')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('state', null, array('placeholder' => 'State','class' => 'form-control form-control-lg','id'=>'state')) !!}
                                                        <label class="form-label" for="state">State</label>
                                                    </div>
                                                    @error('state')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('country', null, array('placeholder' => 'Country','class' => 'form-control form-control-lg','id'=>'country')) !!}
                                                        <label class="form-label" for="country">Country</label>
                                                    </div>
                                                    @error('country')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline form-white">
                                                        {!! Form::text('postal_code', null, array('placeholder' => 'Postal Code','class' => 'form-control form-control-lg','id'=>'postal_code')) !!}
                                                        <label class="form-label" for="postal_code">Postal Code</label>
                                                        @error('postal_code')
                                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-light ">ADD THIS ADDRESS</button>
                                                </div>
                                            </div>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                <div class="card bg-dark text-white rounded-3 payment-card hide productCheckOutCard" >
                                    
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