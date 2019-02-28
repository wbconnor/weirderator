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
    Route::get('/', 'ThingController@index');
    Route::post('/', 'ThingController@store');
    Route::get('/{id}', 'ThingController@show');
    Route::put('/{id}', 'ThingController@update');
    Route::delete('/{id}', 'ThingController@destroy');
});

Route::group(['prefix' => 'votes'], function () {
    Route::get('/', 'VoteController@index');
    Route::post('/', 'VoteController@store');
    Route::get('/{id}', 'VoteController@show');
    Route::put('/{id}', 'VoteController@update');
    Route::delete('/{id}', 'VoteController@destroy');
});