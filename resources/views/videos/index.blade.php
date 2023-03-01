@extends('layouts.app')

@section("title", "Hermoinexxx - videos")

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
@endsection

@section('content')

@include("loader")

@include("videos.partials.header")

@include("videos.partials.sidebar")

<div class="text-white w-md-responsive ms-auto">
    <main class="content-section">
        <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
            <div class="border-end  border-dark col-4 py-2 text-center fs-6" role="button">
                Webcam
            </div> 
            <div class=" border-dark col-4 py-2 text-center fs-6" role="button">
                Shop
            </div>
            <div class="border-start  border-end  border-dark col-4 py-2 text-center fs-6" role="button">
                PICTURE GALLERY
            </div> 
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3 justify-lg-content-between justify-md-content-between justify-content-center">
            <div class="col-md-8 col-12 row mb-2">
                <div class="fs-4 fw-bold  my-2">Videos Being Watched</div>
                @foreach($max_watched as $video)
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="{{ route('user-videos.video-detail', $video->id) }}" role="button">
                    <div class="position-relative" style="height: 160px;">
                        @php
                            $type = explode(".", $video->video_url);
                            $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                            if(isset($folder[count($folder)-2])){
                                $folder = $folder[count($folder)-2];
                            }
                        @endphp
                        
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('uploads/'.$folder.'/poster.'.$type) }}" type="video/{{ $type }}">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                           {{$video->video_duration ?? "4:19"}}
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">{{ $video->video_title }}</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">{{ $video->video_views_count ?? 200 }} views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4 col-12 text-end px-2 mb-2">
                <div class="ad-section  mx-2  border border-danger p-1" style="height: 45%; height: 200px;">
                    @php
                        $type = explode(".", $random_products_video->product_image);
                        $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                        $folder = isset($random_products_video->product_image) ? explode("/", $random_products_video->product_image) : "";
                        if(isset($folder[count($folder)-2])){
                            $folder = $folder[count($folder)-2];
                        }
                    @endphp
                    <video class="video" playsinline muted loop autoplay>
                        <source src="{{ $random_products_video->product_image }}" type="video/{{ $type }}">
                    </video>
                </div>
                <div class="ad-section mx-2 d-flex align-items-center" style="height: 10%;  min-height: 80px;" st>
                    <button class="btn btn-outline-secondary rounded-0 w-100">Purchase Panties & Socks</button>
                </div>
                <div class="ad-section  mx-2 border border-danger p-1" style="height: 45%;  height: 200px;">
                        <div class="h-100 w-100" style="background: url('{{ asset($random_products_photo->product_image) }}') no-repeat center center/cover;">

                        </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-1">
            <div class="col-12 row">
                <div class="fs-4 fw-bold my-2">Recommended</div>
                @foreach($recomended_video as $video)
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="{{ route('user-videos.video-detail', $video->id) }}" role="button">
                    <div class="position-relative" style="height: 160px;">
                        @php
                            $type = explode(".", $video->video_url);
                            $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                            if(isset($folder[count($folder)-2])){
                                $folder = $folder[count($folder)-2];
                            }
                        @endphp
                        
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('uploads/'.$folder.'/poster.'.$type) }}" type="video/{{ $type }}">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                           {{$video->video_duration ?? "4:19"}}
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">{{ $video->video_title }}</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">{{ $video->video_views_count ?? 200 }} views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3">
            <div class="col-12 row">
                <div class="fs-4 fw-bold d-flex justify-content-between my-2">
                    <span>New Videos</span>
                    <span class="btn btn-outline-secondary rounded-0" style="width: 150px;">Latest</span>
                </div>
                @foreach($new_video as $video)
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="{{ route('user-videos.video-detail', $video->id) }}" role="button">
                    <div class="position-relative" style="height: 160px;">
                        @php
                            $type = explode(".", $video->video_url);
                            $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                            if(isset($folder[count($folder)-2])){
                                $folder = $folder[count($folder)-2];
                            }
                        @endphp
                        
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="{{ asset('uploads/'.$folder.'/poster.'.$type) }}" type="video/{{ $type }}">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                        {{$video->video_duration ?? "4:19"}}
                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">{{ $video->video_title }}</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">{{ $video->video_views_count ?? 200 }} views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="pagination-section py-3 text-center col-11 mx-auto">
            {!! $new_video->links() !!}
        </div>

        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>
        
        @include("videos.partials.footer")
    </main>
</div>
@endsection

@section('js')
<script>

</script>
@include("videos.partials.commonjs")
<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
@endsection