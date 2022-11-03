<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h1><?php echo e($user->name); ?></h1>
        <h1><?php echo e($user->email); ?></h1>
        <h1><?php echo e($user->role->role); ?></h1>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\middleware\resources\views/pages/admin.blade.php ENDPATH**/ ?>