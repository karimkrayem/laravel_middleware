<form action="/article/update/<?php echo e($articles->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="">Name</label>
    <input type="text" name="title">
    <label for="">text</label>
    <input type="text" name="text">
    <select name="user_id" id="">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php /**PATH C:\laragon\www\middleware\resources\views/pages/editarticle.blade.php ENDPATH**/ ?>