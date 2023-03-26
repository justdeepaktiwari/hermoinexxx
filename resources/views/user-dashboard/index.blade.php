@extends('products.app-product')

@section('title', 'Hermoinexxx - Product')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
<style>
    .hide {
        display: none !important;
      }
</style>
@endsection

@section('content')
@include('products.partials.header')

<section style="background-color: #000; min-height: 100vh">
    <div class="d-flex gap-1 w-75 mx-auto">
      <div class="py-5">
        <img
          src="./profile.png"
          class="rounded rounded-circle"
          width="150px"
        />
      </div>
      <div class="d-flex flex-column justify-content-center text-white">
        <p class="m-0 fs-3">{{auth()->user()->name}}</p>
        <p class="m-0 fs-3">{{auth()->user()->email}}</p>
      </div>
    </div>
    <div>
      <div class="d-flex w-75 gap-3 mx-auto mb-3">
        <button
          class="address-btn btn btn-secondary w-50 bg-dark text-white fw-bolder fs-5"
        >
          Orders
        </button>
        <button
          class="order-btn btn btn-secondary w-50 bg-dark text-white fw-bolder fs-5"
        >
          Address
        </button>
      </div>
      <main class="w-75 mx-auto">
        <div class="orders">
            @foreach ($orders as $order)
                <div class="d-flex my-2 py-3 px-2 rounded rounded-end gap-2 w-75 mx-auto justify-content-between align-items-center bg-dark"
                >
                    <div>
                        <img src="{{asset($order->product_image)}}" width="75px" />
                    </div>
                    <div>
                        <p class="m-0 text-white fs-4">{{$order->product_name}}</p>
                        <div class="d-flex gap-3 text-secondary">
                        <p class="m-0 text-secondary">Size : {{$order->product_sizes}}</p>
                        <p class="m-0 text-secondary">Color : {{$order->product_colors}}</p>
                        <p class="m-0 text-secondary">Quantity : {{$order->quantity}}</p>
                        </div>
                    </div>
                    <div class="px-5">
                        
                        <span class="badge rounded-pill 
                        @if ($order->status=='Confirmed')
                            bg-warning                           
                        @else
                            bg-success      
                        @endif
                        ">{{$order->status}}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="address hide">
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
                <div
                class=" d-flex my-2 py-2 px-2 rounded rounded-end gap-2 w-75 mx-auto justify-content-between align-items-center bg-dark "
              >
                <p class="m-0 text-white fs-6">
                 {{$first_address}} <br />
                  {{$second_address}}
                </p>
              </div>
            @endforeach
        </div>
      </main>
    </div>
  </section>

@include('products.partials.footer')
@endsection

@section("js")
<script>
let address = document.querySelector(".address");
let orders = document.querySelector(".orders");
let addressBtn = document.querySelector(".address-btn");
let orderBtn = document.querySelector(".order-btn");

addressBtn.addEventListener("click", () => {
  address.classList.add("hide");
  orders.classList.remove("hide");
});
orderBtn.addEventListener("click", () => {
  orders.classList.add("hide");
  address.classList.remove("hide");
});
</script>
@endsection