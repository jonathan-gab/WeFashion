<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index.blade.php', [ProductController::class, 'index'])->name('index');
Route::get('productPage.blade.php', [ProductPageController::class, 'productPage'])->name('productPage');
Route::get('adminAuthentication.blade.php', [Authentication::class, 'admin'])->name('admin');
Route::get('modificationController.blade.php', [App\Http\Controllers\ModificationProductController::class, 'modificationController'])->name('modificationController');



Auth::routes();

Route::get('admin',[LoginController::class, 'showLoginForm'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


