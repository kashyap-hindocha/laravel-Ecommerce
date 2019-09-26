<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
 
div.form-element {
    margin: 20px 0;
}
</style>
</head>
<body>


  
  <form method="POST" action="<?php echo e(route('login.success')); ?>">
                        <?php echo csrf_field(); ?>

<table align="center">

    
	<a href="user_add">Create New Account</a>
	
    <div class="form-element">
      <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>
      <input type="text" name="email" />
      <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
            <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
           </span>
       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
     </div>
     <div class="form-element">
      <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
      <input type="password" name="password"/>

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>
      
      <button type="submit" name="login" value="login">Log In</button>
      </table>
	</form>
	


</body>
</html>
<?php /**PATH C:\xampp\htdocs\webelectric\resources\views/login1.blade.php ENDPATH**/ ?>