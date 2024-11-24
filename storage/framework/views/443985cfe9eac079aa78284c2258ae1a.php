<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="<?php echo e(route('book.update', $book->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <input type="hidden" name="id" value="<?php echo e($book->id); ?>">
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="" value="<?php echo e($book->title); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thumbnail</label>
                <input type="text" name="thumbnail" class="form-control" id=""
                    value="<?php echo e($book->thumbnail); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publisher</label>
                <input type="text" name="publicsher" class="form-control" id=""
                    value="<?php echo e($book->publicsher); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Publication</label>
                <input type="text" name="publication" class="form-control" id=""
                    value="<?php echo e($book->publication); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" name="price" step="0.1" class="form-control" id=""
                    value="<?php echo e($book->price); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="" value="<?php echo e($book->quantity); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category name</label>
                <select type="text" name="category_id" class="form-control" id="">
                    <?php $__currentLoopData = $categories_book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cate->id); ?>">
                            <?php if($cate->id === $book->category_id): ?>
                                selected
                            <?php endif; ?>
                            <?php echo e($cate->cate_name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?php echo e(route('book.index')); ?>" class="btn btn-primary">List</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH K:\laragon\www\wd18409\resources\views/create.blade.php ENDPATH**/ ?>