<?php $__env->startSection('content'); ?>

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Thanks</li>
</ol>
</div>
</div>
</section> 

<section id="do_action">
<div class="container">
<div class="heading" align="center">
<h3>YOUR COD ORDER HAS BEEN PLACED </h3>
<p>Your order number is <?php echo e(Session::get('order_id')); ?> and total payable about is INR <?php echo e(Session::get('grand_total')); ?></p>
</div>

</div>
</section>
<?php $__env->stopSection(); ?>
<?php
Session::forget('grand_total');
Session::forget('order_id');

?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>