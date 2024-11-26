<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout');
// });


Route::get('/trangchu', function() {
    return view('layout');
});


Route::get('/tintuc', function() {
    return view('news');
});


Route::get('/trang-tin','App\Http\Controllers\NewsController@index');


Route::get('/gioi-thieu','App\Http\Controllers\NewsController@index2');

Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('trang-chu','App\Http\Controllers\NewsController@index2');

Route::get('/admin','App\Http\Controllers\AdminController@index');

Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard'); 

Route::post('/admin-dashboard','AdminController@dashboard'); 

Route::get('/logout','AdminController@logout');

//Category Product 
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product'); 

Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');

Route::get('/unactive-categoryproduct/{category_product_id}','CategoryProduct@unactive_category_product'); 
Route::get('/active-categoryproduct/{category_product_id}','CategoryProduct@active_category_product');


//Brand Product 
Route::get('/add-brand-product','BrandProduct@add_brand_product'); 
Route::get('/all-brand-product','BrandProduct@all_brand_product'); 
Route::post('/save-brand-product','BrandProduct@save_brand_product'); 
Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product'); 
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');


Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');

Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product'); 

Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');