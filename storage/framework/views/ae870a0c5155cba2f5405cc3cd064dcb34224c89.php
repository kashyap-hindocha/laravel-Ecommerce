<?php $__env->startSection('content'); ?>

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Coupons</a> <a href="#" class="current">View Coupons</a> </div>
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
<div class="container-fluid">
<hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
<h5>View Coupons</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
        <thead>
            <tr>
            <th>Coupon ID</th>
            <th>Coupon Code</th>
            <th>Amount</th>
            <th>Amount Type</th>
            <th>Expiry Date</th>
            <th>Created Date</th>
            <th>Status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="gradeX">
            <td><?php echo e($coupon->id); ?></td>
            <td><?php echo e($coupon->coupon_code); ?></td>
            <td>
            <?php echo e($coupon->amount); ?>

            <?php if($coupon->amount_type == "Percentage"): ?> % <?php else: ?> INR <?php endif; ?>
            </td>
            <td><?php echo e($coupon->amount_type); ?></td>
            <td><?php echo e($coupon->expiry_date); ?></td>
            <td><?php echo e($coupon->created_at); ?></td>
            <td>
            <?php if($coupon->status=="1"): ?> Active <?php else: ?> Inactive <?php endif; ?>
            </td>
            <td class="center">
            <a href="<?php echo e(url('/admin/edit-coupon/'.$coupon->id)); ?>" class="btn btn-primary btn-mini" title="Edit Coupons">Edit</a>
            <a  rel="<?php echo e($coupon->id); ?>" rel1="delete-coupon"
            href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Coupons">Delete</a></div>
        </td>              
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>