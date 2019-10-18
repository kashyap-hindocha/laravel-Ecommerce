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
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                <form id="loginForm" name="loginForm" action="<?php echo e(url('/user-login')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                        <input name="email" type="email" placeholder="Email Address" />
                        <input name="password" type="password" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                <form name="registerForm" id="registerForm" action="<?php echo e(url('/user-register')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                        <input id="name" name="name" type="text" placeholder="Name">
                        <input id="email" name="email" type="email" placeholder="Email Address">
                        <input id="myPassword" name="password" type="password" placeholder="Password">
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>