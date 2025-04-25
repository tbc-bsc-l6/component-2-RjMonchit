
<!DOCTYPE html>
<html lang="en">
  <head>
   <base href="/public">

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

                   <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                   
                   @csrf
                   

                   <div style="padding:15px;">
                   <label for="ptype">Product Type:</label>
                        <select style="color:black;" id="ptype" name="ptype">
                        <option value="{{$data->ptype}}" >GAMES</option>
                        <option value="{{$data->ptype}}">CD</option>
                        <option value="{{$data->ptype}}">Books</option>
                        </select>
                    <div>
                    
                    <div style="padding:15px;">
                   <label>Product Title</label>
                    <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
                     </div>

                     <div style="padding:15px;">
                   <label>Firstname</label>
                     <input style="color:black;" type="text" name="firstname" value="{{$data->firstname}}">
                     </div>

                     <div style="padding:15px;">
                   <label>Surname/Band</label>
                     <input style="color:black;"  type="text" name="surname" value="{{$data->surname}}" required="">
                     </div>

                   <div style="padding:15px;">
                   <label>Price</label>
                     <input style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
                   </div>

                     <div style="padding:15px;">
                   <label>Pages/Playlength</label>
                     <input style="color:black;"  type="number" name="page" value="{{$data->page}}" required="">
                   </div>
                   
                   <div style="padding:15px;">
                   <label>Old Image</label>
                   <img height="100 px" width="100px" src="/productimage/{{$data->image}}">
                  </div>
                   <div style="padding:15px;">
                   <label>Change The Image</label>
                     <input  type="file" name="file" >
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
