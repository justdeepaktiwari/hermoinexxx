@extends('admin.index')

@section('title', 'Edit Purchase Offer')

@section('action-btn')
  <div class="pull-right">
    <a class="btn btn-outline-primary btn-sm rounded-0" href="{{ route('purchase.index') }}"> Back</a>
  </div>
@endsection

@section('content')
    <div class="container">
        <div class="col-md-10">
        <form action="{{ route('purchase.update', $purchaseOffer->id) }}" method="POST">
    	@csrf
        @method('PUT')

         <div class="row">
		    <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
		        <div class="form-group">
		            <strong>Plan Type:</strong>
		            <input type="text" name="name" value="{{ $purchaseOffer->name }}" class="form-control" disabled>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
		        <div class="form-group">
		            <strong>Real Amount:</strong>
		            <div class="input-group">
                        <input type="number" name="real_amount" value="{{ $purchaseOffer->real_amount }}" class="form-control">
                        <span class="input-group-text" id="basic-addon2">$</span>
                    </div>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
		        <div class="form-group">
		            <strong>Percentage Off:</strong>
		            <div class="input-group">
                        <input type="number" name="percentage_off" value="{{ $purchaseOffer->percentage_off }}" class="form-control">
                        <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
		        <div class="form-group">
		            <strong>Discounted Amount:</strong>
		            <div class="input-group">
                        <input type="number" name="discounted_amount" value="{{ $purchaseOffer->discounted_amount }}" class="form-control">
                        <span class="input-group-text" id="basic-addon2">$</span>
                    </div>
		        </div>
		    </div>


		    <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
		        <div class="form-group">
		            <strong>Duration (In Days):</strong>
                    <div class="input-group">
                        <input type="number" name="duration" value="{{ $purchaseOffer->discounted_amount }}" class="form-control">
                        <span class="input-group-text" id="basic-addon2">Days</span>
                    </div>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-6 col-md-6 mb-2 text-center">
                <strong class="invisible" >Duration (In Days):</strong>
		      <button type="submit" class="btn btn-primary w-100 rounded-0">Submit</button>
		    </div>
		</div>

    </form>
        </div>
    </div>
@endsection