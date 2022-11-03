<form action="/newarticle/store/" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="">User</label>
        <select name="user_id" id="">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input name="title" type="text">
        <textarea name="text" id="" cols="30" rows="10">Enter text</textarea>
        <button type="submit"
            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
    </div>
</form>
<?php /**PATH C:\laragon\www\middleware\resources\views/partials/createArticle.blade.php ENDPATH**/ ?>