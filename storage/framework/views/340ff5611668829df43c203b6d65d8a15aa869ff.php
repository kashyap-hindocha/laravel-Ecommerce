<?php $__env->startSection('content'); ?>

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">View Order</li>
</ol>
</div>
</div>
</section> 

<section id="do_action">
<div class="container">
<div class="heading" align="center">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Order ID</th>
                <!-- <th>Ordered Products</th> -->
                <th>Payment Method</th>
                <th>Grand Total</th>
                <th>Created On</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($order->id); ?></td>
                <!-- <td>
                    <?php $__currentLoopData = $order->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('/orders/'.$order->id)); ?>">
                    <?php echo e($pro->product_code); ?>

                    (<?php echo e($pro->product_qty); ?>)
                </a><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td> -->
                <td><?php echo e($order->payment_method); ?></td>
                <td><?php echo e($order->grand_total); ?></td>
                <td><?php echo e($order->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>

</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>