@extends('admin.index')

@section('title', 'Create Ads')

@section('action-btn')
<div class="pull-right">
    <a class="btn btn-outline-primary" href="{{ route('ads.index') }}"> Back</a>
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


<form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <div class="col-md-10 d-inline-block">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Upload Gif</strong>
                        <input class="form-control" type="file" name="ads_gif" id="file-input" accept="image/*">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Url To Redirect</strong>
                        <input class="form-control" type="url" name="ads_redirect_url">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Ad On Page</strong>
                        <select name="ads_for" class="form-select">
                            <option>Select Page</option>
                            <option value="video-list">Video List</option>
                            <option value="video-detail">Video Detail</option>
                            <option value="register">Register</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-start">
                    <strong class="invisible">Ad On Page</strong>
                    <button type="submit" class="btn btn-primary rounded-0 w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection