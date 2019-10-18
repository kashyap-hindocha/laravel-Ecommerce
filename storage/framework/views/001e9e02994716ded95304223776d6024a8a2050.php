<?php $__env->startSection('content'); ?>

<section id="form" style="margin-top:20px;">
    <div class="container">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Order Review</li>
        </ol>
    </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Bill Address</h2>
                <div class="form-group">
                <?php echo e($userDetails->name); ?>

                </div>
                <div class="form-group">
                <?php echo e($userDetails->address); ?>

                </div>
                <div class="form-group">
                 <?php echo e($userDetails->city); ?>

                </div>
                <div class="form-group">
                <?php echo e($userDetails->state); ?>

                </div>
                <div class="form-group">
                <?php echo e($userDetails->country); ?>

                </div>
                <div class="form-group">
                <?php echo e($userDetails->pincode); ?>

                </div>
                <div class="form-group">
                <?php echo e($userDetails->mobile); ?>

                </div>
                </div>
            </div>
            <div class="col-sm-1">
                <h2></h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Shipping Details</h2>
                <div class="form-group">
                <?php echo e($shippingDetails->name); ?>

                </div>
                <div class="form-group">
                <?php echo e($shippingDetails->address); ?>

                </div>
                <div class="form-group">
                <?php echo e($shippingDetails->city); ?>

                </div>
                <div class="form-group">
                <?php echo e($shippingDetails->state); ?>

                </div>
                <div class="form-group">  
                <?php echo e($shippingDetails->country); ?>

                </div>
                <div class="form-group">
                <?php echo e($shippingDetails->pincode); ?>

                </div>
                <div class="form-group">
                <?php echo e($shippingDetails->mobile); ?>

                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cart_items" style="margin-top:-200px;" >
<div class="container">

<div class="shopper-informations">
    <div class="row">					
    </div>
</div>

<div class="review-payment">
    <h2>Review & Payment</h2>
</div>

<div class="table-responsive cart_info">
    <table class="table table-condensed">
        <thead>
            <tr class="cart_menu">
                <td class="image">Item</td>
                <td class="description"></td>
                <td class="price">Price</td>
                <td class="quantity">Quantity</td>
                <td class="total">Total</td>
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
                    <p><?php echo e($cart->quantity); ?></p>
                    </div>
                </td>
                <td class="cart_total">
                <p class="cart_total_price">INR <?php echo e($cart->price*$cart->quantity); ?></p>
                </td>
            </tr>
            <?php $total_amount = $total_amount + ($cart->price*$cart->quantity);?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="4">&nbsp;</td>
                <td colspan="2">
                    <table class="table table-condensed total-result">
                        <tr>
                            <td>Cart Sub Total</td>
                            <td>INR <?php echo e($total_amount); ?></td>
                        </tr>
                        <tr class="shipping-cost">
                            <td>Shipping Cost (+)</td>
                            <td>INR 0</td>										
                        </tr>
                        <tr class="shipping-cost">
                                <td>Discount Amount (-)</td>
                        <td>
                        <?php if(!empty(Session::get('CouponAmount'))): ?>
                           INR <?php echo e(Session::get('CouponAmount')); ?>

                        <?php else: ?>
                            INR 0
                        <?php endif; ?>
                        </td>										
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                        <td><span>INR <?php echo e($grand_total=$total_amount - Session::get('CouponAmount')); ?></span></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<form name="paymentForm" id="paymentForm" action="<?php echo e(url('/place-order')); ?>" method="post"> <?php echo e(csrf_field()); ?>

<input type="hidden" name="grand_total" value="<?php echo e($grand_total); ?>">
    <div class="payment-options">
        <span>
            <label><strong>Select Payment Method: </strong></label>
        </span>
        <span>
            <label><input type="radio" name="payment_method" id="COD" value="COD"><strong> Cash on Delivery (COD) </strong></label>
        </span>
        <span>
            <!-- <label><input type="radio" name="payment_method" id="paypal" value="paypal"><strong> Paypal</strong></label> -->
        </span>
        <span style="float:right;">
        <button type="submit" class="btn btn-mini check_out" onclick="return selectPaymentMethod();">Place Order</button>
        </span>
    </div>
</form>
</div>
</section> <!--/#cart_items-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>