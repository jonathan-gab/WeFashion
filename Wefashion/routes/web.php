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


Route::get('index.blade.php', [ProductController::class, 'index'])->name('index');
Route::get('productPage.blade.php', [ProductPageController::class, 'productPage'])->name('productPage');
// Route::get('adminAuthentication.blade.php', [Authentication::class, 'admin'])->name('admin');
Route::get('index.blade.php', [IndexController::class, 'index'])->name('index');

Route::controller(ProductsController::class)->group(function(){
    Route::get('/', 'index')->name('products.list');
    Route::get('/produit/{id}', 'getDetailsProduct')->name('product.show')->where(['id'=>'[0-9]+']);
    // Route::get('/produits/categorie/{id}', 'getByCategoryId')->name('product.category')->where(['id'=>'[0-9]+']);
    // Route::get('/produits/soldes', 'getByStateProduct')->name('product.state');
});

Auth::routes();

Route::get('admin',[LoginController::class, 'showLoginForm'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

