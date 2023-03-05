@extends('admin.index')

@section('title', 'Create Product')

@section('action-btn')
<div class="pull-right">
    <a class="btn btn-outline-primary rounded-0" href="{{ route('products.index') }}"> Back</a>
</div>
@endsection

@section('content') 

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <div class="col-md-10">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Product Name</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Product Detail</strong>
                        <textarea class="form-control" name="product_detail" placeholder="Detail" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Available Size</strong>
                        <textarea class="form-control" name="product_sizes" placeholder="S, M, L, XL, XXL" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Available Color</strong>
                        <textarea class="form-control" name="product_colors" placeholder="Black, Blue, Red" rows="1"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Upload min 3 Images</strong>
                        <input type="file" class="form-control" accept="image/*" name="product_image[]" multiple>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Product Real Amount</strong>
                        
                        <div class="input-group">
                            <input type="number" class="form-control" name="product_real_amount">
                            <span class="input-group-text" id="basic-addon2">$</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Percentage Discount</strong>
                        
                        <div class="input-group">
                            <input type="number" class="form-control" name="product_percentage_discount">
                            <span class="input-group-text" id="basic-addon2">%</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Product Discounted Amount</strong>
                        
                        <div class="input-group">
                            <input type="number" class="form-control" name="product_discounted_amount">
                            <span class="input-group-text" id="basic-addon2">$</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 text-start">
                        <strong class="invisible">Product Discounted Amount</strong>
                        <button type="submit" class="btn btn-primary rounded-0 w-100">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection