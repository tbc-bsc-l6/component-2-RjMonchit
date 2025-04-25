

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">

        .title
        {
            color:white;
            padding-top: 25px;
            font-size: 25px;
        }

        label{
          display: inline-block;
          width: 200px;
        }
    </style>
  </head>
  <body>
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

            <div class="container-fluid page-body-wrapper">
              
               <div class="conatiner" align="center">
                   <h1 class="title">Add Product<h1> 

                   <?php if(session()->has('message')): ?>
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     <?php echo e(session()->get('message')); ?>

                      </div>
                     
                      <?php endif; ?>

                   <form action="<?php echo e(url('uploadproduct')); ?>" method="post" enctype="multipart/form-data">
                   
                   <?php echo csrf_field(); ?>
                   

                   <div style="padding:15px;">
                   <label for="ptype">Product Type:</label>
                        <select style="color:black;" id="ptype" name="ptype">
                        <option value="game" selected>GAMES</option>
                        <option value="cd">CD</option>
                        <option value="book">Books</option>
                        </select>
                    <div>
                    
                    <div style="padding:15px;">
                   <label>Product Title</label>
                    <input style="color:black;" type="text" name="title" placeholder="Title" required="">
                     </div>

                     <div style="padding:15px;">
                   <label>Firstname</label>
                     <input style="color:black;" type="text" name="firstname" placeholder="firstname(optional)">
                     </div>

                     <div style="padding:15px;">
                   <label>Surname/Band</label>
                     <input style="color:black;"  type="text" name="surname" placeholder="surname/Band" required="">
                     </div>

                   <div style="padding:15px;">
                   <label>Price</label>
                     <input style="color:black;" type="number" name="price" placeholder="price" required="">
                   </div>

                     <div style="padding:15px;">
                   <label>Pages/Playlength</label>
                     <input style="color:black;"  type="number" name="page" placeholder="pages/playlength" required="">
                   </div>

                   <div style="padding:15px;">
                   
                     <input  type="file" name="file" required="">
                   </div>

                   <div style="padding:15px;">
                   <input class="btn btn-success" type="submit" name="submit" vlaue="Add New">
                   </div>
                   
      </form>


                  </div>
               </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /Users/user/Desktop/laravel/skconsultings/resources/views/admin/product.blade.php ENDPATH**/ ?>