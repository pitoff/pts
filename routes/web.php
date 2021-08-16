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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'HomeController@about')->name('home.about');

Route::get('/register', 'RegisterController@create')->name('home.register');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'RegisterController@login')->name('home.login');
Route::post('/login', 'RegisterController@createLogin');
Route::get('/logout', 'RegisterController@logout')->name('logout');

// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/shop/index', 'ShopController@index')->name('shop.index');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
});
