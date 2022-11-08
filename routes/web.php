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

Route::get('/', function () {
    return view('MainViews.index');
});

Route::get('shop/single', function () {
    return view('MainViews.shop-single');
});

Route::get('about', function () {
    return view('MainViews.about');
});

Route::get('shop/contact', function () {
    return view('MainViews.contact');
});

Route::get('shop', function () {
    return view('MainViews.shop');
});

Route::get('Admin/index', function () {
    return view('Admin.add-product');
});

Route::get('product/index', 'App\Http\Controllers\productController@index');
Route::post('product/delete/{id}', 'App\Http\Controllers\productController@destroy');
Route::post('product/update/{id}', 'App\Http\Controllers\productController@update');
Route::get('product/edit/{id}', 'App\Http\Controllers\productController@edit');
Route::post('product/delete/{id}', 'App\Http\Controllers\productController@destroy');

