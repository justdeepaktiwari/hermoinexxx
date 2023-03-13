@extends('layouts.app')

@section("title", "Live cams")

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/user-video.css') }}">
<!-- Video.js base CSS -->
<link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet" />

<!-- City -->
<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />

<style>
    .cam-girl .title-container {
        height: 40px;
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        color: black;
        bottom: 0px;
        z-index: 111;
    }
</style>
@endsection

@section('content')

@include("videos.partials.header")

@include("videos.partials.sidebar")

<div class="text-white w-md-responsive ms-auto">
    <main class="content-section">
        <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
            <div class="border-end  border-dark w-20 py-2 text-center fs-6" role="button">
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

        <div class="cam-girls m-3 column">
            <div class="cam-girl-container row justify-content-center my-4">
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cam-girl-container row justify-content-center my-4">
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
                <div class="cam-girl col-sm">
                    <div class="image-container position-relative">
                        <img class="img-fluid" src="{{ asset('assets/images/bg_img.webp') }}" alt="">
                        <div class="position-absolute title-container d-flex align-items-center justify-content-between">
                            <div class="text-light left-content justify-content-between"><i class="fa-regular fa-heart text-danger mx-2"></i>Hermoine</div>
                            <div class="right-content text-light mx-2 justify-content-between"><i class="fa-solid fa-circle text-success mx-1"></i><i class="fa-regular fa-flag mx-2"></i>21</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pagination-section py-3 text-center">

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
                $(".small-size-screen-sidebar").slideDown("easing");
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

    function slideUp() {
        $(".small-size-screen-sidebar").slideUp("easing");
        return;
    }
</script>
<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
@endsection