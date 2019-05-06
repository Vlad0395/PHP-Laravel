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

Route::get('/', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/news', 'ItemController@index');
Route::get('/news/{id}', 'ItemController@show');
//Route::get('/category/{slug}', 'HomeController@category');

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'admin'], function()
{
    Route::get('/', 'AdminController@index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/news', 'ItemController');
//    Route::put('/user/{id}', 'UsersController@update');
    Route::resource('/user', 'UsersController');

});

Route::group(['middleware'=>'auth'], function ()
{
    Route::get('/account', 'AccountController@index');
    Route::get('/account/edit', 'AccountController@edit');
    Route::post('/account/{id}', 'AccountController@update');


});

