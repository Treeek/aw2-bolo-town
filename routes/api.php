<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*
|--------------------------------------------------------------------------
| Lab Routes
|--------------------------------------------------------------------------
*/

Route::get('labs/{id?}', 'LabsController@index');
Route::post('labs', 'LabsController@store');
Route::put('labs/{id}', 'LabsController@update');
Route::delete('labs/{id}', 'LabsController@destroy');
