;
<?php $__env->startSection('content'); ?>

<!--main-container-part-->
<div id="content" style="margin-top:-75px;">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    <!--End-breadcrumbs-->
    
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a href="<?php echo e(url ('/admin/dashboard')); ?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li class="bg_lg span3"> <a href="<?php echo e(url ('/admin/view-categories')); ?>"> <i class="icon icon-list"></i><span class="label label-important"><?php echo e($categoryCount->total()); ?></span> Categories</a> </li>
            <li class="bg_ly"> <a href="<?php echo e(url ('/admin/view-products')); ?>"> <i class="icon icon-list"></i><span class="label label-success"><?php echo e($productsAll->total()); ?></span> Products </a> </li>
            <li class="bg_lo"> <a href="<?php echo e(url ('/admin/view-coupons')); ?>"> <i class="icon icon-list"></i><span class="label label-info"><?php echo e($couponCount->total()); ?></span> Coupons</a> </li>
            <li class="bg_ls"> <a href="<?php echo e(url ('/admin/view-orders')); ?>"> <i class="icon-fullscreen"></i><span class="label label-warning"><?php echo e($orderCount->total()); ?></span> Orders</a> </li>
    
          </ul>
        </div>
    <!--End-Action boxes-->    
    
    <!--Chart-box-->    
        <div class="row-fluid">
          <div class="widget-box">
            <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
              <h5>Site Analytics</h5>
            </div>
            <div class="widget-content" >
              <div class="row-fluid">
                <div class="span12">
                    <ul class="site-stats">
                    <li class="bg_lh"><i class="icon-user"></i> <strong><?php echo e($userCount->total()); ?></strong> <h4>Total Users</h4></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong><?php echo e($productsAll->total()); ?></strong> <h4>Total Products </h4></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong><?php echo e($orderCount->total()); ?></h4> <h4>Total Shop</h4></li>
                        <li class="bg_lh"><i class="icon-tag"></i> <strong><?php echo e($orderCount->total()); ?></h4> <h4>Total Orders</h4></li>
                        <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <h4>Pending Orders</h4></li>
                        <li class="bg_lh"><i class="icon-globe"></i> <strong>10</strong> <h4>Online Orders</h4></li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!--End-Chart-box--> 
        <hr/>

      </div>
    </div>
    
    <!--end-main-container-part-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>