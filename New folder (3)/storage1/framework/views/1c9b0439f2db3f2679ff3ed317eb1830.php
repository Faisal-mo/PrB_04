<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Create Service</h1>

        <form action="<?php echo e(route('servicesStore')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save Service</button>
        </form>

        <a href="<?php echo e(route('servicesIndex')); ?>" class="btn btn-secondary">Back to Services</a>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrB_04\resources\views/servicesCreate.blade.php ENDPATH**/ ?>