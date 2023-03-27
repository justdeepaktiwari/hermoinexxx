@extends('layouts.app')

@section("title", "Hermoinexxx - videos")

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')

@include("loader")

@include("models.partials.header")

@include("models.partials.sidebar")

<div class="text-white">
    <main class="content-section px-lg-2 px-sm-0 px-md-2">
        <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
            <div class="border-end  border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('models') }}`">
                Webcam
            </div>
            <div class=" border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('list.product') }}`">
                Shop
            </div>
            <div class="border-start  border-end  border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('user-photos') }}`">
                PICTURE GALLERY
            </div>
        </div>
        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3">
            <div class="row px-2 mx-2">
                <div class="fs-4 fw-bold d-flex justify-content-between my-2">
                    <span>Models</span>
                </div>
                @foreach($models as $model)
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="{{ route('user', $model->id) }}" role="button">
                    <div class="position-relative  border bg-dark " style="height: 200px;">
                       <img src="{{ asset('storage/users-avatar/'.$model->avatar) }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="pt-2 text-center bg-dark ">{{ $model->name }}</div>
                    <div class="pt-1 text-center bg-dark ">{{ $model->active_status ? "Online" : "Offline"}}</div>
                    <div class="py-1 text-center bg-dark ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>    
                    United States, San Francisco</div>
                </a>
                @endforeach
            </div>
        </div>
        @include("models.partials.footer")
    </main>
</div>
@endsection

@section('js')
<script>

</script>
@include("models.partials.commonjs")
<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
@endsection