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

        <div class="right-side-button">
            <button class="btn btn-outline-danger">Get Access</button>

            <button class="submit ms-2" type="submit">Sign In</button>
        </div>
    </nav> 
    <div class="get-started-container d-flex justify-content-center text-white">
        <h1>
            <span class="typewrite fw-bold" data-period="2000" data-type='[ "Enjoy Hermoinexxx.com", "Get access my premium video by one click" ]'>
              <span class="wrap"></span>
            </span>
          </h1>
    </div>

    <div class="feature-video d-flex justify-content-around flex-wrap">
        <div class="border shadow" style="width: 20rem; height: 20rem; background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('{{ asset("assets/images/background/feature1.gif") }}') no-repeat center center/cover;">
        </div>
        <div class="border shadow d-sm-none d-md-block" style="width: 20rem; height: 20rem; background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('{{ asset("assets/images/background/feature2.gif") }}') no-repeat center center/cover;"> 
        </div>
        <div class="border shadow d-sm-none d-md-block" style="width: 20rem; height: 20rem; background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('{{ asset("assets/images/background/feature3.gif") }}') no-repeat center center/cover;">
        </div>
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
    <div class="section2-container">
        <div class="left-column">
            <img src="{{ asset("assets/images/download.jpg") }}">
            <div class="box">
                <img class="boxshot" src="{{ asset("assets/images/boxshot.png") }}">
                <p>
                    Stranger Things
                    <br>
                    <a href="#">Downloading...</a>
                </p>
                <img class="download-gif"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/download-icon.gif">
            </div>
        </div>
        <div class="right-column">
            <h1>Download your shows to watch offline.</h1>
            <h3>Save your favorites easily and always have something to watch.</h3>
        </div>
    </div>
    <!-- WATCH EVERY WHERE -->
    <div class="section-container">
        <div class="left-column">
            <h1>Watch everywhere.</h1>
            <h3>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</h3>
        </div>
        <div class="right-column">
            <img src="{{ asset("assets/images/computer.png") }}">
            <video class="video-2" autoplay="" playsinline="" muted="" loop="">
                <source src="{{ asset("assets/videos/video2.m4v") }}" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- CREATE PROFILE FOR KIDS -->
    <div style="padding-top: 50px;" class="section2-container">
        <div class="left-column">
            <img src="{{ asset("assets/images/create_profile.png") }}">
        </div>
        <div class="right-column">
            <h1>Create profiles for kids.</h1>
            <h3>Send kids on adventures with their favorite characters in a space made just for them—free with your
                membership.</h3>
        </div>
    </div>
</section>
<!-- MAIN SECTION ENDS -->

<!-- QUESTION SECTION STARTS -->
<section class="question-container">
    <h1>Frequently Asked Questions</h1>
    <!-- QUESTION 1 -->
    <button id="question1" type="button">
        What is Netflix?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer1" class="answer1">
        <p>
            Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime,
            documentaries, and more on thousands of internet-connected devices.
            <br><br>
            You can watch as much as you want, whenever you want without a single commercial – all for one low monthly
            price. There's always something new to discover and new TV shows and movies are added every week!
        </p>
    </div>
    <br>
    <!-- QUESTION 2 -->
    <button id="question2" type="button">
        How much does Netflix cost?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer2" class="answer2">
        <p>
            Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly
            fee. Plans range from USD7.99 to USD14.99 a month. No extra costs, no contracts.
        </p>
    </div>
    <br>
    <!-- QUESTION 3 -->
    <button id="question3" type="button">
        Where can I watch?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer3" class="answer3">
        <p>
            Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from
            your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs,
            smartphones, tablets, streaming media players and game consoles.
            <br><br>
            You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch
            while you're on the go and without an internet connection. Take Netflix with you anywhere.
        </p>
    </div>
    <br>
    <!-- QUESTION 4 -->
    <button id="question4" type="button">
        How do I cancel?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer4" class="answer4">
        <p>
            Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account
            online in two clicks. There are no cancellation fees – start or stop your account anytime.
        </p>
    </div>
    <br>
    <!-- QUESTION 5 -->
    <button id="question5" type="button">
        What can I watch on Netflix?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer5" class="answer5">
        <p>
            Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix
            originals, and more. Watch as much as you want, anytime you want.
        </p>
    </div>
    <br>
    <!-- QUESTION 6 -->
    <button id="question6" type="button">
        Is Netflix good for kids?
        <img src="{{ asset("assets/images/plus.png") }}">
    </button>
    <div id="answer6" class="answer6">
        <p>
            The Netflix Kids experience is included in your membership to give parents control while kids enjoy
            family-friendly TV shows and movies in their own space.
            <br><br>
            Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content
            kids can watch and block specific titles you don’t want kids to see.
        </p>
    </div>
</section>
<!-- QUESTION SECTION ENDS -->

<!-- EMAIL ADDRESS STARTS-->
<div class="email-address-container">
    <p>Ready to watch? Enter your email to create or restart your membership.</p>
    <input type="text" name="email" placeholder="Email Address">
    <button type="submit">Get Started ></button>
</div>
<!-- EMAIL ADDRESS ENDS-->

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
    <script>
       var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
@endsection