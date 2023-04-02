

<?php $__env->startSection("title", "Hermoinexxx - videos"); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/user-video.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make("loader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make("videos.partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make("videos.partials.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="text-white">
    <main class="content-section px-lg-2 px-sm-0 px-md-2">
        <div class="user-tab border-bottom border-dark text-uppercase d-flex flex-wrap">
            <div class="border-end  border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `<?php echo e(route('models')); ?>`">
                Webcam
            </div>
            <div class=" border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `<?php echo e(route('list.product')); ?>`">
                Shop
            </div>
            <div class="border-start  border-end  border-dark col-4 py-2 text-center fs-6" role="button" onclick="window.location.href = `<?php echo e(route('user-photos')); ?>`">
                PICTURE GALLERY
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto my-3 responsive align-items-center">
            <div class="col-md-8 col-12 px-2">
                <div class="row mb-2 px-0 mx-0">
                    <div class="fs-4 fw-bold  my-2">Premium Videos</div>
                        <?php $__currentLoopData = $premium_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="<?php if(auth()->check()): ?> <?php if(auth()->user()->subscription_id == 1): ?> <?php echo e(route('user-videos.video-detail', $video->id)); ?> <?php endif; ?> <?php else: ?> <?php echo e(route('login')); ?> <?php endif; ?>" role="button">
                                <div class="position-relative" style="height: 160px;">
                                    <?php
                                    $type = explode(".", $video->video_url);
                                    $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                                    $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                                    if(isset($folder[count($folder)-2])){
                                    $folder = $folder[count($folder)-2];
                                    }
                                    ?>

                                    <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                        <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/<?php echo e($type); ?>">
                                    </video>
                                    <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                        <?php echo e($video->video_duration ?? "4:19"); ?>

                                    </span>
                                    <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-2"><?php echo e($video->video_title); ?></div>
                                <div class="d-flex justify-content-between">
                                    <span class="small text-muted"><?php if($video->video_views_count > 1000): ?> <?php echo e(number_format($video->video_views_count/1000, 1)); ?>k <?php endif; ?> views</span><span class="mt-1 small text-muted">77%</span>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if(count($watched_later)): ?>
                <div class="row mb-2 px-0 mx-0">
                    <div class="fs-4 fw-bold  my-2">Videos Being Watched</div>
                    <?php $__currentLoopData = $watched_later; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="<?php echo e(route('user-videos.video-detail', $video->id)); ?>" role="button">
                        <div class="position-relative" style="height: 160px;">
                            <?php
                            $type = explode(".", $video->video_url);
                            $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                            if(isset($folder[count($folder)-2])){
                            $folder = $folder[count($folder)-2];
                            }
                            ?>

                            <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                                <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/<?php echo e($type); ?>">
                            </video>
                            <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                                <?php echo e($video->video_duration ?? "4:19"); ?>

                            </span>
                            <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-2"><?php echo e($video->video_title); ?></div>
                        <div class="d-flex justify-content-between">
                            <span class="small text-muted"><?php if($video->video_views_count > 1000): ?> <?php echo e(number_format($video->video_views_count/1000, 1)); ?>k <?php endif; ?> views</span><span class="mt-1 small text-muted">77%</span>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-12 p-4 bg-dark my-auto mx-auto" role="button" onclick="window.location.href = `<?php echo e($ads_video_list->ads_redirect_url); ?>`">
                <div class="p-3 overflow-hidden" style="max-width: 400px;">
                    <img src="<?php echo e(asset('uploads/ads/'.$ads_video_list->ads_gif)); ?>" class="img-fluid" alt="<?php echo e($ads_video_list->ads_gif); ?>">
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-1">
            <div class="col-12 row px-2 mx-2">
                <div class="fs-4 fw-bold my-2">Recommended</div>
                <?php $__currentLoopData = $recomended_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="<?php echo e(route('user-videos.video-detail', $video->id)); ?>" role="button">
                    <div class="position-relative" style="height: 160px;">
                        <?php
                        $type = explode(".", $video->video_url);
                        $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                        $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                        if(isset($folder[count($folder)-2])){
                        $folder = $folder[count($folder)-2];
                        }
                        ?>

                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/<?php echo e($type); ?>">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            <?php echo e($video->video_duration ?? "4:19"); ?>

                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2"><?php echo e($video->video_title); ?></div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted"><?php if($video->video_views_count > 1000): ?> <?php echo e(number_format($video->video_views_count/1000, 1)); ?>k <?php endif; ?> views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="d-flex flex-wrap w-md-responsive p-2 ms-auto mt-3">
            <div class="col-12 row px-2 mx-2">
                <div class="fs-4 fw-bold d-flex justify-content-between my-2">
                    <span>New Videos</span>
                </div>
                <?php $__currentLoopData = $new_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="<?php echo e(route('user-videos.video-detail', $video->id)); ?>" role="button">
                    <div class="position-relative" style="height: 160px;">
                        <?php
                            $type = explode(".", $video->video_url);
                            $type = isset($type[count($type)-1]) ? $type[count($type)-1] : "mp4";

                            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";
                            if(isset($folder[count($folder)-2])){
                                $folder = $folder[count($folder)-2];
                            }
                        ?>

                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="<?php echo e(asset('uploads/'.$folder.'/poster.'.$type)); ?>" type="video/<?php echo e($type); ?>">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">
                            <?php echo e($video->video_duration ?? "4:19"); ?>

                        </span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2"><?php echo e($video->video_title); ?></div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted"><?php if($video->video_views_count > 1000): ?> <?php echo e(number_format($video->video_views_count/1000, 1)); ?>k <?php endif; ?> views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="pagination-section py-3 text-center col-11 mx-auto">
            <?php echo $new_video->links(); ?>

        </div>

        <div style="height: 20px;"></div>
        <div style="height: 20px;"></div>

        <?php echo $__env->make("videos.partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>

</script>
<?php echo $__env->make("videos.partials.commonjs", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/videos/index.blade.php ENDPATH**/ ?>