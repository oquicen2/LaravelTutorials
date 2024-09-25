<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('home.about');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('home.contact');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name('image.index');
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name('image.save');

Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name('imagenotdi.index');
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name('imagenotdi.save');

// Parcial 1

Route::get('/register-fish', 'App\Http\Controllers\Parcial1Controller@registerFish')->name('parcial1.registerFish');

Route::post('/register-fish/save', 'App\Http\Controllers\Parcial1Controller@saveFish')->name('parcial1.saveFish');

Route::get('/list-fish', 'App\Http\Controllers\Parcial1Controller@listFish')->name('parcial1.listFish');

Route::get('/fish-statistics', 'App\Http\Controllers\Parcial1Controller@fishStatistics')->name('parcial1.fishStatistics');


Auth::routes();
