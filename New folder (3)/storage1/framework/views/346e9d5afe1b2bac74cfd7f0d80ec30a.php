<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <header>
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Logo" class="logo">
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('customers')); ?>">Customers</a>
            <a href="<?php echo e(route('services')); ?>">Services</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page.</p>
    </main>

    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrB_04\resources\views/home.blade.php ENDPATH**/ ?>