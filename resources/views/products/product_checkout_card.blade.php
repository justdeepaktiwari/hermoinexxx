<div class="card-body">
    <div class="d-flex justify-content-center align-items-center mb-2">
        <!-- <h5 class="mb-0">Card details</h5> -->
        <img src="http://162.215.128.180/assets/images/logo.webp" class="img-fluid rounded-3" style="width: 145px;" alt="Avatar">
    </div>

    <p class="small mb-2">Card type</p>
    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
    
    <form class="mt-4" id="checkoutFrom">
        @csrf
        <div class="form-outline form-white mb-4">
            <input type="hidden" name="addressid" value="{{$addressid}}">
            <input type="text" name="card_name" id="typeName" class="form-control form-control-lg card_name"  placeholder="Cardholder's Name" />
            <label class="form-label" for="typeName">Cardholder's Name</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="text" name="number" id="cardNumber" class="form-control form-control-lg card-number"  placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
            <label class="form-label" for="cardNumber">Card Number</label>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-outline form-white">
                    <input type="text" name="exp_month" id="typeExpMonth" class="form-control form-control-lg card-expiry-month" placeholder="MM" size="2"  minlength="2" maxlength="2" />
                    <label class="form-label" for="typeExpMonth">Expiration Month</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-outline form-white">
                    <input type="text" name="exp_year" id="typeExpYear" class="form-control form-control-lg card-expiry-year" placeholder="YYYY" size="4"  minlength="4" maxlength="4" />
                    <label class="form-label" for="typeExpYear">Expiration Year</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-outline form-white">
                    <input type="password" name="cvc" id="typeCvv" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                    <label class="form-label" for="typeCvv">Cvv</label>
                </div>
            </div>
        </div>

    </form>

    <hr class="my-4">

    <div class="d-flex justify-content-between">
        <p class="mb-2">Subtotal</p>
        <p class="mb-2">{{priceFormate(total_price_of_cart())}}</p>
    </div>

    <div class="d-flex justify-content-between">
        <p class="mb-2">Shipping</p>
        <p class="mb-2">{{priceFormate(50)}}</p>
    </div>

    <div class="d-flex justify-content-between mb-4">
        <p class="mb-2">Total(Incl. taxes)</p>
        <p class="mb-2">{{priceFormate(total_price_of_cart()+50)}}</p>
    </div>

    <button type="button" class="btn btn-danger shadow-0 btn-block btn-lg checkout"
     data-checkoutUrl = "{{route('product-checkout')}}" 
     data-afterPaymentredirectUrl = "{{route('list.product')}}" 
     data-formId="checkoutFrom">
        <div class="d-flex justify-content-between">
            <span>{{priceFormate(total_price_of_cart()+50)}}</span>
            <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
        </div>
    </button>

</div>