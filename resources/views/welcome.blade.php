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
            <button class="btn btn-outline-danger btn-sm rounded-0">Get Access</button>

            <button class="btn btn-danger btn-sm rounded-0" type="submit">Sign In</button>
        </div>
    </nav> 
    <div class="get-started-container text-white justify-content-center text-center">
        <h2>
            Unlimited Access to Videos, Web Cam, <br>Photos, and More
        </h2>   
        <p class="para-2">Ready to watch? <br>Enter your email to create or restart your membership.</p>
        <input type="text" name="email" placeholder="Email Address">
        <button type="submit">Get Started ></button>
    </div> 
</header>
<!-- HEADER SECTION ENDS -->
<!-- MAIN SECTION STARTS -->
<section class="main-section">
    <!-- ENJOY ON YOUR TV -->
    <div class="section-container">
        <div class="left-column">
            <h1>Enjoy Hermoinexxx.com</h1>
            <h3>Signup to watch high rated videos recorded by our sexy partner. and also get one to one video call with our horny partner.</h3>
            <button class="btn btn-outline-danger rounded-0 mt-3" style="width: 200px;">Sign Up</button>
        </div>
        <div class="right-column">
            <img src="{{ asset("assets/images/tv.png") }}">
            <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                <source src="{{ asset("assets/videos/welcome.mp4") }}" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- DOWNLOAD YOU SHOW TO WATCH OFFLINE -->
    <div class="section2-container text-white">
        <div id="pricing-card" class="w-100">
        
            <div class="columns">
                <ul class="price">
                <li class="header">Basic</li>
                <li class="grey">$ 9.99 / year</li>
                <li>10GB Storage</li>
                <li>10 Emails</li>
                <li>10 Domains</li>
                <li>1GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Get Now</a></li>
                </ul>
            </div>
            
            <div class="columns">
                <ul class="price">
                <li class="header" style="background-color:#04AA6D">Pro</li>
                <li class="grey">$ 24.99 / year</li>
                <li>25GB Storage</li>
                <li>25 Emails</li>
                <li>25 Domains</li>
                <li>2GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Get Now</a></li>
                </ul>
            </div>
            
            <div class="columns">
                <ul class="price">
                <li class="header">Premium</li>
                <li class="grey">$ 49.99 / year</li>
                <li>50GB Storage</li>
                <li>50 Emails</li>
                <li>50 Domains</li>
                <li>5GB Bandwidth</li>
                <li class="grey"><a href="#" class="btn btn-outline-success btn-lg rounded-0">Get Now</a></li>
                </ul>
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
            <br><br>
            <select>
                <option value="/kw-en/">English</option>
                <option value="/kw/">العربية</option>
            </select>
            <br><br>
            <p>Netflix Kuwait</p>
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
</footer>
<!-- FOOTER SECTION ENDS -->
@endsection

@section('js')
    <script src="assets/js/script.js"></script>
@endsection