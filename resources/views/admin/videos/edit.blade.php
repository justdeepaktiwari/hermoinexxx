@extends('admin.index')

@section('title', 'Edit Videos Description')

@section('action-btn')
<div class="pull-right">
    <a class="btn btn-outline-primary btn-sm rounded-0" href="{{ route('videos.index') }}"> Back</a>
</div>
@endsection

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PATCH")

    <div class="d-flex justify-content-between flex-wrap">
        <div class="col-md-7 d-inline-block">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Select Type</strong>
                        <select name="subscription_type_id" class="form-select">
                            @foreach($subscription as $key => $subscription_item)
                            <option value="{{ $subscription_item["id"] }}" {{ $subscription_item["id"] == $video->subscription_type_id ? "selected" : ""}}>{{ $subscription_item["name"] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Video Title</strong>
                        <input type="text" name="video_title" class="form-control" value="{{ $video->video_title }}" placeholder="video title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    @if(!$video->video_url)
                        <div class="form-group">
                            <strong>Upload Video</strong>
                            <div class='input-group'>
                                <input type='file' class="form-control rounded-0" id="fileInput">
                                <button class="btn btn-primary rounded-0" type="button" id="uploadBtn">Upload</button>
                            </div>

                            <div class="progress my-2"></div>

                            <div id="fileList" class="mt-2"></div>
                        </div>
                    @else 
                        <strong>Uploaded Video</strong>
                        <div class="form-control border border-primary d-flex align-items-center gap-2 small fw-bold mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                            </svg> 
                            <a href="{{ $video->video_url }}" class="btn btn-link" target="______">Click to open new tab</a>
                        </div>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Video Description</strong>
                        <textarea class="form-control" name="video_detail" placeholder="Detail" rows="2">{{ $video->video_detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                    <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection