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

Route::get('/','IndexController@index')->name('landingpage');
Route::get('/About-us','IndexController@about')->name('aboutUs');
Route::get('/Contact-us','IndexController@contact')->name('contactUs');
Route::get('/Property-single','IndexController@singleProperty')->name('singleProperty');
