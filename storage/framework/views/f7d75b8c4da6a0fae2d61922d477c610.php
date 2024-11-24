<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List-books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Home</h1>
    <div class="container">
        <a href="<?php echo e(route('book.create')); ?>"><button type="button" class="btn btn-primary">Add</button></a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Publication</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($book->id); ?></th>
                        <td><?php echo e($book->title); ?></td>
                        <td><img src="<?php echo e($book->thumbnail); ?>" width="100" alt=""></td>
                        <td><?php echo e($book->author); ?></td>
                        <td><?php echo e($book->publicsher); ?></td>
                        <td><?php echo e($book->publication); ?></td>
                        <td><?php echo e($book->price); ?></td>
                        <td><?php echo e($book->quantity); ?></td>
                        <td><?php echo e($book->cate_name); ?></td>
                        <td>
                            
                            <a href="<?php echo e(route('book.edit', $book->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('book.destroy', $book->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH K:\laragon\www\wd18409\resources\views/index.blade.php ENDPATH**/ ?>