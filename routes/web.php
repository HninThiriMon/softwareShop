<?php

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



Route::get('test', function () {
    return view('Admin/layout/master');
});
Route::get('bkp_admin','admin\AccountController@index');
Route::get('onetime_service','admin\ServiceController@onetimeService');
Route::get('continuous_service','admin\ServiceController@continuousService');

// Frontend

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/login', function () {
    return view('frontend.login');
});


Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/welcome', function () {
    return view('frontend.welcome');
});

Route::get('/thank', function () {
    return view('frontend.thank');
});

Route::get('/product-list', function () {
    return view('frontend.product-list');
});

Route::get('/package-list', function () {
    return view('frontend.package-list');
});






