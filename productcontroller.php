<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productcontroller extends Controller
{
    //
     public function addproduct(Request $request)
    {
    	$p = new Product();
    	$p->sku= $request->t1;
    	$p->name= $request->t2;
    	$p->price= $request->t3;
    	$p->category= $request->t4;
    	$p->qty= $request->t5;
    	$p->image= $request->t6;
    	
    	
    	$p->save();
    	return redirect('test/productshow');
    }
     public function disproduct()
    {
        $show=Product::select('*')->get();
        return redirect('test/productshow')->with('show',$show);
        //echo $publicth;
    }
    public function update(Request $request,$id)
   {
     $up=Product::find($id);
     $up->sku= $request->t1;
        $up->name= $request->t2;
        $up->price= $request->t3;
        $up->category= $request->t4;
        $up->qty= $request->t5;
        $up->image= $request->t6;
        $up->save();
     
     return redirect('test/productshow');
            
    
   }
    
   
   
}
