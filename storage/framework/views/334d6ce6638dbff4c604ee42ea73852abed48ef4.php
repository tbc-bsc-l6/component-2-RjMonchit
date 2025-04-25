

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
  <body>
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

            <div style="padding-right:30px;" class="container-fluid page-body-wrapper">
              
               <div align="center" class="conatiner" >
               <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     <?php echo e(session()->get('message')); ?>

                      </div>
                     
                      <?php endif; ?>

               <table>
                  <tr style="background-color:grey;">
                      <td style="padding:20px;">Product Type</td>
                      <td style="padding:20px;">Title</td>
                      <td style="padding:20px;">Firstname</td>
                      <td style="padding:20px;">Surname/Band</td>
                      <td style="padding:20px;">Price</td>
                      <td style="padding:20px;">Page/Playlength</td>
                      <td style="padding:20px;">Image</td>
                      <td style="padding:20px;">Update</td>
                      <td style="padding:20px;">Delete</td>
                 </tr>
                    
                 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr align="center" style="background-color:black;">
                      <td><?php echo e($product->ptype); ?></td>
                      <td><?php echo e($product->title); ?></td>
                      <td><?php echo e($product->firstname); ?></td>
                      <td><?php echo e($product->surname); ?></td>
                      <td><?php echo e($product->price); ?></td>
                      <td><?php echo e($product->page); ?></td>
                      <td>
                          <img height="110 px" width="100 px" src="/productimage/<?php echo e($product->image); ?>">
                      </td>

                      <td>
                        <a class="btn btn-primary" href="<?php echo e(url('updateview',$product->id)); ?>">Update</a>
                     </td>

                     <td>
                        <a class="btn btn-danger" href="<?php echo e(url('deleteproduct',$product->id)); ?>">Delete</a>
                     </td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 

</table> 

                 <div class="d-flex justify-content-center">  
                <?php echo $data->links(); ?>

                 </div>
                 
               </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>


<?php /**PATH /Users/user/Desktop/laravel/skconsultings/resources/views/admin/showproduct.blade.php ENDPATH**/ ?>