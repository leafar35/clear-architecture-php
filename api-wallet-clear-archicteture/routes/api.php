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

    Route::get('/', 'App\Http\Controllers\Expanses\ExpanseController@findAll');
    Route::get('/{id}', 'App\Http\Controllers\Expanses\ExpanseController@findOne');
    Route::post('/', 'App\Http\Controllers\Expanses\ExpanseController@create');
    Route::put('/', 'App\Http\Controllers\Expanses\ExpanseController@update');
    Route::delete('/{id}', 'App\Http\Controllers\Expanses\ExpanseController@delete');

});