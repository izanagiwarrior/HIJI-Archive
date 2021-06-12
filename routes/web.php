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

// LANDING
Route::get('/', function () {
    return view('frontPage');
})->name('frontPage');

// AUTH
Auth::routes();

// HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// STATISTIK
Route::get('/statistik', [App\Http\Controllers\HomeController::class, 'statistik'])->name('statistik');
Route::get('/statistikCategory', [App\Http\Controllers\HomeController::class, 'statistikCategory'])->name('statistikCategory');
Route::get('/statistikProduct', [App\Http\Controllers\HomeController::class, 'statistikProduct'])->name('statistikProduct');

// PRODUK
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/product/find', [App\Http\Controllers\HomeController::class, 'find'])->name('find');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'detailProduct'])->name('detail');
Route::get('/category', [App\Http\Controllers\HomeController::class, 'category'])->name('category');

// TAMBAH PRODUK
Route::get('/addProduct', [App\Http\Controllers\HomeController::class, 'addProduct'])->name('addProduct');
Route::post('/addProduct', [App\Http\Controllers\HomeController::class, 'addProductProcess'])->name('addProductProcess');

// UPDATE PRODUK
Route::get('/updateProduct/{id}', [App\Http\Controllers\HomeController::class, 'updateProduct'])->name('updateProduct');
Route::post('/updateProduct/{id}', [App\Http\Controllers\HomeController::class, 'updateProductProcess'])->name('updateProductProcess');

// HAPUS PRODUK
Route::post('/deleteProduct', [App\Http\Controllers\HomeController::class, 'deleteProduct'])->name('deleteProduct');

// ORDER
Route::get('/order', [App\Http\Controllers\HomeController::class, 'orderList'])->name('orderList');
Route::post('/product/{id}', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::post('/deleteOrder', [App\Http\Controllers\HomeController::class, 'deleteOrder'])->name('deleteOrder');
Route::get('/orderCategory', [App\Http\Controllers\HomeController::class, 'order_category'])->name('order_category');

// MARKETPLACE
Route::get('/marketplace', [App\Http\Controllers\HomeController::class, 'marketplace'])->name('marketplace');
Route::get('/addMarketplace', [App\Http\Controllers\HomeController::class, 'addMarketplace'])->name('addMarketplace');
Route::post('/addMarketplace', [App\Http\Controllers\HomeController::class, 'addMarketplaceProcess'])->name('addMarketplaceProcess');
Route::get('/updateMarketplace/{id}', [App\Http\Controllers\HomeController::class, 'updateMarketplace'])->name('updateMarketplace');
Route::post('/updateMarketplace/{id}', [App\Http\Controllers\HomeController::class, 'updateMarketplaceProcess'])->name('updateMarketplaceProcess');
Route::post('/deleteMarketplace', [App\Http\Controllers\HomeController::class, 'deleteMarketplace'])->name('deleteMarketplace');

// PROFILE
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/profile/edit/{id}', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/edit/{id}', [App\Http\Controllers\HomeController::class, 'editProfileProcess'])->name('editProfileProcess');

// ADMIN
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/user', [App\Http\Controllers\HomeController::class, 'user'])->name('admin.user')->middleware('is_admin');
Route::post('admin/userDelete', [App\Http\Controllers\HomeController::class, 'destroyUser'])->name('admin.userDelete')->middleware('is_admin');
Route::get('admin/edit/{id}', [App\http\Controllers\HomeController::class, 'update_user'])->name('update.user')->middleware('is_admin');
Route::post('admin/edit/{id}', [App\http\Controllers\HomeController::class, 'update_user_process'])->name('update.user.process')->middleware('is_admin');