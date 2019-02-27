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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'things'], function () {
    Route::get('/', 'ThingsController@index');
    Route::post('/', 'ThingsController@store');
    Route::get('/{id}', 'ThingsController@show');
    Route::put('/{id}', 'ThingsController@update');
    Route::delete('/{id}', 'ThingsController@destroy');
});