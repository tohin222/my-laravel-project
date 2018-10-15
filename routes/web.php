<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//for search


  //front in route
Route::get('/', 'fronted\pagesController@index')->name('index');
Route::get('/contact', 'fronted\pagesController@contact')->name('contact');


//product
Route::group(['prefix'=>'products'],function(){

  Route::get('/', 'fronted\ProductController@products')->name('products');
  Route::get('/show/{slug}', 'fronted\ProductController@slug')->name('products.show');
  Route::get('/search', 'fronted\pagesController@search')->name('search');
  //category routes
    Route::get('/categories}', 'fronted\CategoryController@index')->name('categories.index');
    Route::get('/categories/{id}', 'fronted\CategoryController@show')->name('categories.show');
  });

//backend route

Route::group(['prefix'=>'backend'],function(){

  //form
Route::get('/', 'backend\adminpagesController@index')->name('backend.index');


  //product crud routes
  Route::group(['prefix'=>'/product'],function(){
      Route::get('/manage', 'backend\adminProductController@index')->name('backend.products');
      Route::get('/manage/edit{product_id}', 'backend\adminProductController@edit')->name('backend.product.edit');
      Route::post('/store', 'backend\adminProductController@store')->name('backend.products.store');
      Route::post('/update/{product_id}', 'backend\adminProductController@update')->name('backend.products.update');
      Route::post('/delete/{product_id}', 'backend\adminProductController@delete')->name('backend.delete');
      Route::get('/create', 'backend\adminProductController@products')->name('backend.products.create');
    });
  //catagory crud routes
  Route::group(['prefix'=>'/catagories'],function(){
      Route::get('/manage', 'backend\CategoryController@index')->name('backend.catagory');
      Route::get('/manage/edit{product_id}', 'backend\CategoryController@edit')->name('backend.catagory.edit');
      Route::post('/store', 'backend\CategoryController@store')->name('backend.catagory.store');
      Route::post('/update/{product_id}', 'backend\CategoryController@update')->name('backend.catagory.update');
      Route::post('/delete/{product_id}', 'backend\CategoryController@delete')->name('backend.catagory.delete');
      Route::get('/create', 'backend\CategoryController@catagory')->name('backend.catagory.create');
    });
  //brand crud routes
  Route::group(['prefix'=>'/brands'],function(){
      Route::get('/manage', 'backend\BrandController@index')->name('backend.brand');
      Route::get('/manage/edit{product_id}', 'backend\BrandController@edit')->name('backend.brand.edit');
      Route::post('/store', 'backend\BrandController@store')->name('backend.brand.store');
      Route::post('/update/{product_id}', 'backend\BrandController@update')->name('backend.brand.update');
      Route::post('/delete/{product_id}', 'backend\BrandController@delete')->name('backend.brand.delete');
      Route::get('/create', 'backend\BrandController@brand')->name('backend.brand.create');
    });
  //division crud routes

  Route::group(['prefix'=>'/division'],function(){
      Route::get('/manage', 'backend\divisionController@index')->name('backend.division');
      Route::get('/manage/edit{division_id}', 'backend\divisionController@edit')->name('backend.division.edit');
      Route::post('/store', 'backend\divisionController@store')->name('backend.division.store');
      Route::post('/update/{division_id}', 'backend\divisionController@update')->name('backend.division.update');
      Route::post('/delete/{division_id}', 'backend\divisionController@delete')->name('backend.division.delete');
      Route::get('/create', 'backend\divisionController@division')->name('backend.division.create');
    });

  //district crud routes

  Route::group(['prefix'=>'/districts'],function(){
      Route::get('/manage', 'backend\districtController@index')->name('backend.district');
      Route::get('/manage/edit{district_id}', 'backend\districtController@edit')->name('backend.district.edit');
      Route::post('/store', 'backend\districtController@store')->name('backend.district.store');
      Route::post('/update/{district_id}', 'backend\districtController@update')->name('backend.district.update');
      Route::post('/delete/{district_id}', 'backend\districtController@delete')->name('backend.district.delete');
      Route::get('/create', 'backend\districtController@district')->name('backend.district.create');
    });



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
