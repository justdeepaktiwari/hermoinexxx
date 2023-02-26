@extends('layouts.app')

@section("title", $video_detail->video_title)

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
            <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button" onclick="window.location.href = `{{ route('user-videos.search') }}`">
                videos
            </div>
            <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                Pictures
            </div>
            <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                Webcam
            </div>
            <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
                Wellness
            </div>
            <div class="border-start  border-dark w-20 py-2 text-center fs-6" role="button">
                Shop
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3 justify-lg-content-between justify-md-content-between justify-content-center">
            <div class="col-11 d-flex overflow-x-scroll py-2 custom-mx-auto custom-me-md-auto custom-me-lg-auto">
                <div class="owl-carousel carousel-main position-relative">
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Tits</a></div>
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Cumshot</a></div>
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">MILF</a></div>
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Brunette</a></div>
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Rough</a></div>
                    <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Ass</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Dick</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Step Fantasy</a></div>

                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Rough</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Ass</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Dick</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Step Fantasy</a></div>

                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Rough</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Ass</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Big Dick</a></div>
                    <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center cursor-pointer"><a href="" class="text-decoration-none text-white">Step Fantasy</a></div>
                </div>
            </div>
            <div class="col-md-9 col-12 d-flex flex-column gap-3 mt-2">
                <div class="fs-3 my-2 border border-danger w-100 p-2">{{ $video_detail->video_title }}</div>
                <div class="video-section w-100 border border-danger p-2">
                    @php
                    $type = explode(".", $video_detail->video_url);
                    $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";
                    @endphp
                    <video class="video" controls muted autoplay>
                        <source src="{{ $video_detail->video_url }}" type="video/{{ $type }}">
                    </video>
                </div>
            </div>
            <div class="col-md-3 col-12 text-end px-2  mt-2">
                <div class="bg-white ad-section  mx-2" style="height: 45%; min-height: 180px;"></div>
                <div class="ad-section mx-2 d-flex align-items-center" style="height: 10%;  min-height: 80px;">
                    <button class="btn btn-outline-secondary rounded-0 w-100">Purchase Panties & Socks</button>
                </div>
                <div class="bg-white ad-section  mx-2" style="height: 45%;  min-height: 180px;"></div>
            </div>
            <div class="col-md-9 col-12 me-auto">
                <div style="height: 20px;"></div>
                <div class="d-flex justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center flex-wrap p-2 me-auto mt-3">
                    <div class="fs-4 fw-bold my-2">Releated Video</div>
                    <div style="height: 20px;"></div>
                    <div class="col-12 row">
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
                                <span class="small text-muted">{{ $video->video_views_count ?? 200 }} views</span><span class="mt-1 small text-muted">77%</span>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="col-12 text-center mt-3">
                        <div class="col-11 col-md-5 btn btn-secondary btn-sm">Show More</div>
                    </div>

                    <div class="text-white fw-bold fs-4 col-md-12 col-12 mt-3 mb-2">Releated Searches:</div>
                    <div class="carousel-second owl-carousel">
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">Big Tits</div>
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">Cumshot</div>
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">MILF</div>
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">Brunette</div>
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">Rough</div>
                        <div class="border black-color text-white mx-1 px-3 py-1 rounded-1 text-center">Big Ass</div>
                        <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center">Big Dick</div>
                        <div class="border black-color text-muted mx-1 px-3 py-1 rounded-1 text-center">Step Fantasy</div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>
        @include("videos.partials.footer")
    </main>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $(".toogle-btn span").click(function(e) {
            if ($(window).width() < 600) {
                $(".small-size-screen-sidebar").slideToggle("easing");
                return;
            }

            if ($(this).hasClass("active")) {
                $(".toggle-with-button").animate({
                    width: "80px"
                })

                $(".toggle-with-button").find("div span")
                    .addClass("d-none").parent()
                    .addClass("justify-content-center")
                    .removeClass("justify-content-start");

                $(this).removeClass("active");
            } else {
                $(".toggle-with-button").animate({
                    width: "200px"
                })

                $(".toggle-with-button").find("div span")
                    .removeClass("d-none").parent()
                    .addClass("justify-content-start")
                    .removeClass("justify-content-center");

                $(this).addClass("active");
            }
        });
    });

    $(document).ready(function() {
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
            loop: false,
            autoWidth: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 4,
                },
                600: {
                    items: 6,
                },
                1000: {
                    items: 8,
                }
            }
        });

        $(".carousel-main .owl-nav .owl-next span").html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>`);

        $(".carousel-main .owl-nav .owl-prev span").html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>`);
    });

    function slideUp() {
        $(".small-size-screen-sidebar").slideUp("easing");
        return;
    }
</script>

@include("videos.partials.commonjs")
@endsection