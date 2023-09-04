<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title><?php echo $__env->yieldContent('title', $title); ?></title>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased">
        <div class="container">
        <h1><?php echo $__env->yieldContent('title', $title); ?></h1>
        <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\Elame Jordan\Desktop\Laravel\Laravel-login-site\resources\views/app.blade.php ENDPATH**/ ?>