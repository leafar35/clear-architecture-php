<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('expanses')->group(function() {

    Route::get('/', 'App\Http\Controllers\ExpanseController@findAll');
    Route::get('/{id}', 'App\Http\Controllers\ExpanseController@findOne');
    Route::post('/', 'App\Http\Controllers\ExpanseController@create');
    Route::put('/', 'App\Http\Controllers\ExpanseController@update');
    Route::delete('/{id}', 'App\Http\Controllers\ExpanseController@delete');

});

Route::prefix('user')->group(function() {

    Route::get('/', 'App\Http\Controllers\UserController@findAll');
    Route::get('/{id}', 'App\Http\Controllers\UserController@findOne');
    Route::post('/', 'App\Http\Controllers\UserController@create');
    Route::put('/', 'App\Http\Controllers\UserController@update');
    Route::delete('/{id}', 'App\Http\Controllers\UserController@delete');

});