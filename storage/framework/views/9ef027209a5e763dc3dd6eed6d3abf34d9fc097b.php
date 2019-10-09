<?php $__env->startSection('content'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Categories</a> <a href="#" class="current">View Categories</a> </div>
        <h1>Categories</h1>
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
              <h5>View Categories</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Category Level</th>
                    <th>Category URL</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="gradeX">
                  <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->Name); ?></td>
                    <td><?php echo e($category->Parent_id); ?></td>
                    <td><?php echo e($category->url); ?></td>
                  <td class="center"><div class="fr"><a href="<?php echo e(url('/admin/edit-category/'.$category->id)); ?>" class="btn btn-primary btn-mini">Edit</a>
                    <a  rel="<?php echo e($category->id); ?>" rel1="delete-category"
                        href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></div></td>              
                </tr>
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