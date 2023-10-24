<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/',  [ProductController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products', [ProductController::class, 'store'])->name('product.store');
Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');





Auth::routes();


