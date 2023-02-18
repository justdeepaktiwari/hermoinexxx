@extends('admin.index')

@section('title', 'Add photos')

@section('action-btn')
    <div class="pull-right">
        <a class="btn btn-outline-primary" href="{{ route('photos.index') }}"> Back</a>
    </div>
@endsection

@section('css')
    
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


    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-between">
            <div class="col-md-7 d-inline-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                        <div class="form-group">
                            <strong>Select Type</strong>
                            <select name="subscription_type_id" class="form-select">
                                <option value="3">Gold</option>
                                <option value="4">Silver</option>
                                <option value="5">Bronze</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                        <div class="form-group">
                            <strong>Photo Title</strong>
                            <input type="text" name="photo_title" class="form-control" placeholder="Photo title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                        <div class="form-group">
                            <strong>Upload Photo</strong>
                            <input class="form-control" type="file" name="photo_url" id="file-input" accept="image/*">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                        <div class="form-group">
                            <strong>Photo Description</strong>
                            <textarea class="form-control" name="photo_detail" placeholder="Detail" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                        <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 d-inline-block">
                <div class="border video-lebel notuploadedvideo">
                    <Photo id="video" controls></video>
                </div>
            </div> -->
        </div>

    </form>
@endsection

@section('js')

@endsection
