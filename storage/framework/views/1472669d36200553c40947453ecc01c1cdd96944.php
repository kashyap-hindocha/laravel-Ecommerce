<?php $__env->startSection('content'); ?>

<!--main-container-part-->
<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Orders</a> </div>
<h1>Oder #<?php echo e($orderDetails->id); ?></h1>
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
        <div class="span6">
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Order Details</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc"> Order Date</td>
                <td class="taskStatus"><?php echo e($orderDetails->created_at); ?></td>
                </tr>
                <tr>
                <td class="taskDesc"> Order Status</td>
                <td class="taskStatus"><?php echo e($orderDetails->order_status); ?></td>
                </tr>
                <tr>
                <td class="taskDesc"> Order Total</td>
                <td class="taskStatus">INR <?php echo e($orderDetails->grand_total); ?></td>
                </tr>
                <td class="taskDesc"> Shipping Charges</td>
                <td class="taskStatus">INR <?php echo e($orderDetails->shipping_charges); ?></td>
                </tr>
                <tr>
                <td class="taskDesc"> Coupon Code</td>
                <td class="taskStatus"><?php echo e($orderDetails->coupon_code); ?></td>
                </tr>
                <td class="taskDesc"> Coupon Amount</td>
                <td class="taskStatus">INR <?php echo e($orderDetails->coupon_amount); ?></td>
                </tr>
                <tr>
                <td class="taskDesc"> Payment Method</td>
                <td class="taskStatus"><?php echo e($orderDetails->payment_method); ?></td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Billing Address</h5>
                </div>
                <div class="widget-content">
                    <?php echo e($userDetails->name); ?> <br>
                    <?php echo e($userDetails->address); ?> <br>
                    <?php echo e($userDetails->city); ?> <br>
                    <?php echo e($userDetails->state); ?> <br>
                    <?php echo e($userDetails->country); ?> <br>
                    <?php echo e($userDetails->pincode); ?> <br>
                    <?php echo e($userDetails->mobile); ?> <br>

                </div>
                </div>
    </div>
<div class="span6">
        <div class="widget-box">
                <div class="widget-title">
                    <h5>Customer Details</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc">Customer Name</td>
                <td class="taskStatus"><?php echo e($orderDetails->name); ?></td>
                </tr>
                <tr>
                <td class="taskDesc">Customer Email</td>
                <td class="taskStatus"><?php echo e($orderDetails->user_email); ?></td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
        <div class="widget-box">
            <div class="widget-title">
                <h5>Shipping Address Update</h5>
            </div>
            <div class="widget-content">
            <form action="<?php echo e(url('/admin/update-order-status')); ?>" method="post"> <?php echo e(csrf_field()); ?>

            <input type="hidden" name="order_id" value="<?php echo e($orderDetails->id); ?>">
                   <table style="width:100%;">
                    <tr>
                    <td>
                   <select name="order_status" id="order_status"  required="">
                     <option value="New" <?php if($orderDetails->order_status== "New"): ?> selected <?php endif; ?>>
                         New</option>
                     <option value="Pending" <?php if($orderDetails->order_status== "Pending"): ?> selected <?php endif; ?>>
                         Pending</option>
                     <option value="In Process" <?php if($orderDetails->order_status== "In Process"): ?> selected <?php endif; ?>>
                         In Process</option>
                     <option value="Shipped" <?php if($orderDetails->order_status== "Shipped"): ?> selected <?php endif; ?>>
                         Shipped</option>
                     <option value="Delivered" <?php if($orderDetails->order_status== "Delivered"): ?> selected <?php endif; ?>>
                         Delivered</option>
                     <option value="Cancelled" <?php if($orderDetails->order_status== "Cancelled"): ?> selected <?php endif; ?>>
                         Cancelled</option>
                    <option value="Paid" <?php if($orderDetails->order_status== "Paid"): ?> selected <?php endif; ?>>
                            Paid</option>
                   </select>
                    </td>
                    <td>
                   <input type="submit" value="Update Status" class="btn btn-info">
                    </td>
                    </tr>
                   </table>
               </form>
            </div>
        </div>
        <div class="widget-box">
        <div class="widget-title">
            <h5>Shipping Address</h5>
        </div>
        <div class="widget-content">
            <?php echo e($orderDetails->name); ?> <br>
            <?php echo e($orderDetails->address); ?> <br>
            <?php echo e($orderDetails->city); ?> <br>
            <?php echo e($orderDetails->state); ?> <br>
            <?php echo e($orderDetails->country); ?> <br>
            <?php echo e($orderDetails->pincode); ?> <br>
            <?php echo e($orderDetails->mobile); ?> <br>
        </div>
        </div>
</div>
</div>
<hr>
 <div class="row-fluid">
     <h3 align="center">Ordered Products List</h3>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Size</th>
                <th>Product Color</th>
                <th>Product Price</th>
                <th>Product Qty</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $orderDetails->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($pro->product_code); ?></td>
                <td><?php echo e($pro->product_name); ?></td>
                <td><?php echo e($pro->product_size); ?></td>
                <td><?php echo e($pro->product_color); ?></td>
                <td><?php echo e($pro->product_price); ?></td>
                <td><?php echo e($pro->product_qty); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

 </div>
</div>
</div>
<!--main-container-part-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>