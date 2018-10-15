<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\ProductImage;
use Image;
use App\Http\Controllers\Controller;

class adminpagesController extends Controller
{
    public function index()
    {
      return view('ecommerce.backend.pages.index');
    }
    
 }
