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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('Admin/layout/master');
});
Route::get('bkp_admin','admin\AccountController@index');
Route::get('onetime_service','admin\ServiceController@onetimeService');
Route::get('continuous_service','admin\ServiceController@continuousService');
Route::post('continuous_service/create','admin\ServiceController@continuousServiceCreate');
