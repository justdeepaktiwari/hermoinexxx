@extends('products.app-product')

@section('title', 'Hermoinexxx - Product')
@section('css')
    <style>
        .picZoomer {
            position: relative;
        }

        .picZoomer-pic-wp {
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .picZoomer-pic-wp:hover .picZoomer-cursor {
            display: block;
        }

        .picZoomer-zoom-pic {
            position: absolute;
            top: 0;
            left: 0;
        }

        .picZoomer-zoom-wp {
            display: none;
            position: absolute;
            z-index: 999;
            overflow: hidden;
            border: 1px solid #eee;
            height: 460px;
            margin-top: -19px;
        }

        .picZoomer-cursor {
            display: none;
            cursor: crosshair;
            width: 100px;
            height: 100px;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 50%;
            border: 1px solid #eee;
            background-color: rgba(0, 0, 0, .1);
        }

        .picZoomCursor-ico {
            width: 23px;
            height: 23px;
            position: absolute;
            top: 40px;
            left: 40px;
            background: url(images/zoom-ico.png) left top no-repeat;
        }

        .my_img {
            vertical-align: middle;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            height: 100%;
        }

        .piclist li {
            display: inline-block;
            width: 90px;
            height: 100px;
            border: 1px solid #eee;
        }

        /* custom style */
        .picZoomer-pic-wp,
        .picZoomer-zoom-wp {
            border: 1px solid #eee;
        }



        .section-bg {
            background-color: #fff1e0;
        }

        section {
            padding: 60px 0;
        }

        .row-sm .col-md-6 {
            padding-left: 5px;
            padding-right: 5px;
        }

        /*===pic-Zoom===*/
        ._boxzoom .zoom-thumb {
            width: 90px;
            display: inline-block;
            vertical-align: top;
            margin-top: 0px;
        }

        ._boxzoom .zoom-thumb ul.piclist {
            padding-left: 0px;
            top: 0px;
        }

        ._boxzoom ._product-images {
            width: 80%;
            display: inline-block;
        }

        ._boxzoom ._product-images .picZoomer {
            width: 100%;
        }

        ._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
            left: 0px;
        }

        ._boxzoom ._product-images .picZoomer img.my_img {
            width: 100%;
        }

        .piclist li img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content') 
    <section class="h-100 h-custom" style="background-color: #000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card bg-black">
                        <div class="card-body p-4 text-white">

                            <div class="row">

                                <div class="col-lg-7">
                                    <h5 class="mb-3"><a href="{{ route('list.product') }}" class="text-white"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Product Detail</p>
                                        </div>
                                    </div>
                                    <div class=" _boxzoom">
                                        <div class="zoom-thumb">
                                            <ul class="piclist">
                                                <li><img src="https://s.fotorama.io/1.jpg" alt=""></li>
                                                <li><img src="https://s.fotorama.io/2.jpg" alt=""></li>
                                                <li><img src="https://s.fotorama.io/3.jpg" alt=""></li>
                                                <li><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/"
                                                        alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="_product-images">
                                            <div class="picZoomer">
                                                <img class="my_img" src="https://s.fotorama.io/1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">

                                    <div class="card bg-dark text-white rounded-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">Card details</h5>
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                    class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                            </div>

                                            <p class="small mb-2">Card type</p>
                                            <a href="#!" type="submit" class="text-white"><i
                                                    class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i
                                                    class="fab fa-cc-visa fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i
                                                    class="fab fa-cc-amex fa-2x me-2"></i></a>
                                            <a href="#!" type="submit" class="text-white"><i
                                                    class="fab fa-cc-paypal fa-2x"></i></a>

                                            <form class="mt-4">
                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeName"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="Cardholder's Name" />
                                                    <label class="form-label" for="typeName">Cardholder's Name</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeText"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                    <label class="form-label" for="typeText">Card Number</label>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="typeExp"
                                                                class="form-control form-control-lg" placeholder="MM/YYYY"
                                                                size="7" id="exp" minlength="7"
                                                                maxlength="7" />
                                                            <label class="form-label" for="typeExp">Expiration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="password" id="typeText"
                                                                class="form-control form-control-lg"
                                                                placeholder="&#9679;&#9679;&#9679;" size="1"
                                                                minlength="3" maxlength="3" />
                                                            <label class="form-label" for="typeText">Cvv</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">$4798.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">$20.00</p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total(Incl. taxes)</p>
                                                <p class="mb-2">$4818.00</p>
                                            </div>

                                            <button type="button" class="btn btn-danger shadow-0 btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>$4818.00</span>
                                                    <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script>
        (function($) {
            $.fn.picZoomer = function(options) {
                var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                    $this = this,
                    $picBD = $('<div class="picZoomer-pic-wp"></div>').css({
                        'width': opts.picWidth + 'px',
                        'height': opts.picHeight + 'px'
                    }).appendTo($this),
                    $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
                    $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>')
                    .appendTo($picBD),
                    cursorSizeHalf = {
                        w: $cursor.width() / 2,
                        h: $cursor.height() / 2
                    },
                    $zoomWP = $(
                        '<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>')
                    .appendTo($this),
                    $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
                    picBDOffset = {
                        x: $picBD.offset().left,
                        y: $picBD.offset().top
                    };


                opts.zoomWidth = opts.zoomWidth || opts.picWidth;
                opts.zoomHeight = opts.zoomHeight || opts.picHeight;
                var zoomWPSizeHalf = {
                    w: opts.zoomWidth / 2,
                    h: opts.zoomHeight / 2
                };


                $zoomWP.css({
                    'width': opts.zoomWidth + 'px',
                    'height': opts.zoomHeight + 'px'
                });
                $zoomWP.css(opts.zoomerPosition || {
                    top: 0,
                    left: opts.picWidth + 30 + 'px'
                });

                $zoomPic.css({
                    'width': opts.picWidth * opts.scale + 'px',
                    'height': opts.picHeight * opts.scale + 'px'
                });

                $picBD.on('mouseenter', function(event) {
                    $cursor.show();
                    $zoomWP.show();
                    $zoomPic.attr('src', $pic.attr('src'))
                }).on('mouseleave', function(event) {
                    $cursor.hide();
                    $zoomWP.hide();
                }).on('mousemove', function(event) {
                    var x = event.pageX - picBDOffset.x,
                        y = event.pageY - picBDOffset.y;

                    $cursor.css({
                        'left': x - cursorSizeHalf.w + 'px',
                        'top': y - cursorSizeHalf.h + 'px'
                    });
                    $zoomPic.css({
                        'left': -(x * opts.scale - zoomWPSizeHalf.w) + 'px',
                        'top': -(y * opts.scale - zoomWPSizeHalf.h) + 'px'
                    });

                });
                return $this;

            };
            $.fn.picZoomer.defaults = {
                picHeight: 400,
                scale: 2.5,
                zoomerPosition: {
                    top: screen.width > 720 ? '0' : '100%',
                    left: screen.width > 720 ? '100%' : '0%'
                },

                zoomWidth: 300,
                zoomHeight: 360
            };
        })(jQuery);



        $(document).ready(function() {
            $('.picZoomer').picZoomer();
            $('.piclist li').on('click', function(event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });
        });
    </script>
@endsection
