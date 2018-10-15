<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Brand;
use Image;
use File;

class BrandController extends Controller
{
  public function index()
  {
      $brand = Brand::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.brands.index',compact('brand'));
  }
  public function brand()
  {
    return view('ecommerce.backend.pages.brands.create');
  }
  public function store(Request $request)
  {

    $request->validate([
      'title' => 'required',
      'image' => 'nullable|image',
    ],
    [
      'title.required' => 'please provided brand name',
      'image.image' => 'please provided valid image',
    ]);
    $brand = new Brand();
     $brand->title = $request->title;
    $brand->description = $request->description;

//insert images also
if($request->hasFile('image')){

     $image = $request->file('image');
      $img = $image->getClientOriginalName();
      $location= public_path('images/brands/'.$img);
      Image::make($image)->save($location);
      $brand->image = $img;

  }


    $brand->save();
    session()->flash('success', 'brand added successfully successful!');
  return redirect()->route('backend.brand');

  }

  public function edit($product_id)
  {

    $brand = Brand::find($product_id);
    if(!is_null($brand)){
        return view('ecommerce.backend.pages.brands.edit',compact('brand'));
    }
    else{
        return back();
    }

}


public function update(Request $request,$product_id)
{

  $request->validate([
    'title' => 'required',
    'image' => 'nullable|image',
  ],
  [
    'title.required' => 'please provided brand name',
    'image.image' => 'please provided valid image',
  ]);
  $brand =  Brand::find($product_id);
   $brand->title = $request->title;
  $brand->description = $request->description;
//insert images also
if($request->hasFile('image')){

 $image = $request->file('image');
    if(File::exists('images/brands/'.$brand->$image)){
      File::delete('images/brands/'.$brand->$image);
    }

    $img = $image->getClientOriginalName();
    $location= public_path('images/brands/'.$img);
    Image::make($image)->save($location);
    $brand->image = $img;

}
  $brand->save();
  session()->flash('success', 'brand added successfully successful!');
return redirect()->route('backend.brand');

}

public function delete(Request $request,$product_id)
{
     $brand = Brand::find($product_id);
     $image = $request->file('image');

    if(!is_null($brand)){
        if(File::exists('images/brands/'.$brand->$image)){
          File::delete('images/brands/'.$brand->$image);
        }
        $brand->delete();
    }
    session()->flash('success','brand has deleted successfully');
    return back();
}

}
