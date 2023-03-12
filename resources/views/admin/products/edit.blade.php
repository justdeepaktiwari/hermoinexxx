@extends('admin.index')

@section('title', 'Edit Product')

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


<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Name" value="{{ $product->product_name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Detail</strong>
                <textarea class="form-control" name="product_detail" placeholder="Detail" rows="1">{{ $product->product_detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Available Size</strong>
                <textarea class="form-control" name="product_sizes" placeholder="S, M, L, XL, XXL" rows="1">{{ $product->product_sizes }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Available Color</strong>
                <textarea class="form-control" name="product_colors" placeholder="Black, Blue, Red" rows="1">{{ $product->product_colors }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Upload min 3 Images</strong>
                <input type="file" class="form-control" accept="image/*" name="product_image[]" multiple>
            </div>

            <div class="my-2">
                @php
                    $list_img = json_decode($product->product_image);
                @endphp

                @foreach($list_img as $list_img_value)
                    <a href="{{ asset('uploads/products/'.$list_img_value) }}" target="_blank" class="d-block">{{ $list_img_value }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Real Amount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_real_amount" value="{{ $product->product_real_amount }}">
                    <span class="input-group-text" id="basic-addon2">$</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Percentage Discount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_percentage_discount" value="{{ $product->product_percentage_discount }}">
                    <span class="input-group-text" id="basic-addon2">%</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Discounted Amount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_discounted_amount" value="{{ $product->product_discounted_amount }}">
                    <span class="input-group-text" id="basic-addon2">$</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 text-start">
            <strong class="invisible">Product Discounted Amount</strong>
            <button type="submit" class="btn btn-primary rounded-0 w-100">Submit</button>
        </div>
    </div>
</form>
@endsection