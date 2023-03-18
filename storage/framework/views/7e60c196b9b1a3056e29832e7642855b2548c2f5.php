

<?php $__env->startSection('title', "Products"); ?>

<?php $__env->startSection('action-btn'); ?>
<div class="pull-right">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-create')): ?>
    <a class="btn btn-outline-success rounded-0" href="<?php echo e(route('products.create')); ?>"> Create New Product</a>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Real Amount</th>
                <th>Percentage Discount</th>
                <th>Discounted Amount</th>
                <th>Image</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $product_name = explode("/", $product->product_image);
            if(isset($product_name[count($product_name)-1])){
                $product_name = $product_name[count($product_name)-1];
            }else{
                $product_name = "NA";
            }
            $images = json_decode($product->product_image);
            // dd($images);
            ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td class="align-middle"><?php echo e($product->product_name); ?></td>
                <td class="align-middle"><?php echo e($product->product_real_amount); ?></td>
                <td class="align-middle"><?php echo e($product->product_percentage_discount); ?></td>
                <td class="align-middle"><?php echo e($product->product_discounted_amount); ?></td>
                <td  class="text-break">
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(asset('uploads/products/'.$image)); ?>" target="_blank" class="text-decoration-none align-middle d-block"><?php echo e($image); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td  class="align-middle"><?php echo e($product->product_detail); ?></td>
                <td>
                    <span class="edit text-warning mx-1" role="button" onclick="window.location.href = `<?php echo e(route('products.edit', $product->id)); ?>`">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </span>
                    <form action="<?php echo e(route('products.destroy', $product->id)); ?>" id="<?php echo e(md5($product->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                    </form>
                    <span class="delete text-danger mx-1" role="button" onclick="document.getElementById('<?php echo e(md5($product->id)); ?>').submit()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                    </span>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>

<?php echo $products->links(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
<?php if($message = Session::get('success')): ?>
<script>
    tata.success("Success!", '<?php echo e($message); ?>')
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/admin/products/index.blade.php ENDPATH**/ ?>