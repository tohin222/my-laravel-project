<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\ProductImage;
use Image;
use App\Http\Controllers\Controller;

class adminProductController extends Controller
{
  public function index()
  {
      $products = Product::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.products.index')->with('products',$products);
  }

  public function products()
  {
    return view('ecommerce.backend.pages.products.create');
  }

    public function edit($product_id)
    {
        $products = Product::find($product_id);
      return view('ecommerce.backend.pages.products.edit')->with('products',$products);
    }


    public function store(Request $request)
    {
      $request->validate([
    'title' => 'required',
    'description' => 'required',
    'quantity' => 'required',
    'price' => 'required',
    'category_id' => 'required',
    'brand_id' => 'required',
    'image' => 'required',

      ]);

      $product = new Product;
      $product->title = $request->title;
      $product->description = $request->description;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->slug = str_slug($request->title);

      $product->category_id = $request->category_id;
      $product->brand_id = $request->brand_id;
      $product->admin_id = 1;
      $product->save();

      if(count($request->image)>0){
        foreach ($request->image as $image) {
          //if($request->hasFile('product_image')){
           //$image = $request->file('image');
            $img = $image->getClientOriginalName();
            $location= public_path('images/products/'.$img);
            Image::make($image)->save($location);


            $image = new ProductImage;
            $image->product_id = $product->id;
            $image->image = $img;
            $image->save();
          //}
        }
      }
  session()->flash('success', 'Product added successfully successful!');
      return back();
    }
    public function update(Request $request,$product_id)
    {
      $request->validate([
    'title' => 'required',
    'description' => 'required',
    'quantity' => 'required',
    'price' => 'required',
    'category_id' => 'required',
    'brand_id' => 'required',
      ]);



      $product = Product::find($product_id);
      $product->title = $request->title;
      $product->description = $request->description;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->category_id = $request->category_id;
      $product->brand_id = $request->brand_id;
      $product->save();

      session()->flash('success', 'Product added successfully successful!');
      return redirect()->route('backend.products');
    }


    public function delete($product_id)
    {
        $products = Product::find($product_id);
        if(!is_null($products)){
          $products->delete();
        }
        session()->flash('success','product has deleted successfully');
        return back();
    }
}
