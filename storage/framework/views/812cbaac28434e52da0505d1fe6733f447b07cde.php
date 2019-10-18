<?php $__env->startSection('content'); ?>

<section id="form" style="margin-top:20px;"> <!--form-->
    <div class="container">
    <div class="breadcrumbs">
            <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Check Out</li>
            </ol>
    </div>
    <?php if(Session::has('flash_message_error')): ?>
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong><?php echo e(session('flash_message_error')); ?></strong>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(url('/checkout')); ?>" method="POST"> <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Bill To</h2>
                <div class="form-group">
                <input name="billing_name" id="billing_name" <?php if(!empty($userDetails->name)): ?> value="<?php echo e($userDetails->name); ?>" <?php endif; ?> 
                type="text" placeholder="Billing Name" class="form-control" />
                </div>
                <div class="form-group">
                <input name="billing_address" id="billing_address" <?php if(!empty($userDetails->address)): ?> value="<?php echo e($userDetails->address); ?>" <?php endif; ?> 
                 type="text" placeholder="Billing Address" class="form-control"/>
                </div>
                <div class="form-group">
                <input name="billing_city" pattern="[a-zA-Z]{1,20}" id="billing_city" <?php if(!empty($userDetails->city)): ?> value="<?php echo e($userDetails->city); ?>" <?php endif; ?>
                 type="text" placeholder="Billing City"  class="form-control" />
                </div>
                <div class="form-group">
                <input name="billing_state"pattern="[a-zA-Z]{1,20}"  id="billing_state" <?php if(!empty($userDetails->state)): ?> value="<?php echo e($userDetails->state); ?>" <?php endif; ?>
                 type="text" placeholder="Billing State"  class="form-control"/>
                </div>
                <div class="form-group">
                <select name="billing_country" id="billing_country" class="form-control">
                    <option value="">Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($country->country_name); ?>" 
                <?php if(!empty($userDetails->country) && $country->country_name == $userDetails->country): ?> selected <?php endif; ?>>
                <?php echo e($country->country_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
                <div class="form-group">
                <input type="text" pattern="[0-9]{6}" minlength="1" name="billing_pincode" id="billing_pincode" <?php if(!empty($userDetails->pincode)): ?> value="<?php echo e($userDetails->pincode); ?>" <?php endif; ?>
                 placeholder="Billing Pincode" class="form-control"/>
                </div>
                <div class="form-group">
                <input name="billing_mobile" id="billing_mobile" <?php if(!empty($userDetails->mobile)): ?> value="<?php echo e($userDetails->mobile); ?>" <?php endif; ?>
                 type="text" placeholder="Billing Mobile" class="form-control"/>
                </div>
                <div class="form-check">
                <input value="<?php echo e($userDetails->name); ?>" pattern="[0-9]{10}" minlength="10"  type="checkbox" class="form-check-input" id="billtoship">
                <label class="form-check-label" for="billtoship">Shipping Address Same As Billing Address</label>
                </div>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2></h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Ship To</h2>
                <div class="form-group">
                <input type="text" name="shipping_name" id="shipping_name" <?php if(!empty($shippingDetails->name)): ?> value="<?php echo e($shippingDetails->name); ?>" <?php endif; ?> placeholder="Shipping Name" class="form-control" />
                </div>
                <div class="form-group">
                <input type="text" name="shipping_address" id="shipping_address" <?php if(!empty($shippingDetails->address)): ?> value="<?php echo e($shippingDetails->address); ?>" <?php endif; ?> placeholder="Shipping Address" class="form-control"/>
                </div>
                <div class="form-group">
                <input type="text" name="shipping_city" id="shipping_city" <?php if(!empty($shippingDetails->city)): ?> value="<?php echo e($shippingDetails->city); ?>" <?php endif; ?> placeholder="Shipping City" class="form-control"/>
                </div>
                <div class="form-group">
                <input type="text" name="shipping_state" id="shipping_state" <?php if(!empty($shippingDetails->state)): ?> value="<?php echo e($shippingDetails->state); ?>" <?php endif; ?> placeholder="Shipping State" class="form-control"/>
                </div>
                <div class="form-group">
                <select name="shipping_country" id="shipping_country" class="form-control">
                    <option value="">Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($country->country_name); ?>"<?php if(!empty($shippingDetails->country) && $country->country_name == $shippingDetails->country): ?> selected <?php endif; ?>>
                    <?php echo e($country->country_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
                <div class="form-group">
                <input type="text" name="shipping_pincode" id="shipping_pincode" <?php if(!empty($shippingDetails->pincode)): ?> value="<?php echo e($shippingDetails->pincode); ?>" <?php endif; ?> placeholder="Shipping Pincode" class="form-control"/>
                </div>
                <div class="form-group">
                <input type="text" name="shipping_mobile" id="shipping_mobile" <?php if(!empty($shippingDetails->mobile)): ?> value="<?php echo e($shippingDetails->mobile); ?>" <?php endif; ?> placeholder="Shipping Mobile" class="form-control"/>
                </div>
            <button type="submit" class="btn btn-mini check_out">CheckOut</button>
                </div><!--/sign up form-->
            </div>
        </div>
    </form>
    </div>
</section><!--/form-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>