<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'Home'])->name('Home');

Route::get('/category/add',[CategoryController::class,'addCategory'])->name('Category');
Route::post('/category/add',[CategoryController::class,'CategoryAdd'])->name('add-category');

Route::get('/product/add',[ProductController::class,'addProduct'])->name('product');
Route::post('/product/add',[ProductController::class,'ProductAdd'])->name('add-product');

Route::get('/product/show/{id}',[ProductController::class,'updateProduct'])->name('product');
Route::post('/product/show/{id}',[ProductController::class,'ProductUpdate'])->name('add-product');








Route::get('show',function(){
   $category = \App\Models\Category::find(2);
    dd($category->Products);
});
