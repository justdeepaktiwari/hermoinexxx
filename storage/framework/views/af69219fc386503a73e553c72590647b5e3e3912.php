<div class="text-white navbar-section border-bottom border-dark position-sticky top-0 d-flex flex-wrap align-items-center justify-lg-content-start justify-md-content-start justify-content-center py-2" style="background: linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('<?php echo e(asset("assets/images/eyes.webp")); ?>') no-repeat center center/cover;">

<div class="toogle-btn p-2">
    <a href="<?php echo e(route('user-videos')); ?>" class="text-decoration-none text-white">
            <img src="<?php echo e(asset('assets/images/logo.webp')); ?>" alt="" id="logo">
    </a>
</div>
<div class="search-bar d-flex align-items-center flex-wrap gap-2 flex-grow-1 justify-content-center">

    <div class="col-11 col-lg-5 col-md-6">
        <form action="<?php echo e(route('user-videos.search')); ?>" method="get">
            <div class="input-group postion-relative">
                <input type="text" name="search" class="form-control rounded-0 on-focus-show" id="on-focus-show" placeholder="Search Here" aria-describedby="button-addon2" value="<?php echo e(isset($search) ? $search : ''); ?>" autocomplete="off">
                <button class="btn btn-danger rounded-0" type="submit" id="button-addon2">Search</button>
                
            </div>
        </form>
    </div>

    <div class="dropdown">
        <button class="btn btn-dark rounded-0 d-flex align-items-center gap-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-sharp fa-solid fa-mars-and-venus" style="color: white; font-size: 17px; margin-right: 5px;"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item py-2" href="#"><i class="fa-sharp fa-solid fa-mars-and-venus me-3"></i> Straight</a></li>
            <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-mars-double me-3"></i> Gay</a>
            </li>
            <li><a class="dropdown-item py-2" href="#"><i class="fa-sharp fa-solid fa-transgender me-3"></i>
                    Transgender</a></li>
        </ul>
    </div>
</div>
<div>
    <?php if(auth()->check()): ?>
        <div class="mx-2 fs-6 rounded-0 px-3 btn-sm btn-danger btn shadow-0" onclick="document.getElementById('logout-form').submit()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
            LogOut
        </div>
        <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    <?php else: ?>
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn" onclick="window.location.href = `<?php echo e(route('login')); ?>`">LogIn</div>
        <div class="mx-1 fs-6 rounded-0 px-3 btn-sm btn-dark btn" onclick="window.location.href = `<?php echo e(route('register')); ?>`">SignUp</div>
    <?php endif; ?>
</div>
</div><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/products/partials/header.blade.php ENDPATH**/ ?>