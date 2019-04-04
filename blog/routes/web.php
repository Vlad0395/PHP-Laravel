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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/category/{slug}', 'HomeController@category');

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],function()
{
    Route::get('/', 'AdminController@index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/news', 'ItemController');
//    Route::put('/user/{id}', 'UsersController@update');
    Route::resource('/user', 'UsersController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
