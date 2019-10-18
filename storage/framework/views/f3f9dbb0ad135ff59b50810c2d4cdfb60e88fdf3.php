<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
?>
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="<?php echo e(url('http://hyper-mart.me')); ?>">
                        <img src="<?php echo e(url('/images/frontend_img/home/logo5.png')); ?>" alt="" /></a>
                </div>
                <div class="btn-group pull-right"></div>
                </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo e(url('/orders')); ?>"><i class="fa fa-crosshairs"></i> Order</a></li>
                        <li><a href="<?php echo e(url('/login-register')); ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <?php if(empty(Auth::check())): ?>
                            <li><a href="<?php echo e(url('/login-register')); ?>"><i class="fa fa-lock"></i> Login</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(url('/account')); ?>"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="<?php echo e(url('/user-logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-bottom"><!--header-bottom-->
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
    <li><a href="<?php echo e(url('/')); ?>" class="active">Home</a></li>
        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
                <?php $__currentLoopData = $mainCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(url('products/'.$cat->url)); ?>"><?php echo e($cat->Name); ?></a></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>  
        <li><a href="404.html">About Us</a></li>
    <li><a href="<?php echo e(url('/contact-us')); ?>">Contact</a></li>
    </ul>
</div>
</div>
<div class="col-sm-4">
<form action="<?php echo e(url('/')); ?>" method="get" class="form-inline">
    <div class="form-group">
    <input type="text" class="form-control" style="width:100%;" name="s" placeholder="Keyword" value="<?php echo e(isset($s) ? $s : ''); ?>">
    </div>
     <div class="form-group">
          <button class="btn btn-success" type="submit">Search</button>
     </div>
</form>
</div>
</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->