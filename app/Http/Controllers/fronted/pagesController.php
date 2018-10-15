<?php

namespace App\Http\Controllers\fronted;

use Illuminate\Http\Request;
use App\models\Product;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function index(){
        $products = Product::orderby('id','desc')->paginate(3);
    return view('ecommerce.frontend.pages.index')->with('products',$products);
    }
    public function contact(){
    return view('ecommerce.frontend.pages.contact');
    }
    public function search(Request $request){
      $search = $request->search;
      $products = Product::orWhere('title','like','%'.$search.'%')
      ->orWhere('description','like','%'.$search.'%')
      ->orWhere('price','like','%'.$search.'%')
      ->orWhere('slug','like','%'.$search.'%')
      ->orderby('id','desc')
      ->paginate(3);

     return view('ecommerce.frontend.pages.products.search',compact('search','products'));
    }

}
