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


Route::get('labs/{lab?}', 'LabsController@index');
Route::post('labs', 'LabsController@store');
Route::put('labs/{lab}', 'LabsController@update');
Route::delete('labs/{lab}', 'LabsController@destroy');

Route::post('labs/install', "LabsController@installApplication");
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('applications/{id?}', 'ApplicationsController@index');
Route::post('applications', 'ApplicationsController@store');
Route::put('applications/{id}', 'ApplicationsController@update');
Route::delete('applications/{id}', 'ApplicationsController@destroy');

Route::fallback(function () {
    return response()->json(['message' => 'Not Found!'], 404);
});
