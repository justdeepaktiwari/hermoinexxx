<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset("owlcarousel/owl.carousel.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("owlcarousel/owl.theme.default.min.css")); ?>">
    <?php echo $__env->yieldContent("css"); ?>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
</head>

<body>

    <?php echo $__env->yieldContent("content"); ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="<?php echo e(asset('js/jquery-3.6.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset("owlcarousel/owl.carousel.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/tata.js')); ?>"></script>
    <?php echo $__env->yieldContent("js"); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/products/app-product.blade.php ENDPATH**/ ?>