<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent("title"); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset("owlcarousel/owl.carousel.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("owlcarousel/owl.theme.default.min.css")); ?>">
    <?php echo $__env->yieldContent("css"); ?>
</head>
<body class="position-relative">
    
    <?php echo $__env->yieldContent('content'); ?>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</body>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset("js/jquery-3.6.3.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/tata.js')); ?>"></script>

    <script src="<?php echo e(asset("owlcarousel/owl.carousel.min.js")); ?>"></script>

    <?php echo $__env->yieldContent("js"); ?>
</html>
<?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/layouts/app.blade.php ENDPATH**/ ?>