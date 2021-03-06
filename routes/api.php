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

Route::post('register', 'PassportController@register');

Route::middleware('auth:api')->group(function () {
    Route::post('files', 'NumbersFileController@process');
    Route::get('files/{id}', 'NumbersFileController@get');

    Route::post('numbers', 'NumberController@process');
});
