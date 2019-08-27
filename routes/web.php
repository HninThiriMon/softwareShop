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
    return view('home');
});
Route::get('user/register','Auth\RegisterController@show');
Route::post('user/register','Auth\RegisterController@register');
Route::get('user/logout','Auth\LoginController@logout');
Route::get('user/login','Auth\LoginController@show');
Route::post('user/login','Auth\LoginController@login')->name('login');


Route::group(['prefix' => 'bkp','namespace'=>'admin','middleware'=>'manager'], function () {

    Route::get('bkp_admin','AccountController@index');
    Route::get('onetime_service','ServiceController@onetimeService');
    Route::get('continuous_service','ServiceController@continuousService');
    Route::post('continuous_service/create','ServiceController@continuousServiceCreate');
    Route::get('continuous_service/show','ServiceController@continuousServiceShow');

  });

Route::resource('dtable-posts', 'dtable\OneTimeServiceAjaxCrudController');
Route::get('dtable-posts/destroy/{id}', 'dtable\OneTimeServiceAjaxCrudController@destroy');

// Frontend

// Route::get('/', function () {
//     return view('frontend.home');
// });

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


                        
Route::get('test', function () {
    return view('test');
});








