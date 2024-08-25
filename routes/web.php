<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('home.about');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('home.contact');
