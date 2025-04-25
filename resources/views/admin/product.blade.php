

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

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
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

            <div class="container-fluid page-body-wrapper">
              
               <div class="conatiner" align="center">
                   <h1 class="title">Add Product<h1> 

                   @if(session()->has('message'))
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     {{session()->get('message')}}
                      </div>
                     
                      @endif

                   <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                   
                   @csrf
                   

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
        @include('admin.script')
  </body>
</html>
