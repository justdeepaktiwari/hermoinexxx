@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
@endsection

@section('content')
<!-- HEADER SECTION STARTS -->
<div class="bg-light text-center py-2"><span class="badge rounded-pill bg-danger">NEW!</span> Plans now start at $6.99 &nbsp;<a href="http://" class="text-decoration-none fs-6 fw-bold" target="_blank" rel="noopener noreferrer">Learn More ></a></div>
<header class="showcase">
    <!-- NAVBAR -->
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="{{ asset("assets/images/logo.webp") }}">

        <div class="right-side-button pe-2">
            <button class="btn btn-outline-light rounded-0">Instant Access</button>

            <button class="btn btn-danger rounded-0" type="submit">Sign In</button>
        </div>
    </nav> 
    <div class="get-started-container text-white justify-content-center text-center">
        <h2>Unlimited Access to Videos, Web Cam, <br>Photos, and More</h2>   
        <h3>Ready to watch?</h3> 
        <h4 class="mt-4 ">Enter your email to create or restart your membership.</h4>
        <div class="col-md-6 col-10 mx-auto d-lg-block d-none">
            <div class="input-group mt-3 mx-auto">
                <input type="text" class="form-control rounded-0" placeholder="Email Address">
                <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
            </div>
        </div>
        <div class="col-11 mx-auto text-center d-lg-none d-block">
            <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address">
            <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
        </div>
    </div> 

    <div class="feature-video">
        <video width="100%" height="100%" id="vid" loop="loop" autoplay="autoplay" controls muted>
            <source src="{{ asset("assets/videos/feature-video.mp4") }}" type="video/mp4">
        </video>
    </div>
</header>
<!-- HEADER SECTION ENDS -->
<!-- MAIN SECTION STARTS -->
<section class="main-section">

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="left-column">
                <h1 class="cust-fs-1">Erotic Foot Fetish.</h1>
                <h3>Signup to watch high rated videos recorded by our sexy partner. and also get one to one video call with our horny partner.</h3>
                <div class="col-11 d-lg-block d-none">
                    <div class="input-group mt-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button">Instant Access ></button>
                    </div>
                </div>
                <div class="col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="right-column ms-auto">
                <img src="{{ asset("assets/images/tv.png") }}">
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div> 

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="right-column me-auto">
                <img src="{{ asset("assets/images/tv.png") }}">
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="left-column ms-auto">
                <h1 class="cust-fs-1">Enjoy BDSM PICS and Videos.</h1>
                <h3>Watch Live Web cam, Videos, Pics And more.</h3>
                <div class="col-11 d-lg-block d-none">
                    <div class="input-group mt-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button">Instant Access ></button>
                    </div>
                </div>
                <div class="col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container d-flex justify-content-between text-white flex-wrap">
        <div class="text-md-start text-center col-md-6 col-12 me-auto mb-2 align-middle d-flex align-items-center">
            <div class="my-auto d-block">
                <h1 class="text-uppercase cust-fs-1">CUM CLUSTER OF DOWNLOADED AND UPLOADED VIDEOS</h1>
                <div class="col-11 d-lg-block d-none">
                    <div class=" input-group mt-3 me-auto">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button">Instant Access ></button>
                    </div>
                </div>
                <div class="col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 cum-cluster-video d-flex justify-content-around flex-wrap border border-2 border-danger">
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
        </div>
    </div>

    <div class="section-container d-flex justify-content-between text-white flex-wrap">
        <div class="col-12 big-logo text-center">
            <img src="{{ asset("assets/images/logo.webp") }}" alt="">
        </div>
        <div class="text-white col-12 text-center my-3">
            <h1>ONE DAY FREE TRIAL</h1>
            <div class="col-md-6 d-lg-block d-none mx-auto">
                <div class="input-group mt-3 mx-auto">
                    <input type="text" class="form-control rounded-0" placeholder="Email Address">
                    <button class="btn btn-danger rounded-0 fs-2  p-2" type="button">Instant Access ></button>
                </div>
            </div>

            <div class="col-11 mx-auto text-center d-lg-none d-block">
                <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address">
                <button class="btn btn-danger rounded-0 fs-2 p-2" type="button">Instant Access ></button>
            </div>
        </div> 
    </div>

    <div class="section2-container" id="testomial-section">
        <div class="text-center my-3 text-white col-12 col-carousel">
            <h1 class="text-uppercase">Testimonials</h1> 
            <div style="height: 20px;"></div>
            <!-- Set up your HTML -->
            <div class="owl-carousel carousel-main">
                <div class="border border-2 border-danger p-2 overflow-hidden"> 
                    <img src="{{ asset("assets/testomonials/test_1.webp") }}" > 
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_2.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_3.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_4.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_5.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_6.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                     <img src="{{ asset("assets/testomonials/test_7.webp") }}" > 
                     <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAIN SECTION ENDS -->

<!-- FOOTER SECTION STARTS -->
<footer>
    <h5>Questions? Contact us.</h5>
    <div class="content">
        <div class="middle box">
            <div><a href="#">FAQ</a></div>
            <div><a href="#">Investor Relations</a></div>
            <div><a href="#">Privacy</a></div>
            <div><a href="#">Speed Test</a></div> 
        </div>

        <div class="middle box">
            <div><a href="#">Help Center</a></div>
            <div><a href="#">Jobs</a></div>
            <div><a href="#">Cookie Preferences</a></div>
            <div><a href="#">Legal Notices</a></div>
        </div>

        <div class="middle box">
            <div><a href="#">Account</a></div>
            <div><a href="#">Ways to Watch</a></div>
            <div><a href="#">Corporate Information</a></div>
            <div><a href="#">Mobile Application Design</a></div>
            <div><a href="#">Only on Netflix</a></div>
        </div>

        <div class="middle box">
            <div><a href="#">Media Center</a></div>
            <div><a href="#">Terms of Use</a></div>
            <div><a href="#">Contact Us</a></div>
        </div>

    </div>
<div class="text-center bg-transparent py-3 text-white border border-2 border-bottom-0 border-end-0 border-start-0 border-danger">2023 copyrights@hermoinexxx.com</div>
</footer>

<!-- FOOTER SECTION ENDS -->

<!--Pricing modal-->
<!-- Button trigger modal --> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border border-2 border-danger rounded-0 text-white" style="background: black;"> 
        <div class="modal-body">
            <div class="d-flex justify-content-between w-100 mb-2">
                <span class="fs-2">What are you waiting for ? </span><span class="text-white negative-margin fs-2" data-bs-dismiss="modal" aria-label="Close" role="button">&#10006;</span>
            </div>
            <div class="border border-danger border-2 my-2 p-2 d-flex align-items-center justify-content-around cursor-pointer">
                <div class="radio-btn me-1">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>
                <div class="content me-1 cursor-pointer">
                    <label for="flexRadioDefault1" class="cursor-pointer">
                        30 Days <br>
                        Billed in monthly payments of <del>$29.98</del> <span class="fw-bold">$24.98</span>
                    </label>
                </div>
                <div class="offered-amount cursor-pointer">
                    <label for="flexRadioDefault1"  class="cursor-pointer fs-3">
                        $29<span class="fs-5"><sup>.98</sup><sub>/month</sub></span>
                    </label>
                </div>
            </div>
            <div class="border border-danger border-2 my-2 p-2 d-flex align-items-center justify-content-around cursor-pointer position-relative">
                <div class="radio-btn me-1">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                </div>
                <div class="content me-1 cursor-pointer">
                    <label for="flexRadioDefault2" class="cursor-pointer">
                        90 Days <br>
                        Billed in 3 month payments of <del>$59.94</del> <span class="fw-bold">$54.00</span>
                    </label>
                </div>
                <div class="offered-amount cursor-pointer">
                    <label for="flexRadioDefault2"  class="cursor-pointer fs-3">
                        $19<span class="fs-5"><sup>.98</sup><sub>/month</sub></span>
                    </label>
                    <div class="offer-div px-2 shadow position-absolute text-center">
                        10% OFF
                    </div>
                </div>
            </div>
            <div class="border border-danger border-2 my-2 p-2 d-flex align-items-center justify-content-around cursor-pointer position-relative">
                <div class="radio-btn me-1">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                </div>
                <div class="content me-1 cursor-pointer">
                    <label for="flexRadioDefault3" class="cursor-pointer">
                        365 Days <br>
                        Billed yearly in repeating payments of <del>$199.84</del> <span class="fw-bold">$84.00</span>
                    </label>
                </div>
                <div class="offered-amount cursor-pointer">
                    <label for="flexRadioDefault3"  class="cursor-pointer fs-3">
                        $7<span class="fs-5"><sup>.98</sup><sub>/month</sub></span>
                    </label>
                    <div class="offer-div px-2 shadow position-absolute text-center">
                        17% OFF
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2 text-end">
                <button class="btn btn-danger rounded-0 btn-sm fs-6 next-btn" style="width: 150px;" disabled>Next</button>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js') 

<script type="text/javascript">
    var is_shown = true;
    $(window).scroll(function () {
        
        // if($(window).scrollTop() > 100 && is_shown){
        //     $('#staticBackdrop').modal('show'); 
        //     is_shown = false;
        // }

    });

    $(document).ready(function(){
        $('.carousel-main').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause:true,
            margin: 10,
            nav: false,
            dots: false, 
            loop:true, 
            responsiveClass:true,
            responsive:{
                0:{
                    items:1, 
                },
                600:{
                    items: 2, 
                },
                1000:{
                    items: 4,
                }
            }
        })
    });

    $(document).ready(function () {
        $(".radio-btn input").change(function (e) { 
            e.preventDefault();
            $(".background-change-click").removeClass("background-change-click");
            
            if($(this).is(":checked")){
                $(this).parent().parent().addClass("background-change-click");
            }

            if($(".background-change-click").length){
                $(".next-btn").removeAttr("disabled");
            }else{
                $(".next-btn").attr("disabled", "disabled");
            }
        });    
    });
</script>
<script src="assets/js/script.js"></script>
@endsection