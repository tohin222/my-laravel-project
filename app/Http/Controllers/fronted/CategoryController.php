<?php

namespace App\Http\Controllers\fronted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function show($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
          return view('ecommerce.frontend.pages.categories.show',compact('category'));
        }
        else{
          session()->flash('errors', 'not found!');
          return redirect('/');
        }
    }


}
