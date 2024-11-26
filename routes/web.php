<?php

use Illuminate\Support\Facades\Route;

Route::get('/trangchu', function() {
    return view('layout');
});

Route::get('/tintuc', function() {
    return view('news');
});

Route::get('/trang-tin', [App\Http\Controllers\NewsController::class, 'index']);

Route::get('/gioi-thieu', [App\Http\Controllers\NewsController::class, 'index2']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('trang-chu', [App\Http\Controllers\NewsController::class, 'index2']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_dashboard']); 

Route::post('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']); 

Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);

// Category Product Routes
Route::get('/add-category-product', [App\Http\Controllers\CategoryProduct::class, 'add_category_product']); 
Route::get('/all-category-product', [App\Http\Controllers\CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [App\Http\Controllers\CategoryProduct::class, 'save_category_product']);
Route::get('/unactive-categoryproduct/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-categoryproduct/{category_product_id}', [App\Http\Controllers\CategoryProduct::class, 'active_category_product']);

// Brand Product Routes
Route::get('/add-brand-product', [App\Http\Controllers\BrandProduct::class, 'add_brand_product']); 
Route::get('/all-brand-product', [App\Http\Controllers\BrandProduct::class, 'all_brand_product']);
Route::post('/save-brand-product', [App\Http\Controllers\BrandProduct::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProduct::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProduct::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProduct::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [App\Http\Controllers\BrandProduct::class, 'delete_brand_product']);
