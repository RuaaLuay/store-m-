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
