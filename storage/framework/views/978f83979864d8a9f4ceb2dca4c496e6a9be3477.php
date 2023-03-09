

<?php $__env->startSection("css"); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid h-100vh showcase">
    <nav class="showcase-top d-flex justify-content-between align-items-center">
        <img id="logo" src="<?php echo e(asset('assets/images/logo.webp')); ?>">

        <div class="right-side-button pe-2">
            <button class="btn btn-outline-light rounded-0">Instant Access</button>

            <a class="btn btn-danger rounded-0" href="<?php echo e(route('login')); ?>">Sign In</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-12 shadow-sm border-dark text-white overflow-hidden login-section">
            <div style="height: 20px;"></div>
            <div class="fs-3 fw-700 mb-2 text-center">Sign In</div>
            <div class="col-md-10 col-11 mx-auto">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name</label>
                        <input id="name" type="text" class="form-control  rounded-0 text-white border-danger bg-transparent <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" required autocomplete="off" autofocus>

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="col-form-label"><?php echo e(__('Email Address')); ?></label>
                        <input id="email" type="email" class="form-control  rounded-0 text-white border-danger bg-transparent <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" required autocomplete="off" autofocus>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="col-form-label"><?php echo e(__('Password')); ?></label>
                        <input id="password" type="password" class="form-control  rounded-0 text-white border-danger bg-transparent <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="off">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Confirm Password</label>
                        <input id="password" type="password" class="form-control  rounded-0 text-white border-danger bg-transparent" name="password_confirmation" required autocomplete="off">
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input m-0 bg-transparent border-danger rounded-0 p-2" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                        </div>
                    </div>

                    <div class="mb-0  text-center">
                        <button type="submit" class="btn btn-danger w-100 rounded-0">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </form>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 20px;"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/auth/register.blade.php ENDPATH**/ ?>