<?php $__env->startSection('content'); ?>

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Coupons</a> <a href="#" class="current">Add Coupons</a> </div>
<h1>Coupons</h1>
<?php if(Session::has('flash_message_error')): ?>
<div class="alert alert-error alert-block">
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
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
    <h5>Add Coupons</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/add-coupon')); ?>"
    name="add_coupon" id="add_coupon"> <?php echo e(csrf_field()); ?>

      <div class="control-group">
        <label class="control-label">Coupon Code</label>
        <div class="controls">
          <input type="text" name="coupon_code" id="coupon_code" minlength="5" maxlength="15" required>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">Amount</label>
          <div class="controls">
            <input type="number" name="amount" id="amount" min="1" required>
          </div>
        </div>
        <div class="control-group">
              <label class="control-label">Amount Type</label>
              <div class="controls">
                  <select name="amount_type" id="amount_type" style="width:220px;">
                  <option value="Percentage">Percentage</option>
                  <option value="Fixed">Fixed</option>
                    </select>
              </div>
          </div>
        <div class="control-group">
            <label class="control-label">Expiry Date</label>
            <div class="controls">
              <input type="text" name="expiry_date" id="expiry_date" autocomplete="off" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Enable</label>
            <div class="controls">
              <input type="checkbox" name="status" id="status" value="1">
            </div>
          </div>
            
      <div class="form-actions">
        <input type="submit" value="Add Coupon" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>