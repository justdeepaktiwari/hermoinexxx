

<?php $__env->startSection('title', 'Edit Product'); ?>

<?php $__env->startSection('action-btn'); ?>
<div class="pull-right">
    <a class="btn btn-outline-primary rounded-0" href="<?php echo e(route('products.index')); ?>"> Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>


<form action="<?php echo e(route('products.update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Name" value="<?php echo e($product->product_name); ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Detail</strong>
                <textarea class="form-control" name="product_detail" placeholder="Detail" rows="1"><?php echo e($product->product_detail); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Available Size</strong>
                <textarea class="form-control" name="product_sizes" placeholder="S, M, L, XL, XXL" rows="1"><?php echo e($product->product_sizes); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Available Color</strong>
                <textarea class="form-control" name="product_colors" placeholder="Black, Blue, Red" rows="1"><?php echo e($product->product_colors); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Upload min 3 Images</strong>
                <input type="file" class="form-control" accept="image/*" name="product_image[]" multiple>
            </div>

            <div class="my-2">
                <?php
                    $list_img = json_decode($product->product_image);
                ?>

                <?php $__currentLoopData = $list_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_img_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(asset('uploads/products/'.$list_img_value)); ?>" target="_blank" class="d-block"><?php echo e($list_img_value); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Real Amount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_real_amount" value="<?php echo e($product->product_real_amount); ?>">
                    <span class="input-group-text" id="basic-addon2">$</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Percentage Discount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_percentage_discount" value="<?php echo e($product->product_percentage_discount); ?>">
                    <span class="input-group-text" id="basic-addon2">%</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mb-2">
            <div class="form-group">
                <strong>Product Discounted Amount</strong>

                <div class="input-group">
                    <input type="number" class="form-control" name="product_discounted_amount" value="<?php echo e($product->product_discounted_amount); ?>">
                    <span class="input-group-text" id="basic-addon2">$</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 text-start">
            <strong class="invisible">Product Discounted Amount</strong>
            <button type="submit" class="btn btn-primary rounded-0 w-100">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>