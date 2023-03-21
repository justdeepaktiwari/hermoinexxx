

<?php $__env->startSection('title', 'Hermoinexxx - Product List'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/user-video.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('products.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section style="background-color: #000;">
    <div class="text-center container py-3">
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                    $random_img = json_decode($item->product_image);
                    $random_number = floor(rand(0, (count($random_img)-1)));
                ?>
                <div class="col-sm-3">
                    <div class="card bg-dark text-white">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="<?php echo e(asset('uploads/products/'.$random_img[$random_number])); ?>" class="w-100" style="height: 170px;" />
                            <a href="<?php echo e(route('list.product.detail', 3)); ?>">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                        <h5 class="fs-6"><span class="rounded-0 badge bg-warning ms-2">5 &#9733;</span>
                                        <?php if($item->product_percentage_discount): ?>
                                            <span class="rounded-0 badge bg-danger ms-2">-<?php echo e($item->product_percentage_discount); ?>%</span>
                                        <?php endif; ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body ">
                            <a href="" class="text-start text-white">
                                <h5 class="card-title fs-6"><?php echo e($item->product_name); ?></h5>
                            </a>
                            <p class="mb-1 text-start"><span class="text-info">Amt: </span> <s class="text-danger"><?php echo e(priceFormate($item->product_real_amount)); ?></s><strong class="ms-2 text-success"><?php echo e(priceFormate($item->product_discounted_amount)); ?></strong></p>
                            <a href="" class="text-start text-white small">
                                <p class="mb-2"><span class="text-danger">Detail: </span><?php echo e(substr($item->product_detail, 0, 80)); ?>..</p>
                            </a>
                            <div class="btn-section d-flex justify-content-between mb-2">
                                <div class="info-section">
                                    <select name="" class="form-control-sm rounded-0 me-2"> 
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                    <select name="" class="form-control-sm rounded-0"> 
                                        <option value="">Red</option>
                                        <option value="">Blue</option>
                                        <option value="">Green</option>
                                    </select>
                                </div>
                                <a 
                                    data-addCartType = "product" 
                                    data-addCartUrl = "<?php echo e(route('add-to-cart')); ?>" 
                                    data-itemId="<?php echo e($item->id); ?>"
                                    class="btn btn-danger rounded-0 shadow-0 btn-sm addToCart"
                                >Add Cart</a>
                            </div>
                            <a href="<?php echo e(route('list.product.detail', $item->id)); ?>" class="btn btn-success rounded-0 shadow-0 btn-sm w-100">View Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="row">
                    <p style="color: #fff;">Not product found</p>
                </div>
            <?php endif; ?>
        </div>
        <?php echo $products->links(); ?>

    </div>
</section>
<?php echo $__env->make('products.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
<script>
    $('.carousel-product').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: false,
        responsiveClass: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            }
        }
    });
</script>
<script src = "<?php echo e(asset("js/add-cart.js")); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.app-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/products/list.blade.php ENDPATH**/ ?>