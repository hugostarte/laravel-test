<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding: 0;
                margin: 0;
            }
            .navbar{
                width: 100%;
                text-align: center;
                background: rgb(1, 33, 87);
                padding: 20px 50px;
            }
            .navbar a { 
                padding: 20px 50px;
                font-size: 1em;
                text-decoration: none;
                color: white;s
            }
            .navbar a:hover { 
                text-decoration:underline;
            }
            .container{
                width: 90%;
                margin: auto;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../css/app.css">
        <title>Laravel</title>
    </head>

    <body class="antialiased">
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/example-app/resources/views/base.blade.php ENDPATH**/ ?>