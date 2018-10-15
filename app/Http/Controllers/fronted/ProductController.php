<?php

namespace App\Http\Controllers\fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;

class ProductController extends Controller
{
  public function products(){
    $products = Product::orderby('id','desc')->paginate(3);
  return view('ecommerce.frontend.pages.products.index')->with('products',$products);
  }
  public function slug($slug){
    $product = Product::where('slug',$slug)->first();
    if(!is_null($product)){
      return view('ecommerce.frontend.pages.products.show',compact('product'));
    }
    else{
      session()->flash('errors','There is not product in availble');
      return redirect()->route('products');
    }


  }



}
