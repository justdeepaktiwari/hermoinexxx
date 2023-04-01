

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
<style>
    .disable-after{
        position: relative !important;
        pointer-events: none;
    }

    .disable-after::after{
        position: absolute !important;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.4;
        z-index: 9999999 !important;
        background: linear-gradient(0deg,rgba(0,0,0,0.4),rgba(0,0,0,0.4));
        pointer-events: none;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make("loader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- HEADER SECTION STARTS -->
<div class="bg-light text-center small py-1"><span class="badge rounded-pill bg-danger">Instant access!</span> Plans now
    start at $6.99 &nbsp;<a href="http://" class="text-decoration-none fw-bold" target="_blank" rel="noopener noreferrer">Learn More ></a></div>
<header class="showcase">
    <!-- NAVBAR -->
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="<?php echo e(asset('assets/images/logo.webp')); ?>">

        <div class="right-side-button pe-2">
            <button class="btn btn-outline-light rounded-0" onclick="checkOutStepOne()">Instant Access</button>

            <a class="btn btn-danger rounded-0" href="<?php echo e(route('user-videos')); ?>">Free Video</a>
        </div>
    </nav>
    <div class="get-started-container text-white justify-content-center text-center">
        <h2>Unlimited Access to Videos, Web <br>Cam, Photos, and More</h2>
        <h3 class="my-3">Ready to watch?</h3>
        <h4 class="my-2">Enter your email to create or restart your membership.</h4>
        <div class="col-md-6 col-10 mx-auto d-lg-block d-none">
            <div class="input-group mt-3 mx-auto">
                <input type="text" class="form-control rounded-0" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
            </div>
        </div>
        <div class="col-lg-11 col-md-11 col-11 mx-auto text-center d-lg-none d-block">
            <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address" onchange="this.nextElementSibling.click()">
            <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
        </div>
    </div>
    <div class="feature-video">
        <video width="100%" height="100%" id="vid" loop="loop" autoplay="autoplay" controls muted>
            <source src="<?php echo e(asset('assets/videos/feature-video.mp4')); ?>" type="video/mp4">
        </video>
    </div>
</header>
<!-- HEADER SECTION ENDS -->
<!-- MAIN SECTION STARTS -->
<section class="main-section">

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="left-column text-md-start text-center text-lg-start">
                <h1 class="cust-fs-1">Erotic Foot Fetish.</h1>
                <h3>Signup to watch high rated videos recorded by our sexy partner. and also get one to one video call
                    with our horny partner.</h3>
                <div class="col-11 d-lg-block d-none">
                    <div class="input-group mt-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                    </div>
                </div>
                <div class="col-lg-11 col-md-12 col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="right-column ms-auto">
                <img src="<?php echo e(asset('assets/images/tv.png')); ?>">
                <?php
                    $type = explode(".", $foot_fetish->video_url);
                    $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";
                ?>
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="<?php echo e(asset('uploads/'.$foot_fetish->video_url)); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <div class="section-container d-flex justify-content-between flex-wrap text-white">
        <div class="col-md-6 col-12">
            <div class="right-column me-auto">
                <img src="<?php echo e(asset('assets/images/tv.png')); ?>">
                <?php
                    $type = explode(".", $bdsm_video->video_url);
                    $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                    $folder = isset($bdsm_video->video_url) ? explode("/", $bdsm_video->video_url) : "";
                    if(isset($folder[count($folder)-2])){
                    $folder = $folder[count($folder)-2];
                    }
                ?>
                <video class="video-1" autoplay="" playsinline="" muted="" loop="">
                    <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="left-column text-md-start text-center text-lg-start ms-auto">
                <h1 class="cust-fs-1">Enjoy BDSM PICS and Videos.</h1>
                <h3>Watch Live Web cam, Videos, Pics And more.</h3>
                <div class="col-11 d-lg-block d-none">
                    <div class="input-group mt-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                    </div>
                </div>
                <div class="col-lg-11 col-md-12 col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                </div>
            </div>
        </div>
    </div>

    <div class="section-container d-flex justify-content-between text-white flex-wrap">
        <div class="text-md-start text-center col-md-6 col-12 me-auto mb-2 align-middle d-flex align-items-center">
            <div class="my-auto d-block">
                <h1 class="cust-fs-1 mb-3">Cum Cluster Of Downloaded And Uploaded Videos</h1>
                <div class="col-11 d-lg-block d-none">
                    <div class=" input-group mt-3 me-auto">
                        <input type="text" class="form-control rounded-0" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                        <button class="btn btn-danger rounded-0 fs-2  p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                    </div>
                </div>
                <div class="col-lg-11 col-md-12 col-11 mx-auto text-center d-lg-none d-block">
                    <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                    <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
                </div>
            </div>
        </div>
        <div class="mx-auto col-md-6 col-12 position-relative cum-cluster-tv">
            <img src="<?php echo e(asset('assets/images/tv.png')); ?>">
            <div class="col-md-9 col-9 cum-cluster-video d-flex justify-content-around flex-wrap border border-dark">
                <?php $__currentLoopData = $cum_cluster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cum_vid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $type = explode(".", $cum_vid->video_url);
                    $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                    $folder = isset($cum_vid->video_url) ? explode("/", $cum_vid->video_url) : "";
                    if(isset($folder[count($folder)-2])){
                    $folder = $folder[count($folder)-2];
                    }
                ?>
                <div class="col-md-4 col-sm-4 col-4 border border-dark ">
                    <a href="http://video">
                        <video class="w-100 h-100" autoplay="" playsinline="" muted="" loop="">
                            <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/mp4">
                        </video>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>

    <div class="section-container d-flex justify-content-between text-white flex-wrap">
        <div class="col-12 big-logo text-center">
            <img src="<?php echo e(asset('assets/images/logo.webp')); ?>" alt="">
        </div>
        <div class="text-white col-12 text-center my-3">
            <h1>ONE DAY FREE TRIAL</h1>
            <div class="col-md-6 d-lg-block d-none mx-auto">
                <div class="input-group mt-3 mx-auto">
                    <input type="text" class="form-control rounded-0" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                    <button class="btn btn-danger rounded-0 fs-2  p-2" onclick="checkOutStepOne(this.previousElementSibling.value)" type="button">Instant Access ></button>
                </div>
            </div>

            <div class="col-lg-11 col-md-12 col-11 mx-auto text-center d-lg-none d-block">
                <input type="email" class="form-control w-100  py-3 px-2 rounded-0 mb-2" placeholder="Email Address" onchange="this.nextElementSibling.click()">
                <button class="btn btn-danger rounded-0 fs-2 p-2" type="button" onclick="checkOutStepOne(this.previousElementSibling.value)">Instant Access ></button>
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
                    <img src="<?php echo e(asset('assets/testomonials/test_1.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_2.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_3.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_4.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_5.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_6.webp')); ?>">
                    <div class="text-center start-0 p-2 position-absolute bottom-0 w-100 testomonial-text">
                        Message of client
                    </div>
                </div>
                <div class="border border-2 border-danger p-2 overflow-hidden">
                    <img src="<?php echo e(asset('assets/testomonials/test_7.webp')); ?>">
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
    <div class="text-center bg-transparent py-3 text-white border border-2 border-bottom-0 border-end-0 border-start-0 border-danger">
        2023 copyrights@hermoinexxx.com</div>
</footer>

<!-- FOOTER SECTION ENDS -->

<!--Price Modal -->
<div id="custom-model">
    <div class="border border-2 border-white rounded-0 p-4 text-white model-class">
        <div class="d-flex justify-content-between w-100 mb-2">
            <span class="fs-2">What are you waiting for ? </span><span class="text-white negative-margin fs-2 close-btn" role="button">&#10006;</span>
        </div>
        <?php $__currentLoopData = $purchase_offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border border-danger border-2 my-2 p-2 d-flex align-items-center justify-content-around cursor-pointer position-relative">
            <div class="radio-btn me-1">
                <input class="form-check-input" type="radio" onchange="checkOutStepOne('', '<?php echo e($offer->subscription_id); ?>')" name="flexRadioDefault" id="flexRadioDefault<?php echo e($offer->subscription_id); ?>">
            </div>
            <div class="content me-1 cursor-pointer">
                <label for="flexRadioDefault<?php echo e($offer->subscription_id); ?>" class="cursor-pointer">
                    <?php echo e($offer->name); ?> - <?php echo e($offer->duration); ?> Days <br>
                    Billed in <?php echo e($offer->duration/30); ?> month payments of <del>$<?php echo e($offer->real_amount); ?></del> <span class="fw-bold">$<?php echo e($offer->discounted_amount); ?></span>
                </label>
            </div>
            <div class="offered-amount cursor-pointer">
                <label for="flexRadioDefault<?php echo e($offer->subscription_id); ?>" class="cursor-pointer fs-3">
                    $19<span class="fs-5"><sup>.98</sup><sub>/month</sub></span>
                </label>
                <div class="offer-div px-2 shadow position-absolute text-center">
                    <?php echo e($offer->percentage_off); ?>% OFF
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="checkOutStepOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="checkOutStepOneLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form method="post" id="step-one-process">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center fs-3 border-bottom border-2 mb-2">
                        <div>Hermoine<span class="text-uppercase fw-bold text-white shadow p-1 rounded-2 bg-d315c8">XXX</span></div>
                        <div class="fw-normal text-danger small mt-2">PRESENTS</div>
                        <div class="mb-2"><img src="<?php echo e(asset('assets/images/logo.webp')); ?>" alt="" style="height: 65px;"></div>
                    </div>

                    <div class="pricing">
                        <div class="title-section">
                            <h3 class="modal-title">Step <span class="in-step">1</span> of 2</h3>
                            <p>Please select a membership then provide your email and desired password for your account.</p>
                        </div>
                        <div class="forms-field" id="forms-field">
                            <div class="mb-3">
                                <label for="Membership" class="form-label">Membership</label>
                                <select name="subscription_id" class="form-select" id="Membership" required>
                                    <?php $__empty_1 = true; $__currentLoopData = $purchase_offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($offer->subscription_id); ?>" data-amount="<?php echo e($offer->discounted_amount); ?>"><?php echo e($offer->name." - ".$offer->percentage_off."% OFF - ".$offer->discounted_amount."$ for ".$offer->duration." Days"); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option value="">No Offer Available</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="email-name" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email-name" name="email" autocomplete="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="password-example" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password-example" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-outline-danger col-10 mx-auto rounded-0">Next ></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    var is_shown = true;
    $(window).scroll(function() {

        if ($(window).scrollTop() > 100 && is_shown) {
            $("#custom-model").fadeIn("slow");
            is_shown = false;
            console.log("jhsgdjfgs");
        }

    });

    $(document).ready(function() {
        $(".close-btn").click(function(e) {
            e.preventDefault();
            $("#custom-model").fadeOut("slow");
        });

        $('.carousel-main').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            margin: 10,
            nav: false,
            dots: false,
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                }
            }
        })
    });

    $(document).ready(function() {
        $(".radio-btn input").change(function(e) {
            e.preventDefault();
            $(".background-change-click").removeClass("background-change-click");

            if ($(this).is(":checked")) {
                $(this).parent().parent().addClass("background-change-click");
            }

            if ($(".background-change-click").length) {
                $(".next-btn").removeAttr("disabled");
            } else {
                $(".next-btn").attr("disabled", "disabled");
            }
        });
    });

    $("body").on("submit", "#step-one-process", function (e) { 
        e.preventDefault();
        var form = $(this)[0];

        var that = $(this).find("input, select");
        if($(".in-step").html() == 1){
            var arr_str = '{';
            var subscription_amount = $(this).find("select option:selected").data("amount");

            that.map(function(index, elem){
                if(that.length-1 == index){
                    return arr_str += '"'+$(elem).attr("name")+'":"'+$(elem).val()+'"';
                }
                return arr_str += '"'+$(elem).attr("name")+'":"'+$(elem).val()+'", ';
            })

            arr_str += '}';

            console.log(arr_str);

            let payment_detail =  
                    `<div class='form-row row mb-2'>
                        <input type="hidden" name="user_info" value='${arr_str}'>
                        <div class='col-xs-12 form-group col-md-8'>
                            <label class='control-label'>Name on Card</label>
                            <input name="card_name" class='form-control border-danger rounded-0 text-dark bg-transparent' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 form-group col-md-4'>
                            <label class='control-label'>Amount</label>
                            <div class="input-group disable-after">
                                <span class="input-group-text border-danger bg-danger rounded-0 z-index-9 text-white fw-bold" id="basic-addon2">$</span>
                                <input name="amount" type="text" class="form-control border-danger rounded-0 text-dark bg-transparent disabled-amount" value="${subscription_amount}">
                            </div>
                        </div>
                    </div>

                    <div class='form-row row  mb-2'>
                        <div class='col-xs-12 form-group'>
                            <label class='control-label'>Card Number</label> <input autocomplete='off' name="number" class='form-control border-danger rounded-0 text-dark bg-transparent card-number' size='20' type='text'>
                        </div>
                    </div>

                    <div class='form-row row  mb-2'>
                        <div class='col-xs-12 col-md-4 form-group'>
                            <label class='control-label'>CVC</label>
                            <input autocomplete='off' name="cvc" class='form-control border-danger rounded-0 text-dark bg-transparent' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group'>
                            <label class='control-label'>Expiration Month</label>
                            <input name="exp_month" class='form-control border-danger rounded-0 text-dark bg-transparent card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group'>
                            <label class='control-label'>Expiration Year</label>
                            <input name="exp_year" class='form-control border-danger rounded-0 text-dark bg-transparent card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row row  mb-2'>
                        <div class='col-xs-12 form-group'>
                            <label class='control-label'>Description</label> <input autocomplete='off' name="description" class='form-control border-danger rounded-0 text-dark bg-transparent' type='text'>
                        </div>
                    </div>`;
            $("#forms-field").html(payment_detail);
        }


        if($(".in-step").html() == 2){
            // console.log(that);
            // const arr = [];
            // that.map(function(index, elem){
            //     arr.push(`{"${$(elem).attr("name")}":"${$(elem).val()}"}`);
            //     return `{"${$(elem).attr("name")}":"${$(elem).val()}"}`;
            // })
            // console.log(arr);

            var formData = new FormData(form);
            $(".payment-error").remove();
            $.ajax({
                type: "POST",
                url: "<?php echo e(route('stripe.post')); ?>",
                data: formData,
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    tata.success("Success!", "Payment completed successfullly!")
                    window.location.href = "<?php echo e(route('user-videos')); ?>"
                },
                error: function(err, xhr){
                    console.log(err);
                    if(err.responseJSON.message === undefined){
                        tata.error("Error!", err.responseJSON);
                    }else{
                        tata.error("Error!", err.responseJSON.message);
                    }
                    
                    var errors = err.responseJSON.errors;

                    $.each(errors, function (indexInArray, valueOfElement) { 
                        console.log(indexInArray);     
                        $("[name='"+indexInArray+"']").after(`<div class="small text-danger payment-error">${valueOfElement[0]}</div>`);
                    });
                }
            });

        }

        $(".in-step").html(2);
    });
    
    function checkOutStepOne(email = '', subscription_id = '') {
        if (email) {
            $("#email-name").val(email);
        }
        if (subscription_id) {
            $("#Membership").find("option[value='" + subscription_id + "']").attr("selected", "selected");
        }
        $("#checkOutStepOne").modal('toggle');
    }
</script>
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/welcome.blade.php ENDPATH**/ ?>