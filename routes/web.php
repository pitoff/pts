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

Route::get('/login', 'RegisterController@login')->name('login');
Route::post('/login', 'RegisterController@createLogin')->name('login');
Route::get('/logout', 'RegisterController@logout')->name('logout');

Route::get('/shop/index', 'ShopController@index')->name('shop.index');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard')->middleware('auth');
Route::get('/category', 'CategoryController@index')->name('admin.category')->middleware('auth');
Route::get('/category/create', 'CategoryController@create')->name('admin.createCategory')->middleware('auth');
Route::post('/category', 'CategoryController@store')->name('admin.storeCategory');
// Route::get('/category/{category}', 'CategoryController@show')->name('admin.showCategory');
Route::get('/category/{category}/edit', 'CategoryController@edit')->name('admin.editCategory');
Route::put('/category/{category}', 'CategoryController@update')->name('admin.updateCategory');
Route::delete('/category/{category}', 'CategoryController@destroy')->name('admin.delCategory');

Route::get('/clothing', 'AdminController@index')->name('admin.clothing')->middleware('auth');
Route::get('/clothing/create', 'AdminController@create')->name('admin.addclothing')->middleware('auth');

