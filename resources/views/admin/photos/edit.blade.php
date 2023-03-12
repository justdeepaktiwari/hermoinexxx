@extends('admin.index')

@section('title', 'Photos Role')

@section('action-btn')
  <div class="pull-right">
    <a class="btn btn-outline-primary btn-sm rounded-0" href="{{ route('photos.index') }}"> Back</a>
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


<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-between">
        <div class="col-md-10 d-inline-block">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Select Type</strong>
                        <select name="subscription_type_id" class="form-select">
                            @foreach($subscription as $key => $subscription_item)
                            <option value="{{ $subscription_item["id"] }}">{{ $subscription_item["name"] }}</option>
                            @endforeach
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
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Select Categories</strong>
                        <select name="categories_id[]" multiple class="w-100">
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Select Tags</strong>
                        <select name="tags_id[]" multiple class="w-100">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
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

@section('js')
<script>
    $('[name="categories_id[]"], [name="tags_id[]"]').select2();
</script>
@endsection