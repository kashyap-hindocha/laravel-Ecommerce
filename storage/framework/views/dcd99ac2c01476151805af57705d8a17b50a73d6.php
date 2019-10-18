<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="<?php echo e(asset('images/frontend_img/home/logo5.png')); ?>" />
    <link href="<?php echo e(asset('css/frontend_css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/animate.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/frontend_css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/easyzoom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/frontend_css/passtrength.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/frontend_js/jquery.js')); ?>"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo e(asset('images/frontend_img/ico/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('images/frontend_img/ico/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('images/frontend_img/ico/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('images/frontend_img/ico/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('images/frontend_img/ico/apple-touch-icon-57-precomposed.png')); ?>">
</head><!--/head-->

<body>
    <?php echo $__env->make('layouts.frontLayout.front_header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layouts.frontLayout.front_footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	

  
	<script src="<?php echo e(asset('js/frontend_js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/frontend_js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend_js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend_js/jquery.validate.js')); ?>"></script> 
    <script src="<?php echo e(asset('js/frontend_js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend_js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend_js/easyzoom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend_js/passtrength.js')); ?>"></script>
    <script>
        
    </script>
</body>
</html>