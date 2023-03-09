

<?php $__env->startSection('title', 'Partner Management'); ?>

<?php $__env->startSection('action-btn'); ?>
  <div class="pull-right">
    <a class="btn btn-sm rounded-0 btn-outline-success btn-sm rounded-0" href="<?php echo e(route('users.create')); ?>"> Create New Partner</a>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th>User Type</th>
   <th width="280px" class="text-center">Action</th>
 </tr>
 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e(++$i); ?></td>
    <td><?php echo e($user->name); ?></td>
    <td><?php echo e($user->email); ?></td>
    <td>
      <?php if(count($user->getRoleNames())): ?>
        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <label class="badge badge-success text-danger"><?php echo e($v); ?></label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
        ----
      <?php endif; ?>
    </td>
    
    <td class="align-middle"><?php echo !count($user->getRoleNames()) ? 'User - '.(isset($user->subscription->name) ? $user->subscription->name : "NA") : '<span class="badge bg-success text-light p-2 rounded-0">Partner</span>'; ?></td>
    <td class="d-flex justify-content-evenly">
       <a class="btn btn-sm rounded-0 btn-info" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>
       <a class="btn btn-sm rounded-0 btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>
        <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm rounded-0 btn-danger']); ?>

        <?php echo Form::close(); ?>

    </td>
  </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php echo $data->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
  <?php if($message = Session::get('success')): ?>
    <script>
      tata.success("Success!", '<?php echo e($message); ?>')
    </script>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hermoinexxx\resources\views/admin/users/index.blade.php ENDPATH**/ ?>