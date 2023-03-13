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


<div class="p-0 m-0">
    <div class="column w-100">
        <div class="row gx-0">
            <div class="col-md-9 bg-dark" style="height: 600px;">
                <div class="position-relative live-video-container bg-light m-auto rounded" style="height: 90%; width: 90%; margin-top: 20px !important;">
                <i class="fa-solid fa-xmark position-absolute fs-3" style="top: 10px; right: 15px;"></i>
                </div>
            </div>
            <div class="bg-danger d-block w-auto">
                <div class="cam-girl-intro">
                    fklsajkd
                </div>
            </div>
        </div>
        <div class="bg-dark w-100" style="height: 40px;">

        </div>
    </div>

</div>
<div class="bg-black">
    <div style="height: 20px;"></div>
    <div style="height: 20px;"></div>
    @include("videos.partials.footer")
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