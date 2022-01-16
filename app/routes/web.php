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

Route::prefix('/')->name("front.")->group(function () {
    Route::get('/', [App\Http\Controllers\front\HomeController::class,'index'])->name("home");
    Route::get('/products',  [App\Http\Controllers\front\ProductController::class,'index'])->name("products");
    Route::get('/product/{product:id}/{name}', [App\Http\Controllers\front\ProductController::class,'find'])->name("product");
    Route::get('/contact', function () { return view("front.contact");})->name("contact");
    Route::post('/contact', [App\Http\Controllers\front\ContactController::class,'send'])->name("contact.post");
    Route::get('/about', function () { return view("front.about");})->name("about");
});

Auth::routes([
    "register"=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix("/admin")->name("admin.")->group(function () {
    Route::prefix('/product')->name("product.")->group(function () {
        Route::get('/', [App\Http\Controllers\back\ProductController::class,'index'])->name("all");
        Route::get('/add', [App\Http\Controllers\back\ProductController::class,'create'])->name("add");
        Route::post('/store', [App\Http\Controllers\back\ProductController::class,'store'])->name("add.post");
        Route::get('/show/{product:id}', [App\Http\Controllers\back\ProductController::class,'show'])->name("show");
        Route::get('/update/{product:id}', [App\Http\Controllers\back\ProductController::class,'update'])->name("update");
        Route::get('/delete/{product:id}', [App\Http\Controllers\back\ProductController::class,'destroy'])->name("delete");
    });
});