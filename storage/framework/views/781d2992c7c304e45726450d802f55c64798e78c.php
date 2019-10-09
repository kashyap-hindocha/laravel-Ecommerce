<?php $__env->startSection('content'); ?>

<section>
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
<div class="col-sm-3">
<?php echo $__env->make('layouts.FrontLayout.front_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<div class="col-sm-9 padding-right">
<div class="product-details"><!--product-details-->
<div class="col-sm-5">
    <div class="view-product">
    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
            <a href="<?php echo e(asset('images/backend_img/products/large/'.$productDetails->image)); ?>">
        <img class="mainImage" style="width:300px;" src="<?php echo e(asset('images/backend_img/products/medium/'.$productDetails->image)); ?>" style="height:300px;" />
            </a>
    </div>
    </div>
    <div id="similar-product" class="carousel slide" data-ride="carousel">
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active thumbnails">
            <a href="<?php echo e(asset('images/backend_img/products/large/'.$productDetails->image)); ?>"
            data-standard="<?php echo e(asset('images/backend_img/products/small/'.$productDetails->image)); ?>">
            <img class="changeImage" style="width:80px;" src="<?php echo e(asset('images/backend_img/products/small/'.$productDetails->image)); ?>" alt="" />
                </a>
            <?php $__currentLoopData = $productAltimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altImages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(asset('images/backend_img/products/large/'.$altImages->image)); ?>" 
            data-standard="<?php echo e(asset('images/backend_img/products/small/'.$altImages->image)); ?>">
            <img class="changeImage" style="width:120px;cursor:pointer;" src="<?php echo e(asset('images/backend_img/products/small/'.$altImages->image)); ?>" alt="">
            </a>        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
    </div>

</div>
<div class="col-sm-7">
<form name="addtocartForm" id="addtocartForm" action="<?php echo e(url('add-cart')); ?>" method="post"> <?php echo e(csrf_field()); ?>

<input type="hidden" name="product_id" value="<?php echo e($productDetails->id); ?>">
<input type="hidden" name="product_name" value="<?php echo e($productDetails->product_name); ?>">
<input type="hidden" name="product_code" value="<?php echo e($productDetails->product_code); ?>">
<input type="hidden" name="product_color" value="<?php echo e($productDetails->product_color); ?>">
<input type="hidden" name="price" id="price" value="<?php echo e($productDetails->price); ?>">
    <div class="product-information"> <!--/product-information-->
        <img src="images/product-details/new.jpg" class="newarrival" alt="" />
    <h2><?php echo e($productDetails->product_name); ?></h2>
        <p>Product Code: <?php echo e($productDetails->product_code); ?></p>
        <p>
            <select id="selSize" name="size" style="width:150px;">
                <option value="">Select Size</option>
                <?php $__currentLoopData = $productDetails->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sizes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($productDetails->id); ?>-<?php echo e($sizes->size); ?>"><?php echo e($sizes->size); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <img src="images/product-details/rating.png" alt="" />
        <span>
        <span id="getPrice">INR <?php echo e($productDetails->price); ?></span>
            <label>Quantity:</label>
            <input type="text" name="quantity" value="1" />
            <?php if($total_stock>0): ?>
            <button type="submit" class="btn btn-fefault cart" id="cartButton">
                <i class="fa fa-shopping-cart"></i>
                Add to cart
            </button>
            <?php endif; ?>
        </span>
        <p><b>Availability:</b><span id="Availability"><?php if($total_stock>0): ?> In Stock <?php else: ?> Out of Stock <?php endif; ?></p></span>
        <p><b>Condition:</b> New</p>
        <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
    </div><!--/product-information-->
    </form>
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
<div class="col-sm-12">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
        <li><a href="#care" data-toggle="tab">Material & Care</a></li>
        <li><a href="#delivery" data-toggle="tab">Delivery Options</a></li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade active in" id="description" >
    <div class="col-sm-12">
        <p><?php echo e($productDetails->description); ?></p>
    </div>
    </div>
    
    <div class="tab-pane fade" id="care" >
    <div class="col-sm-12">
        <p><?php echo e($productDetails->care); ?></p>
    </div>  
    </div>
    
    <div class="tab-pane fade" id="delivery" >
    <div class="col-sm-12">
            <p>100% Original Products <br>
                Cash on Delivery
            </p>
    </div>   
    </div>
    
</div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">recommended items</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $count=1; ?>
            <?php $__currentLoopData = $relatedProducts->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div <?php if($count==1){ ?> class="item active" <?php } else{ ?> class="item" <?php } ?>>	
            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img style="width:200px;" src="<?php echo e(asset('images/backend_img/products/small/'.$item->image)); ?>" alt="" />
                        <h2>INR <?php echo e($item->price); ?></h2>
                        <p><?php echo e($item->product_name); ?></p>
                        <a href="<?php echo e(url('product/'.$item->id)); ?>"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php $count++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
        </a>			
</div>
</div><!--/recommended_items-->

</div>
</div>
</div>
</section>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>