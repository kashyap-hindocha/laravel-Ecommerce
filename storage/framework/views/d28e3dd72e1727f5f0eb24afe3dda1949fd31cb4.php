
<html>
<?php echo $__env->make('client.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="GET" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php echo $__env->make('client.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
<?php echo $__env->make('client.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('client.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('client.middle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('client.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('client.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>                    <?php /**PATH C:\xampp\htdocs\webelectric\resources\views/layouts/app.blade.php ENDPATH**/ ?>