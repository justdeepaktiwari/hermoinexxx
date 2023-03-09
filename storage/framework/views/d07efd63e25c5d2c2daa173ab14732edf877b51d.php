

<?php $__env->startSection('title', 'Add Videos'); ?>

<?php $__env->startSection('action-btn'); ?>
<div class="pull-right">
    <a class="btn btn-outline-primary" href="<?php echo e(route('videos.index')); ?>"> Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .progress-bar {
        background: #28a745;
    }

    .select2-selection__rendered {
        line-height: 31px !important;
    }

    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .select2-selection__arrow {
        height: 34px !important;
    }
</style>
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


<form action="<?php echo e(route('videos.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="d-flex justify-content-between flex-wrap">
        <div class="col-md-10 d-inline-block">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Select Type</strong>
                        <select name="subscription_type_id" class="form-select" required>
                            <?php $__currentLoopData = $subscription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subscription_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($subscription_item["id"]); ?>"><?php echo e($subscription_item["name"]); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Video Title</strong>
                        <input type="text" name="video_title" class="form-control" placeholder="video title" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3 video-upload">
                    <div class="form-group">
                        <strong>Upload Video</strong>
                        <div class='input-group'>
                            <input type='file' class="form-control rounded-0" id="fileInput">
                            <button class="btn btn-primary rounded-0" type="button" id="uploadBtn">Upload</button>
                        </div>

                        <div class="progress my-2"></div>

                        <div id="fileList" class="mt-2"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
                    <div class="form-group">
                        <strong>Video Description</strong>
                        <textarea class="form-control" name="video_detail" placeholder="Detail" rows="2" required></textarea>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Select Categories</strong>
                        <select name="categories_id[]" multiple class="w-100">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Select Tags</strong>
                        <select name="tags_id[]" multiple class="w-100">
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 text-start mb-3">
                    <strong class="invisible">Video Description</strong>
                    <button type="submit" class="btn btn-primary rounded-0 ready-submit w-100" disabled>Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- Adding Plupload Library -->
<script src="<?php echo e(asset('plupload/js/plupload.full.min.js')); ?>"></script>

<script>
    var uploader = new plupload.Uploader({
        runtimes: 'html5,flash,silverlight,html4',
        browse_button: 'fileInput',
        url: '<?php echo e(route("upload-video")); ?>',
        flash_swf_url: '<?php echo e(asset("plupload/js/Moxie.swf")); ?>',
        silverlight_xap_url: '<?php echo e(asset("plupload/js/Moxie.xap")); ?>',
        multi_selection: false,
        chunk_size: '1mb',
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        },
        filters: {
            max_file_size: '3gb',
            mime_types: [{
                title: "Video files",
                extensions: "mp4,avi,mpeg,mpg,mov,wmv"
            }, ]
        },

        init: {
            PostInit: function() {
                document.getElementById('fileList').innerHTML = '';
                document.getElementById('uploadBtn').onclick = function() {
                    if (uploader.files.length < 1) {
                        tata.error("Error!", "Please select video");
                        return false;
                    } else {
                        $("#uploadBtn").text("Uploading...").attr("disabled", "disabled");
                        uploader.start();
                        return false;
                    }
                };
            },

            FilesAdded: function(up, files) {
                plupload.each(files, function(file) {
                    document.getElementById('fileList').innerHTML +=
                        `<div id="${file.id}" class="p-2 border border-primary d-flex align-items-center gap-2 small fw-bold mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                </svg>
                                ${file.name} - ${plupload.formatSize(file.size)}
                            </div>`;
                });
            },

            UploadProgress: function(up, file) {
                document.querySelector(".video-upload .progress").innerHTML = '<div class="progress-bar" style="width: ' + file.percent + '%;">' + file.percent + '%</div>';
            },

            FileUploaded: function(up, file, result) {
                var responseData = result.response.replace('"{', '{').replace('}"', '}');
                var objResponse = JSON.parse(responseData);
                console.log(objResponse);
                if(objResponse.result.name){
                    tata.success("Success!", objResponse.result.message);
                    document.getElementById('fileList').innerHTML += `<input type="hidden" name="video_url" value="${objResponse.result.name}"/>`;
                }else{
                    tata.error("Error!", "Caught server error!");
                }
                // checkUploads(true, false);
                $(".ready-submit").removeAttr("disabled");
                $("#uploadBtn").text("Uploaded").addClass("btn-success").removeClass("btn-primary");
            },

            Error: function(up, err) {
                tata.error("Error!", err.message);
            }
        }
    });
    uploader.init();

    $('[name="categories_id[]"], [name="tags_id[]"]').select2();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/admin/videos/create.blade.php ENDPATH**/ ?>