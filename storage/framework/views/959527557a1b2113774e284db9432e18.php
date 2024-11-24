<?php $__env->startSection('title', 'Danh sách bài viết'); ?>

<?php $__env->startSection('content'); ?>

    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>
                        <a href="#" class="btn btn-primary">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p->id); ?></td>
                        <td><?php echo e($p->title); ?></td>
                        <td>
                            <img src="<?php echo e($p->thumbnail); ?>" width="50px" alt="">
                        </td>
                        <td><?php echo e($p->description); ?></td>
                        <td><?php echo e($p->category_id); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\laragon\www\wd18409\resources\views/admin/post/index.blade.php ENDPATH**/ ?>