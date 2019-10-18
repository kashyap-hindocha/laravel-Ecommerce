<div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <?php //echo $categories_menu; ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo e($cat->id); ?>">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            <?php echo e($cat->Name); ?>

                        </a>
                    </h4>
                </div>
                <div id="<?php echo e($cat->id); ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                        <?php $__currentLoopData = $cat->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(url('/products/'.$subcat->url)); ?>"><?php echo e($subcat->Name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div><!--/category-products-->
    
    </div>