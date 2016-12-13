<?php

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

Route::post('/{key}/control', 'PlayerController@control');

Route::get('/{key}/radar', 'PlayerController@radar');

Route::get('/{key}/stats', 'PlayerController@balls');
