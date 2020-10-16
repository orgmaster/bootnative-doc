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

Route::post('access-token','Api\TokensController@get')->name('get');
Route::middleware('jwt.auth')->namespace('Api')->as('token.')->group(function(){
    Route::post('access-token/expire','TokensController@expire')->name('expire');
    Route::post('access-token/refresh','TokensController@refresh')->name('refresh');
});

Route::get('menu/{version_id}','Api\MainController@menu');
Route::get('versions','Api\MainController@versions');