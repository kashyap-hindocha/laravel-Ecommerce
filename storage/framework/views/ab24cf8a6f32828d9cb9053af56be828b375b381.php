<?php $__env->startSection('content'); ?>

<section id="slider">  <!--slider-->
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            <li data-target="#slider-carousel" data-slide-to="2"></li>
            <li data-target="#slider-carousel" data-slide-to="3"></li>
            <li data-target="#slider-carousel" data-slide-to="4"></li>
            <li data-target="#slider-carousel" data-slide-to="5"></li>
            <li data-target="#slider-carousel" data-slide-to="6"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="item active">
            <img src="<?php echo e(url('images/frontend_img/banners/banner1.jpg')); ?>" alt="">
            </div>
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner2.jpg')); ?>" alt="">
            </div>
            
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner3.jpg')); ?>" alt="">
            </div>
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner4.jpg')); ?>" alt="">
            </div>
            
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner5.jpg')); ?>" alt="">
            </div>
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner6.jpg')); ?>" alt="">
            </div>
            
            <div class="item">
            <img src="<?php echo e(url('images/frontend_img/banners/banner7.jpg')); ?>" alt="">
            </div>
            
        </div>
        
        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    
</div>
</div>
</div>
</section>
<!--/slider-->

<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
<?php echo $__env->make('layouts.FrontLayout.front_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">All Display Products</h2>
        <?php $__currentLoopData = $productsAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="<?php echo e(asset('images/backend_img/products/small/'.$product->image)); ?>" alt="" />
                        <h2>INR <?php echo e($product->price); ?></h2>
                        <p><?php echo e($product->product_name); ?></p>
                        <a href="<?php echo e(url('product/'.$product->id)); ?>" class="btn btn-default add-to-cart">Detail Page</a>
                        </div>
                        <!--<div class="product-overlay">
                            <div class="overlay-content">
                                <h2>INR <?php echo e($product->price); ?></h2>
                                <p><?php echo e($product->product_name); ?></p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>-->
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!--features_items-->
    <?php echo e($productsAll->links()); ?>

</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayout.front_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>