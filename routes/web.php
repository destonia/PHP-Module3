<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', [\App\Http\Controllers\ProductController::class,'index'])->name('index');
Route::prefix('cart')->group(function(){
    Route::get('{id}/add-to-cart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::get('{id}/remove-product', [\App\Http\Controllers\CartController::class, 'removeProduct'])->name('cart.removeProduct');
    Route::post('update',[\App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
    Route::get('delete',[\App\Http\Controllers\CartController::class,'deleteCart'])->name('cart.delete');
});
Route::prefix('admin')->group(function (){
    Route::prefix('products')->group(function (){
        Route::get('', [\App\Http\Controllers\admin\ProductController::class,'index'])->name('products.index');
        Route::get('/create', [\App\Http\Controllers\admin\ProductController::class,'add'])->name('products.add');
        Route::post('/store', [\App\Http\Controllers\admin\ProductController::class,'store'])->name('products.store');
        Route::get('/{id}/edit', [\App\Http\Controllers\admin\ProductController::class,'edit'])->name('products.edit');
        Route::post('/{id}/edit', [\App\Http\Controllers\admin\ProductController::class, 'update'])->name('products.update');
        Route::get('/{id}/delete', [\App\Http\Controllers\admin\ProductController::class, 'delete'])->name('products.delete');
    });
});

