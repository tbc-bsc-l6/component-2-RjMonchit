

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

  </head>
  <body>
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

            <div style="padding-right:30px;" class="container-fluid page-body-wrapper">
              
               <div align="center" class="conatiner" >
               @if(session()->has('message'))
                    <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     {{session()->get('message')}}
                      </div>
                     
                      @endif

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
                    
                 @foreach($data as $product)
                 <tr align="center" style="background-color:black;">
                      <td>{{$product->ptype}}</td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->firstname}}</td>
                      <td>{{$product->surname}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->page}}</td>
                      <td>
                          <img height="110 px" width="100 px" src="/productimage/{{$product->image}}">
                      </td>

                      <td>
                        <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                     </td>

                     <td>
                        <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                     </td>
                 </tr>
                 @endforeach
                 

</table> 

                 <div class="d-flex justify-content-center">  
                {!! $data->links()!!}
                 </div>
                 
               </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        @include('admin.script')
  </body>
</html>


