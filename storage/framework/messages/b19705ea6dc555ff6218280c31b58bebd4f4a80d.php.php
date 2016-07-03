<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Malene Lykke Hansen">

        <title>Malene Lykke Hansen</title>

        <!-- Application Core CSS -->
        <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 style="text-align: center;"><?php echo $__env->yieldContent('headline', ''); ?></h1> 
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $__env->yieldContent('title', ''); ?></h3>
                        </div>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
      <script>
         BootstrapDateTimePicker = '<?php echo e(App::getLocale()); ?>';
        </script>
        <script src="<?php echo e(elixir('js/application.js')); ?>"></script>
        <script src='<?php echo e(asset('/js/locale/'.App::getLocale().'.js')); ?>'></script>
</html>
