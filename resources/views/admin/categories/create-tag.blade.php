@extends('admin.index')

@section('title', 'Create Tag')

@section('action-btn')
<div class="pull-right">
    <a class="btn btn-outline-primary rounded-0" href="{{ route('category-tag.index') }}"> Back</a>
</div>
@endsection

@section('content')


    <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <div class="col-md-6">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 mb-2">
                    <div class="form-group">
                        <strong class="mb-2">Tag Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Tag Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-start">
                        <strong class="invisible mb-2">Tag Name</strong>
                        <button type="submit" class="btn btn-primary rounded-0 w-100">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection