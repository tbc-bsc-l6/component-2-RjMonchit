<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product'); 
    }
    public function showproduct()
    {   
        $data=product::paginate(3);
        return view('admin.showproduct',compact('data')); 
    }

    public function uploadproduct(Request $request)
    {
        
        
        $data=new product;



        $data->ptype=$request->ptype;

        $data->title=$request->title;
        
        $data->firstname=$request->firstname;
        $data->surname=$request->surname;
        $data->price=$request->price;
        $data->page=$request->page;

        $image=$request->file;
         
        $imagename=time().'.'.$image->guessExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->save();

        return redirect()->back()->with('message','Product Added Sucessfully'); 
          
         
         
    }

    public function deleteproduct($id)
    {
      $data=product::find($id);
      $data->delete();
      return redirect()->back()->with('message','Product Deleted');
  

    }

    public function updateview($id)
    
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));

    }

    public function updateproduct(Request $request,$id)

    {
      $data=product::find($id);
      

      $data->ptype=$request->ptype;

      $data->title=$request->title;
      
      $data->firstname=$request->firstname;
      $data->surname=$request->surname;
      $data->price=$request->price;
      $data->page=$request->page;
      
     
      
      $image=$request->file;
       
      if($image)
      {
      $imagename=time().'.'.$image->guessExtension();

      $request->file->move('productimage',$imagename);

      $data->image=$imagename;
    
      }
      $data->save();

      return redirect()->back()->with('message','Product updated Sucessfully');

    }
    

}
