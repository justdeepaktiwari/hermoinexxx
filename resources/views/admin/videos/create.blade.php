@extends('admin.index')

@section('title', 'Add Videos')

@section('action-btn')
    <div class="pull-right">
        <a class="btn btn-outline-primary" href="{{ route('videos.index') }}"> Back</a>
    </div>
@endsection

@section('css')
    <style>
        .video-lebel {
            width: 350px;
            height: 200px;
            /* display: none; */
            position: relative;
            cursor: pointer;
        }

        .notuploadedvideo::after{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            color: white;
            font-weight: 800;

            content: "Waiting...";
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            z-index: 999;
            background: linear-gradient(0deg, rgba(0,0,0,0.9), rgba(0,0,0,0.9));
        }

        .video-lebel video {
            width: 100%;
            height: 100%;
            object-fit: cover
        }
    </style>
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


    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-between flex-wrap">
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
                            <strong>Video Title</strong>
                            <input type="text" name="video_title" class="form-control" placeholder="video title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                        <div class="form-group">
                            <strong>Upload Video</strong>
                            <input class="form-control" type="file" name="video_url" id="file-input" accept="video/*">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                        <div class="form-group">
                            <strong>Video Description</strong>
                            <textarea class="form-control" name="video_detail" placeholder="Detail" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                        <button type="submit" class="btn btn-primary rounded-0">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-inline-block">
                <div class="border video-lebel notuploadedvideo">
                    <video id="video" controls></video>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('js')
    <script>
        const input = document.getElementById('file-input');
        const video = document.getElementById('video');
        const videoSource = document.createElement('source');

        input.addEventListener('change', function() {
            
            $(".video-lebel").addClass("notuploadedvideo");

            const files = this.files || [];

            if (!files.length) return;

            const reader = new FileReader();

            reader.onload = function(e) {
                videoSource.setAttribute('src', e.target.result);
                video.appendChild(videoSource);
                video.load();
                video.play();
            };

            reader.onprogress = function(e) {
                console.log('progress: ', Math.round((e.loaded * 100) / e.total));
            };

            reader.readAsDataURL(files[0]);

            $(".video-lebel").removeClass("notuploadedvideo");
        });
    </script>
@endsection
