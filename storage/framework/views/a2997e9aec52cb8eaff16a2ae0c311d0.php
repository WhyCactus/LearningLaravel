<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <a href="<?php echo e(route('page.detail', $post->id)); ?>">
                <h3><?php echo e($post->title); ?></h3>
            </a>
            <p>
                <?php echo e($post->description); ?>

            </p>
            <hr>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH K:\laragon\www\wd18409\resources\views/home.blade.php ENDPATH**/ ?>