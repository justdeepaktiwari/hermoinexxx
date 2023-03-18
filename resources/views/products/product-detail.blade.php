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

    select option {
        margin: 40px;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }
</style>
@endsection

@section('content')
<section style="background-color: #000; min-height: 100vh;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card bg-black">
                    <div class="card-body p-4 text-white">

                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="{{ route('list.product') }}" class="text-white"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr> 
                                <div class=" _boxzoom">
                                    <div class="zoom-thumb">
                                        <ul class="piclist">
                                            @php
                                            $product_image = json_decode($detail_product->product_image);
                                            @endphp
                                            @foreach($product_image as $image)
                                            <li>
                                                <img src="{{ asset('uploads/products/'.$image) }}" alt="">
                                            </li>
                                            @endforeach
                                            <li>
                                                <img src="{{ asset('assets/images/info-1.png') }}" alt="">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/info-2.png') }}" alt="">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/info-3.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="_product-images  position-relative">
                                        <div class="picZoomer">
                                            <img class="my_img" src="{{ asset('uploads/products/'.$product_image[0]) }}" alt="">
                                        </div>

                                        <div class="heart-icon position-absolute top-0 end-0 text-danger px-2 py-2" style="z-index: 99999; cursor: pointer !important; background-color: rgba(0, 0, 0, .5);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="w-100 d-flex flex-column gap-2">
                                    <div class="">
                                        <p class="text-danger m-0">Only Few Left</p>
                                        <h3 class="m-0"><del class="text-danger">$15,25632</del> $15,256</h3>
                                    </div>
                                    <p style="line-height: 1.2rem">
                                        Used High Quality Cotton Pannies. We Used Cotton To Hold Hermoine's
                                        Sweet Residue
                                    </p>
                                    <form action="" class="d-flex flex-column gap-1">
                                        <div class="d-flex flex-column mb-2">
                                            <label for="size">Size<span class="fw-bold text-danger fs-5">*</span></label>
                                            <select id="size" class="p-3 bg-transparent text-white" style="box-shadow: 0 1px 6px 0 rgba(34, 34, 34, 0.15)">
                                                <option>Select an option</option>
                                                <option>S US women's letter</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-column mb-2">
                                            <label for="color">Color<span class="fw-bold text-danger fs-5">*</span></label>
                                            <select id="color" class="p-3 bg-transparent text-white" style="box-shadow: 0 1px 6px 0 rgba(34, 34, 34, 0.15)">
                                                <option>Red</option>
                                                <option>White</option>
                                                <option>Black</option>
                                            </select>
                                        </div>

                                        <div class="d-flex flex-column mb-2">
                                            <label class="my-auto" for="personalization">Quantity</label>
                                            <input type="number" min="1" class="p-2 bg-transparent text-white" placeholder="1" style="box-shadow: 0 1px 6px 0 rgba(34, 34, 34, 0.15)" />
                                        </div>

                                        <div class="d-flex flex-column mb-2">
                                            <label for="personalization">Add your Personalization</label>
                                            <textarea rows="3" class="p-3  bg-transparent text-white"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-danger shadow-0">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <div class="review-sec col-md-7 me-auto">
                            <div class="d-flex flex-column gap-3">
                                <h3>11762 reviews</h3>
                                <div class="d-flex flex-column gap-4">
                                    <div class="border p-2 border-danger">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="50px" class="rounded rounded-circle" />
                                            <p class="m-0">riteshmaid85@gmail.com</p>
                                        </div>
                                        <p class="m-0 text-secondary">14 March 2019</p>
                                        <p class="m-0 pe-3">
                                            Great product! Fast turn around time, great communication and
                                            lightning fast shipping! These are grat and made our teacher
                                            cry. Thanks ladies!
                                        </p>
                                        <div class="d-flex gap-1">⭐⭐⭐⭐⭐</div>
                                        <div>
                                            Purchased Item :
                                            <a href="#" class="text-primary text-decoration-underline">
                                                Custom Socks for Women, Add Your Own Custom Design or Te</a>
                                        </div>
                                    </div>
                                    <div class="border p-2 border-danger">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="50px" class="rounded rounded-circle" />
                                            <p class="m-0">riteshmaid85@gmail.com</p>
                                        </div>
                                        <p class="m-0 text-secondary">14 March 2019</p>
                                        <p class="m-0 pe-3">
                                            Great product! Fast turn around time, great communication and
                                            lightning fast shipping! These are grat and made our teacher
                                            cry. Thanks ladies!
                                        </p>
                                        <div class="d-flex gap-1">⭐⭐⭐⭐⭐</div>
                                        <div>
                                            Purchased Item :
                                            <a href="#" class="text-primary text-decoration-underline">
                                                Custom Socks for Women, Add Your Own Custom Design or Te</a>
                                        </div>
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
            picHeight: 100 * '{{$number_pic}}' + 300,
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