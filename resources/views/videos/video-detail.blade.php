@extends('layouts.app')

@section("title", $video_detail->video_title)

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
<style>
    .video-section {
        position: relative;
    }

    .play-btn-div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .play-btn {
        cursor: pointer;
        width: 80px;
        height: 80px;
        background: radial-gradient(rgba(255, 0, 128, 0.8) 60%, rgba(255, 255, 255, 1) 62%);
        border-radius: 50%;
        position: relative;
        display: block;
        margin: 100px auto;
        box-shadow: 0px 0px 25px 3px rgba(255, 0, 128, 0.8);
    }

    /* triangle */
    .play-btn::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-40%) translateY(-50%);
        transform: translateX(-40%) translateY(-50%);
        transform-origin: center center;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 25px solid #fff;
        z-index: 100;
        -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    /* pulse wave */
    .play-btn:before {
        content: "";
        position: absolute;
        width: 150%;
        height: 150%;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate1 2s;
        animation: pulsate1 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, .75);
        top: -30%;
        left: -30%;
        background: rgba(198, 16, 0, 0);
    }

    @-webkit-keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }

    @keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }

        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }
</style>
@endsection

@section('content')

@include("videos.partials.header")

@include("videos.partials.sidebar")

<div class="text-white w-md-responsive ms-auto" style="background: #000;">
    <main class="content-section">
        <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
            <div class="border-end  border-dark col-4 py-2 text-center fs-6" role="button">
                Webcam
            </div>
            <div class=" border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('list.product') }}`">
                Shop
            </div>
            <div class="border-start  border-end  border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('user-photos') }}`">
                PICTURE GALLERY
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3 justify-lg-content-between justify-md-content-between justify-content-center">
            <div class="col-11 d-flex overflow-x-scroll py-2 custom-mx-auto custom-me-md-auto custom-me-lg-auto">
                <div class="owl-carousel carousel-main position-relative">
                    @foreach($video_tag as $video_tag_val)
                    <div class="border  black-color @if(in_array($video_tag_val->id, $related_tag)) border-secondary @endif text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="@if(in_array($video_tag_val->id, $related_tag)) # @else {{ route('user-videos.search') }}?search={{ $video_tag_val->name }} @endif" class="text-decoration-none @if(in_array($video_tag_val->id, $related_tag)) text-muted @else text-white @endif">{{ $video_tag_val->name }}</a></div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 col-12  mt-2 mb-2">
                <div class="d-flex flex-column gap-3">
                    <div class="fs-3 my-2 border border-danger w-100 p-2">{{ $video_detail->video_title }}</div>
                    <div class="video-section w-100 border border-danger p-2">
                        @php
                        $type = explode(".", $video_detail->video_url);
                        $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";
                        @endphp
                        <video class="video" controls controlsList="nodownload">
                            <source src="{{ $video_detail->video_url }}" type="video/{{ $type }}">
                        </video>
                        <div class="play-btn-div">
                            <span class="play-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
            @php
                if($random_products_photo->product_image){
                    $product_image = json_decode($random_products_photo->product_image);
                }
            @endphp
            <div class="col-md-4 col-12 p-4 bg-dark my-auto mx-auto" role="button" onclick="window.location.href = `{{ route('list.product.detail', 2) }}`">
                <div class="p-3 overflow-hidden" style="max-width: 400px;">
                <img src="{{ asset('uploads/products/'.$product_image[0]) }}" class="img-fluid" alt="{{ $product_image[0] }}">
                </div>
            </div>
            <div class="col-md-12 col-12 me-auto  mt-2">
                <div style="height: 20px;"></div>
                <div class="d-flex justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center flex-wrap p-2 me-auto mt-3">
                    <div class="fs-4 fw-800 my-2">Releated Video</div>
                    <div style="height: 20px;"></div>
                    <div class="col-12 row add-more">
                        @foreach($related_video as $video)
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
                                <span class="small text-muted">@if($video->video_views_count > 1000) {{ number_format($video->video_views_count/1000, 1) }}k @endif views</span><span class="mt-1 small text-muted">77%</span>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="col-12 text-center mt-3 @if($related_video_count <= 8) d-none @endif">
                        <div class="col-11 col-md-5 btn btn-secondary btn-sm" onclick="showMore(this, '{{ json_encode($related_tag) }}', '{{ $related_category }}', '{{ $related_video_count }}')">Show More</div>
                    </div>
                @if(count($related_search))
                    <div class="text-white fw-800 fs-4 col-md-12 col-12 mt-3 mb-2">Releated Searches:</div>
                        <div class="col-md-7 me-auto">
                            <div class="carousel-second owl-carousel">
                                @foreach($related_search as $related_search_item)
                                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">
                                        <a href="{{ route('user-videos.search') }}?search={{ $video_tag_val->name }}" class="text-decoration-none text-white">
                                            {{ $related_search_item->search }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>
    </main>
    @include("videos.partials.footer")
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        var related_search = '{{ count($related_search) }}';

        $(".close-btn").click(function(e) {
            e.preventDefault();
            $("#custom-model").fadeOut("slow");
        });

        $('.carousel-main').owlCarousel({
            loop: true,
            autoplay: false,
            margin: 10,
            nav: true,
            dots: false,
            loop: true,
            autoWidth: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 8,
                },
                600: {
                    items: 10,
                },
                1000: {
                    items: 13,
                }
            }
        });

        $('.carousel-second').owlCarousel({
            loop: true,
            autoplay: false,
            margin: 10,
            nav: false,
            dots: false,
            autoWidth: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: related_search > 4 ? 4 : related_search,
                },
                600: {
                    items: related_search > 6 ? 6 : related_search,
                },
                1000: {
                    items: related_search > 8 ? 8 : related_search,
                }
            }
        });

        $(".carousel-main .owl-nav .owl-next span").html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>`);

        $(".carousel-main .owl-nav .owl-prev span").html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>`);
    });

    $(".play-btn").click(function(e) {
        e.preventDefault();
        $(".video").trigger('play');
        $(".play-btn-div").fadeOut();
    });

    $(".pause-btn").click(function(e) {
        e.preventDefault();
        $('.video').trigger('pause');
    });

    function showMore(elem, rel_tag, rel_cat, related_video_count) {
        $(elem).html(`<svg width="35" height="35" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)" stroke-width="2">
                            <circle cx="22" cy="22" r="6" stroke-opacity="0">
                                <animate attributeName="r"
                                    begin="1.5s" dur="3s"
                                    values="6;22"
                                    calcMode="linear"
                                    repeatCount="indefinite" />
                                <animate attributeName="stroke-opacity"
                                    begin="1.5s" dur="3s"
                                    values="1;0" calcMode="linear"
                                    repeatCount="indefinite" />
                                <animate attributeName="stroke-width"
                                    begin="1.5s" dur="3s"
                                    values="2;0" calcMode="linear"
                                    repeatCount="indefinite" />
                            </circle>
                            <circle cx="22" cy="22" r="6" stroke-opacity="0">
                                <animate attributeName="r"
                                    begin="3s" dur="3s"
                                    values="6;22"
                                    calcMode="linear"
                                    repeatCount="indefinite" />
                                <animate attributeName="stroke-opacity"
                                    begin="3s" dur="3s"
                                    values="1;0" calcMode="linear"
                                    repeatCount="indefinite" />
                                <animate attributeName="stroke-width"
                                    begin="3s" dur="3s"
                                    values="2;0" calcMode="linear"
                                    repeatCount="indefinite" />
                            </circle>
                            <circle cx="22" cy="22" r="8">
                                <animate attributeName="r"
                 begin="0s" dur="1.5s"
                 values="6;1;2;3;4;5;6"
                 calcMode="linear"
                 repeatCount="indefinite" />
        </circle>
    </g>
</svg>`);
        $.ajax({
            type: "GET",
            url: "{{ route('load.more') }}",
            data: {
                rel_tag: rel_tag,
                rel_cat: rel_cat,
                related_video_count: related_video_count
            },
            dataType: "HTML",
            success: function(response) {
                $(".add-more").append(response);
                $(elem).parent().hide();
            }
        });
    }
</script>

@include("videos.partials.commonjs")
@endsection