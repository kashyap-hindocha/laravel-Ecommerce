<?php $__env->startSection('content'); ?>

<section id="form" style="margin-top:20px;"><!--form-->
    <div class="container">
        <div class="row">
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
        <div class="breadcrumbs">
                <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Accounts</li>
                </ol>
        </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Update Account</h2>
            <form id="accountForm" name="accountForm" action="<?php echo e(url('/account')); ?>" method="post"> <?php echo e(csrf_field()); ?>

            <input value="<?php echo e($userDetails->email); ?>" type="text" name="email" id="email" placeholder="Email">
            <input value="<?php echo e($userDetails->name); ?>" type="text" name="name" id="name" placeholder="Name">
                <input value="<?php echo e($userDetails->address); ?>" type="text" name="address" id="address" placeholder="Address">
                <input value="<?php echo e($userDetails->city); ?>" type="text" name="city" id="city" placeholder="City">
                <input value="<?php echo e($userDetails->state); ?>" type="text" name="state" id="state" placeholder="State">
                <select name="country" id="country">
                    <option value="">Select Country</option>
                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($country->country_name); ?>" <?php if($country->country_name == $userDetails->country): ?> selected <?php endif; ?>>
                    <?php echo e($country->country_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <input value="<?php echo e($userDetails->pincode); ?>" style="margin-top:10px;" type="text" name="pincode" id="pincode" placeholder="PIN Code">
                <input value="<?php echo e($userDetails->mobile); ?>" type="text" name="mobile" id="mobile" placeholder="Mobile">
                <button type="submit" class="btn btn-default">Update</button>
            </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Update Password</h2>
                <form class="passwordForm" name="passwordForm" action="<?php echo e(url('/update-user-pwd')); ?>" method="POST"><?php echo e(csrf_field()); ?>

                <input type="password" name="current_pwd" id="current_pwd" placeholder="Current Password" required="required">
                <span id="chkPwd"></span>
                <input type="password" name="new_pwd" id="new_pwd" placeholder="New Password" required="required">
                <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm Password" required="required">
                <span id="con_pwd"></span>
                <button type="submit" class="btn btn-default">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</section><!--/form-->
<script>
    var password = document.getElementById("new_pwd")
  , confirm_password = document.getElementById("confirm_pwd");

function validatePassword(){
  if(new_pwd.value != confirm_pwd.value) {
    confirm_pwd.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_pwd.setCustomValidity('');
  }
}

new_pwd.onchange = validatePassword;
confirm_pwd.onkeyup = validatePassword;
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>