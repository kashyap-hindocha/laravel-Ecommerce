<?php $__env->startSection('content'); ?>

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Products</a> <a href="#" class="current">View Products</a> </div>
<h1>Products</h1>
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
<h5>View Products</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
  <thead>
    <tr>
      <th>Product ID</th>
      <th>Category ID</th>
      <th>Category Name</th>
      <th>Product Name</th>
      <th>Product Code</th>
      <th>Product Color</th>
      <th>Price</th>
      <th>Image</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="gradeX">
      <td><?php echo e($product->id); ?></td>
      <td><?php echo e($product->category_id); ?></td>
      <td><?php echo e($product->category_name); ?></td>
      <td><?php echo e($product->product_name); ?></td>
      <td><?php echo e($product->product_code); ?></td>
      <td><?php echo e($product->product_color); ?></td>
      <td><?php echo e($product->price); ?></td>
      <td>
          <?php if(!empty($product->image)): ?>
      <img src="<?php echo e(asset('/images/backend_img/products/small/'.$product->image)); ?>"
      style="width:60px;">
      </td>
          <?php endif; ?>
    <td class="center">
      <div class="btn-group"><a href="#myModal<?php echo e($product->id); ?>" data-toggle="modal" 
      class="btn btn-success btn-mini" title="View Products">View</a>
      <a href="<?php echo e(url('/admin/edit-product/'.$product->id)); ?>" class="btn btn-primary btn-mini" title="Edit Products">Edit</a>
      <a href="<?php echo e(url('/admin/add-attributes/'.$product->id)); ?>" class="btn btn-info btn-mini" title="Add Attributes">Add</a>
      <a href="<?php echo e(url('/admin/add-images/'.$product->id)); ?>" class="btn btn-warning btn-mini" title="Add Images">Add Img</a>
    <a  rel="<?php echo e($product->id); ?>" rel1="delete-product"
      href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Products">Delete
    </a>
    </div>
    </td>              
  </tr> 
          <div id="myModal<?php echo e($product->id); ?>" class="modal hide">
            <div class="modal-header">
              <button data-dismiss="modal" class="close" type="button">×</button>
              <h3><?php echo e($product->product_name); ?> Full Details</h3>
            </div>
            <div class="modal-body">
              <p>Product ID : <?php echo e($product->id); ?></p>
              <p>Category ID : <?php echo e($product->category_id); ?></p>
              <p>Product Name : <?php echo e($product->product_name); ?></p>
              <p>Product Code : <?php echo e($product->product_code); ?></p>
              <p>Product Color : <?php echo e($product->product_color); ?></p>
              <p>Price : $<?php echo e($product->price); ?></p>
              <p>Product Description : <?php echo e($product->description); ?></p>
              <p>Material & Care : <?php echo e($product->care); ?></p>
            </div>
          </div>
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