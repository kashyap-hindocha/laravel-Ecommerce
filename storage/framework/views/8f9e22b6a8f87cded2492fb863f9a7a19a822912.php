<?php $__env->startSection('content'); ?>

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Shopping Cart</li>
</ol>
</div>
<div class="table-responsive cart_info">
<?php if(Session::has('flash_message_error')): ?>
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>
<strong><?php echo e(session('flash_message_error')); ?></strong>
</div>
<?php endif; ?>
<?php if(Session::has('flash_message_success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>
<strong><?php echo e(session('flash_message_success')); ?></strong>
</div>
<?php endif; ?>

<table class="table table-condensed">
<thead>
    <tr class="cart_menu">
        <td class="image">Item</td>
        <td class="description"></td>
        <td class="price">Price</td>
        <td class="quantity">Quantity</td>
        <td class="total">Total</td>
        <td></td>
    </tr>
</thead>
<tbody>
<?php $total_amount =0; ?>
<?php $__currentLoopData = $userCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="cart_product">
    <a href=""><img style="width:80px;" src="<?php echo e(asset('images/backend_img/products/small/'.$cart->image)); ?>" alt=""></a>
</td>
<td class="cart_description">
<h4><a href=""><?php echo e($cart->product_name); ?></a></h4>
<p>Product Code: <?php echo e($cart->product_code); ?> | Size: <?php echo e($cart->size); ?></p>
</td>
<td class="cart_price">
<p>INR <?php echo e($cart->price); ?></p>
</td>
<td class="cart_quantity">
    <div class="cart_quantity_button">
    <a class="cart_quantity_up" href="<?php echo e(url('/cart/update-quantity/'.$cart->id.'/1')); ?>"> + </a>
        <input class="cart_quantity_input" type="text" name="quantity" 
    value="<?php echo e($cart->quantity); ?>" autocomplete="off" size="2">
    <?php if($cart->quantity>1): ?>
        <a class="cart_quantity_down" href="<?php echo e(url('/cart/update-quantity/'.$cart->id.'/-1')); ?>"> - </a>
    <?php endif; ?>
    </div>
</td>
<td class="cart_total">
<p class="cart_total_price">INR <?php echo e($cart->price*$cart->quantity); ?></p>
</td>
<td class="cart_delete">
<a class="cart_quantity_delete" href="<?php echo e(url('cart/delete-product/'.$cart->id)); ?>"><i class="fa fa-times"></i></a>
</td>
</tr>
<?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</section> <!--/#cart_items-->

<section id="do_action">
<div class="container">
<div class="heading">
<h3>What would you like to do next?</h3>
<p>Choose if you have a Coupon code you want use.</p>
</div>
<div class="row">
<div class="col-sm-6">
<div class="chose_area">
    <ul class="user_option">
        <li>
            <label>Coupon Code</label>
        <form action="<?php echo e(url('/cart/apply-coupon')); ?>" method="post"> <?php echo e(csrf_field()); ?>

            <input type="text" name="coupon_code">
            <input type="submit" value="Apply" class="btn btn-success">
        </form>
        </li>
    </ul>
</div>
</div>
<div class="col-sm-6">
<div class="total_area">
    <ul>
        <?php if(!empty(Session::get('CouponAmount'))): ?>
        <li>Sub Total <span>INR <?php echo $total_amount; ?></span></li>
        <li>Coupon Discount <span>INR <?php echo Session::get('CouponAmount'); ?></span></li>
        <li>Grand Total <span>INR <?php echo $total_amount - Session::get('CouponAmount'); ?></span></li>
        <?php else: ?>
        <li>Grand Total <span>INR <?php echo $total_amount; ?></span></li>
        <?php endif; ?>
    </ul>
        <a class="btn btn-default update" href="">Update</a>
<a class="btn btn-default check_out" href="<?php echo e(url('/checkout')); ?>">Check Out</a>
</div>
</div>
</div>
</div>
</section><!--/#do_action-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>