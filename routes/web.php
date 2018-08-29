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

Route::get('/','ServicesController@envoi');
Route::get('/team','TeamController@envoi');
Route::resource('xaragne','XaragneController');
Route::resource('login','LoginController');
Route::resource('register','RegisterController');
Route::resource('services','ServicesController');
Route::resource('/team','TeamController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//creation model : php artisan make:controller ProductController --resource --model=Product