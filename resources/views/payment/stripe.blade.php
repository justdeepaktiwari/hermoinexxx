@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
<style>
    .disable-after{
        position: relative;
    }
    .disable-after::after{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(235,235,228, 0.2);
    }
    .z-index-9{
        z-index: 9;
    }
    select option {
    margin: 40px;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }
</style>
@endsection

@section('content')
<div class="container-fluid showcase d-flex align-items-center justify-content-center h-100vh">
    <!-- @if (Session::has('success'))
    <div class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif  -->
    <div class="col-md-5 col-11 border-dark login-section text-white">
        <div style="height: 20px;"></div>
        <div class="col-md-10 mx-auto">
            <form role="form" action="{{ route('stripe.post') }}" method="post" id="payment-form">
                @csrf
                <div class='form-row row mb-2'>
                    <div class="mb-3">
                        <label for="Membership" class="form-label">Membership</label>
                        @php
                            $amount = "";
                        @endphp
                        <select name="subscription_id" class="form-select bg-transparent text-white rounded-0 border-danger" id="Membership" required>
                            @forelse($purchase_offer as $offer)
                                @php
                                    if(!$amount){
                                        $amount = $offer->discounted_amount;
                                    }
                                @endphp
                            <option value="{{ $offer->subscription_id }}" data-amount="{{$offer->discounted_amount}}">{{ $offer->name." - ".$offer->percentage_off."% OFF - ".$offer->discounted_amount."$ for ".$offer->duration." Days" }}</option>
                            @empty
                            <option value="">No Offer Available</option>
                            @endforelse
                        </select>
                    </div>
                    <div class='col-xs-12 form-group col-md-8'>
                        <label class='control-label'>Name on Card</label>
                        <input class='form-control border-danger rounded-0 text-white bg-transparent' size='4' type='text' name="card_name">
                    </div>
                    <div class='col-xs-12 form-group col-md-4'>
                        <label class='control-label'>Amount</label>
                        <div class="input-group disable-after">
                            <span class="input-group-text border-danger bg-danger rounded-0 z-index-9 text-white fw-bold" id="basic-addon2">$</span>
                            <input type="text" class="form-control border-danger rounded-0 text-white bg-transparent" name="amount" value="{{ $amount }}" disabled>
                        </div>
                    </div>
                </div>

                <div class='form-row row  mb-2'>
                    <div class='col-xs-12 form-group'>
                        <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control border-danger rounded-0 text-white bg-transparent card-number' size='20' type='text' name="number">
                    </div>
                </div>

                <div class='form-row row  mb-2'>
                    <div class='col-xs-12 col-md-4 form-group'>
                        <label class='control-label'>CVC</label>
                        <input autocomplete='off' class='form-control border-danger rounded-0 text-white bg-transparent' placeholder='ex. 311' size='4' type='text' name="cvc">
                    </div>
                    <div class='col-xs-12 col-md-4 form-group'>
                        <label class='control-label'>Expiration Month</label>
                        <input class='form-control border-danger rounded-0 text-white bg-transparent card-expiry-month' placeholder='MM' size='2' type='text' name="exp_month">
                    </div>
                    <div class='col-xs-12 col-md-4 form-group'>
                        <label class='control-label'>Expiration Year</label>
                        <input class='form-control border-danger rounded-0 text-white bg-transparent card-expiry-year' placeholder='YYYY' size='4' type='text' name="exp_year">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 clickToProceed"
                    data-checkoutUrl = "{{route('stripe.post')}}" 
                    data-afterPaymentredirectUrl = "{{route('user-videos')}}" 
                    data-formId="checkoutFrom"                    >
                        <button class="btn btn-danger btn-block rounded-0" type="submit">Click To Proceed</button>
                    </div>
                </div>
            </form>
        </div>
        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    // $(".pay-kar").click(function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "{{ route('stripe.post') }}",
    //         data: {
    //             "_token": "{{ csrf_token() }}",
    //             "number": 4242424242424242,
    //             "exp_month": 2,
    //             "exp_year": 2024,
    //             "cvc": 314,
    //             "amount": "2000",
    //             "description": "Testing profile",
    //         },
    //         dataType: "HTML",
    //         success: function(response) {

    //         }
    //     });
    // });

    $("body").on("click", ".clickToProceed", function (e) {
    e.preventDefault();
    console.log("Click");
    let form = $(this).parents('form')[0];
    let formData = new FormData(form);
    let afterPaymentredirectUrl = $(this).attr("data-afterPaymentredirectUrl");
    console.log(afterPaymentredirectUrl);
    $(".payment-error").remove();
    $.ajax({
        type: "POST",
        url: $(this).attr("data-checkoutUrl"),
        data: formData,
        dataType: "JSON",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            tata.success("Success!", "Payment completed successfullly!");
            window.location.href = afterPaymentredirectUrl;
        },
        error: function (err, xhr) {
            console.log(err);
            if (err.responseJSON.message === undefined) {
                tata.error("Error!", err.responseJSON);
            } else {
                tata.error("Error!", err.responseJSON.message);
            }

            var errors = err.responseJSON.errors;

            $.each(errors, function (indexInArray, valueOfElement) {
                console.log(indexInArray);
                $("[name='" + indexInArray + "']").after(
                    `<div class="small text-danger payment-error">${valueOfElement[0]}</div>`
                );
            });
        },
    });
});

    $('[name="subscription_id"]').change(function (e) { 
        e.preventDefault();
        $('[name="amount"]').val($(this).find("option:selected").data("amount"));
    });
</script>
@endsection