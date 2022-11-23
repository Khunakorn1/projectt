<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return ('หน้าเกี่ยวกับเรา');
// });

Route::get('/', [App\Http\Controllers\HomePromoteController::class, 'index'])->name('promotepage.home');

Route::get('/about', [App\Http\Controllers\AboutPromoteController::class, 'index'])->name('promotepage.about');

Route::get('/shop', [App\Http\Controllers\ShopPromoteController::class, 'index'])->name('promotepage.shop');

Route::get('/portfolio', [App\Http\Controllers\PortfolioPromoteController::class, 'index'])->name('promotepage.portfolio');

Route::get('/contact', [App\Http\Controllers\ContactPromoteController::class, 'index'])->name('promotepage.contact');

Auth::routes();
// //profile//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //admin index//
Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

// //user//
Route::get('/admin/user/index',[Usercontroller::class, 'index'])->name('user.index');
Route::get('/admin/user/edit/{id}',[Usercontroller::class, 'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[Usercontroller::class, 'update'])->name('user.update');
Route::get('/admin/user/delete/{id}',[Usercontroller::class, 'delete'])->name('user.delete');
// //category//
Route::get('/admin/category/index',[Categorycontroller::class, 'index'])->name('category.index');
Route::get('/admin/category/create',[Categorycontroller::class, 'createform'])->name('category.create');
Route::post('/admin/category/insert',[CategoryController::class,'insert'])->name('category.insert');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
// //product//
Route::get('/admin/product/index',[ProductController::class, 'index'])  ->name('product.index');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');
Route::post('/admin/product/insert',[ProductController::class,'insert'])->name('product.insert');
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/admin/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::post('/admin/product/update/{id}',[ProductController::class,'update'])->name('product.update');
// //content//
Route::get('/admin/content/index',[ContentController::class,'index'])->name('content.index');
Route::get('/admin/content/create',[ContentController::class,'createfome'])->name('content.create');
Route::post('/admin/content/insert',[ContentController::class,'insert'])->name('content.insert');
Route::get('/admin/content/edit/{id}',[ContentController::class,'edit'])->name('content.edit');
Route::get('/admin/content/delete/{id}',[ContentController::class,'delete'])->name('content.delete');
Route::post('/admin/content/update/{id}',[ContentController::class,'update'])->name('content.update');

// //about//
Route::get('/admin/about/index',[AboutController::class,'index'])->name('about.index');
Route::get('/admin/about/create',[AboutController::class,'createfome'])->name('about.create');
Route::post('/admin/about/insert',[AboutController::class,'insert'])->name('about.insert');
Route::get('/admin/about/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
Route::get('/admin/about/delete/{id}',[AboutController::class,'delete'])->name('about.delete');
Route::post('/admin/about/update/{id}',[AboutController::class,'update'])->name('about.update');
// end อาจารย์สา//


// //start promote อาจารย์เดียร//
// Route::view('/', 'promotepage.home')->name('home');

// //end promote อาจารย์เดียร์// 