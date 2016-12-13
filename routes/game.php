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

Route::post('/game/{privateKey}', 'GameController@game');

Route::get('/balls/{roud}/{key}/{ball}', 'GameController@balls');

Route::get('/view/{privateKey}', 'LeadController@view');

Route::get('/view/ajax/{privateKey}', 'LeadController@ajax');

Route::get('/score/{privateKey}', 'LeadController@score');

Route::get('/score/ajax/{privateKey}', 'LeadController@ajaxScore');

Route::get('/config/{privatekey}', 'GameController@config');

Route::get('/config/clear/{privatekey}', 'GameController@clear');

Route::get('/config/score/{privatekey}/{key}/{score}', 'GameController@score');

Route::get('/config/zero/{privatekey}', 'GameController@zero');
