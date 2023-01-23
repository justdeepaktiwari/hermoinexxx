@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
@endsection

@section('content')
<!-- HEADER SECTION STARTS -->
<header class="showcase">
    <!-- NAVBAR -->
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="{{ asset("assets/images/logo.webp") }}">

        <div class="right-side-button pe-2">
            <button class="btn btn-outline-danger rounded-0">Instant Access</button>

            <button class="btn btn-danger rounded-0" type="submit">Sign In</button>
        </div>
    </nav> 
    <div class="get-started-container text-white justify-content-center text-center">
        <h2>Unlimited Access to Videos, Web Cam, <br>Photos, and More</h2>   
        <h3>Ready to watch?</h3> 
        <h4 class="mt-4">Enter your email to create or restart your membership.</h4>
        <input type="text" name="email" placeholder="Email Address">
        <button type="submit">Instant Access ></button>
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
    <!-- DOWNLOAD YOU SHOW TO WATCH OFFLINE -->
    <div class="section2-container text-white">
        <div id="pricing-card" class="w-100 owl-carousel">
        
            <div class="columns w-100">
                <ul class="price">
                <li class="header">Basic</li>
                <li class="grey">$ 9.99 / year</li>
                <li>10GB Storage</li>
                <li>10 Emails</li>
                <li>10 Domains</li>
                <li>1GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Instant Access</a></li>
                </ul>
            </div>
            
            <div class="columns w-100">
                <ul class="price">
                <li class="header" style="background-color:#04AA6D">Pro</li>
                <li class="grey">$ 24.99 / year</li>
                <li>25GB Storage</li>
                <li>25 Emails</li>
                <li>25 Domains</li>
                <li>2GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Instant Access</a></li>
                </ul>
            </div>
            
            <div class="columns w-100">
                <ul class="price">
                <li class="header">Premium</li>
                <li class="grey">$ 49.99 / year</li>
                <li>50GB Storage</li>
                <li>50 Emails</li>
                <li>50 Domains</li>
                <li>5GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Instant Access</a></li>
                </ul>
            </div>
        </div>
    </div> 

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="right-column">
                <img src="{{ asset("assets/images/tv.png") }}">
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
        
        <div class="col-md-6 col-12">
            <div class="left-column">
                <h1>EROTIC FEET FETISH</h1>
                <h3>Signup to watch high rated videos recorded by our sexy partner. and also get one to one video call with our horny partner.</h3>
                <button class="btn btn-outline-danger rounded-0 mt-3" style="width: 200px;">Instant Access</button>
            </div>
        </div>
    </div> 

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="left-column">
                <h1>ENJOY BDSM PICS AND VIDEOS</h1>
                <h3>Watch Live Web cam, Videos, Pics And more.</h3>
                <button class="btn btn-outline-danger rounded-0 mt-3" style="width: 200px;">Instant Access</button>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="right-column">
                <img src="{{ asset("assets/images/tv.png") }}">
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <div class="section-container d-flex justify-content-between text-white flex-wrap">
        <div class="text-center col-12">
            <h1 class="text-uppercase">CUM CLUSTER</h1>
            <div style="height: 20px;"></div>
        </div>
        <div class="col-12 cum-cluster-video d-flex justify-content-around flex-wrap border border-2 border-danger">
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
                <a href="http://video">
                <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                    <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
                </video>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-12 border border-danger ">
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
        <div class="email-address text-white col-12 text-center my-3">
            <h3>ONE DAY FREE TRIAL</h3>
            <input type="text" name="email" placeholder="Email Address">
            <button type="submit">Instant Access ></button>
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
@endsection

@section('js') 

<script type="text/javascript">
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

        $('#pricing-card').owlCarousel({
            margin: 10,
            nav: true,
            dots: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1, 
                },
                900:{
                    items: 2, 
                },
                1000:{
                    items: 3,
                }
            }
        })

        $("#pricing-card .owl-next").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg>`);
$("#pricing-card .owl-prev").html(`<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>`);
    });
</script>
<script src="assets/js/script.js"></script>
@endsection