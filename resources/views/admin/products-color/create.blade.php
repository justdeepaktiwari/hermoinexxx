@extends('admin.index')

@section('title', 'Create Product')

@section('action-btn')
<div class="pull-right">
    <a class="btn btn-outline-primary rounded-0" href="{{ route('product-color.index') }}"> Back</a>
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


    <form action="{{ route('product-color.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <div class="col-md-10">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
                    <div class="form-group">
                        <strong>Color Name</strong>
                        <input type="text" name="color_name" class="form-control" placeholder="Name">
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