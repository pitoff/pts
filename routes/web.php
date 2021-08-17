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

use App\Http\Controllers\CategoryController;

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
    Route::get('/category', 'CategoryController@index')->name('admin.category');
    Route::get('/category/create', 'CategoryController@create')->name('admin.createCategory');
    Route::post('/category', 'CategoryController@store')->name('admin.storeCategory');

    Route::get('/clothing', 'AdminController@index')->name('admin.clothing');
    Route::get('/clothing/create', 'AdminController@create')->name('admin.addclothing');
});
