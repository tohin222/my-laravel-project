<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use Image;
use File;

class CategoryController extends Controller
{
  public function index()
  {
      $catagory = Category::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.catagory.index',compact('catagory'));
  }
  public function catagory()
  {
      $main_catagory = Category::orderby('id','desc')->get();
    return view('ecommerce.backend.pages.catagory.create',compact('main_catagory'));
  }
  public function store(Request $request)
  {

    $request->validate([
      'title' => 'required',
      'image' => 'nullable|image',
    ],
    [
      'title.required' => 'please provided catagory name',
      'image.image' => 'please provided valid image',
    ]);
    $catagory = new Category();
     $catagory->title = $request->title;
    $catagory->description = $request->description;
    $catagory->parent_id = $request->parent_id;
//insert images also
if($request->hasFile('image')){

     $image = $request->file('image');
      $img = $image->getClientOriginalName();
      $location= public_path('images/catagories/'.$img);
      Image::make($image)->save($location);
      $catagory->image = $img;

  }


    $catagory->save();
    session()->flash('success', 'catagory added successfully successful!');
  return redirect()->route('backend.catagory');

  }

  public function edit($product_id)
  {
     $main_catagory = Category::orderby('id','desc')->get();
    $catagory = Category::find($product_id);
    if(!is_null($catagory)){
        return view('ecommerce.backend.pages.catagory.edit',compact('catagory','main_catagory'));
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
    'title.required' => 'please provided catagory name',
    'image.image' => 'please provided valid image',
  ]);
  $catagory =  Category::find($product_id);
   $catagory->title = $request->title;
  $catagory->description = $request->description;
  $catagory->parent_id = $request->parent_id;
//insert images also
if($request->hasFile('image')){

 $image = $request->file('image');
    if(File::exists('images/catagories/'.$catagory->$image)){
      File::delete('images/catagories/'.$catagory->$image);
    }

    $img = time();
    $location= public_path('images/catagories/'.$img);
    Image::make($image)->save($location);
    $catagory->image = $img;

}


  $catagory->save();
  session()->flash('success', 'catagory added successfully successful!');
return redirect()->route('backend.catagory');

}

public function delete(Request $request,$product_id)
{

     $catagory = Category::find($product_id);

     $image = $request->file('image');

    if(!is_null($catagory)){


      if($catagory->parent_id==NULL){
         $sub_catagory = Category::orderby('id','desc')->where('parent_id',$catagory->id)->get();
         echo $sub_catagory;
         foreach($sub_catagory as $sub) {

           //delete image
           if(File::exists('images/catagories/'.$sub->$image)){
             File::delete('images/catagories/'.$sub->$image);
           }
           $sub->delete();
         }
      }


        if(File::exists('images/catagories/'.$catagory->$image)){
          File::delete('images/catagories/'.$catagory->$image);
        }
        $catagory->delete();
    }
    session()->flash('success','product has deleted successfully');
    return back();
}

}
