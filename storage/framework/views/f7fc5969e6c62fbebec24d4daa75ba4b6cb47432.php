<?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     <?php echo e(session()->get('message')); ?>

                      </div>
                     
                      <?php endif; ?>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
             <form action="<?php echo e(url('search')); ?>" method="get" class ="form-inline" style="float:right; padding: 10px;">
             <?php echo csrf_field(); ?>
             <input class="form-control" type="search" name="search" placeholder="search">
             <input type="submit" value="search" class="btn btn-success">

            </form>
            </div>
          </div>

          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <div class="col-md-4">
            <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/<?php echo e($product->image); ?>" alt=""></a>
              <div class="down-content">
                <a href="#"><h4><?php echo e($product->title); ?></h4></a>
                <h6>$<?php echo e($product->price); ?></h6>
                <p>Page/Band:<?php echo e($product->page); ?></p>

                <form action="<?php echo e(url('addcart',$product->id)); ?>" method="POST">
                  <?php echo csrf_field(); ?> 
                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="">
                  <br>  
                <input type="submit" class="btn btn-danger" value="Add Cart">
                 </form>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
         
          <div class="d-flex justify-content-center">
            <?php echo $data->links(); ?>

           </div>

           

           
        </div>
      </div>
    </div><?php /**PATH /Users/user/Desktop/laravel/skconsultings/resources/views/user/product.blade.php ENDPATH**/ ?>