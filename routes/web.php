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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',"DashboardController@index");

Route::get('/request', 'DashboardController@request')->name('request-software');
Route::post('/request', "DashboardController@createSoftware")->name('request-software-post');

Route::get('/list_softwares', 'DashboardController@list_softwares');

Route::get('/dashboard', 'DashboardController@dashboard');

Route::get('/aprove', 'DashboardController@aprove_software');
