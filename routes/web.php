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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('front_end.product')
    ->with('product',Product::all());
});
Route::get('/contact', function () {
    return view('front_end.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/product/index',[ProductController::class, 'index'])->name('pro.index');
Route::get('admin/product/create',[ProductController::class, 'create'])->name('pro.create');
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);

