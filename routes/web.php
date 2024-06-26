<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return redirect()->route('brands.index');
});

Route::resource('brands', BrandController::class);
Route::resource('product-categories', ProductCategoryController::class);
Route::resource('products', ProductController::class);

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

