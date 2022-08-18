<?php

use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
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


//start  อาจารย์สา//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return ('หน้าเกี่ยวกับเรา');
});


Auth::routes();

//profile//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin index//
Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

//user//
Route::get('/admin/user/index',[Usercontroller::class, 'index'])->name('user.index');
Route::get('/admin/user/edit/{id}',[Usercontroller::class, 'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[Usercontroller::class, 'update'])->name('user.update');
Route::get('/admin/user/delete/{id}',[Usercontroller::class, 'delete'])->name('user.delete');
//category//
Route::get('/admin/category/index',[Categorycontroller::class, 'index'])->name('category.index');
Route::get('/admin/category/create',[Categorycontroller::class, 'createform'])->name('category.create');

//product//
Route::get('/admin/product/index',[Productcontroller::class, 'index'])  ->name('product.index');
Route::get('/admin/product/create',[Productcontroller::class, 'createform'])->name('product.create');

//end อาจารย์สา//


// //start promote อาจารย์เดียร//
// Route::view('/', 'promotepage.home')->name('home');

// //end promote อาจารย์เดียร์// 