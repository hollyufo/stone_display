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


Route::get('/test', [App\Http\Controllers\front\ProductController::class,'create']);