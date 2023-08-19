<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/tambah', [ProductController::class, 'create'])->name('product.create');

Route::post('/product/tambah', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/edit/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
