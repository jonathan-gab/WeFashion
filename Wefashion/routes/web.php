<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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

// Route

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(ProductsController::class)->group(function(){
    Route::get('/', 'index')->name('products.list');
    Route::get('/produit/{id}', 'getDetailsProduct')->name('product.details')->where(['id'=>'[0-9]+']);
    Route::get('/produits/categorie/{id}', 'getCategoryProduct')->name('products.category')->where(['id'=>'[0-9]+']);
    Route::get('/produits/soldes', 'getDiscountProduct')->name('products.discount');
});

Auth::routes();

Route::get('admin',[LoginController::class, 'showLoginForm'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

