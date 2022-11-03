<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="bg-black">
        <a href="/fullarticle/<?php echo e($article->id); ?>"> <?php echo e($article->title); ?></a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\middleware\resources\views/pages/articles.blade.php ENDPATH**/ ?>