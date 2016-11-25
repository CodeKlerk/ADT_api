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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function(){
    Route::resource('patients', 'PatientController',[
        'except' => ['edit', 'create']
    ]);

    Route::get('get_service', 'PatientController@get_service');
    Route::get('get_status', 'PatientController@get_status');
    Route::get('get_who_stage', 'PatientController@get_who_stage'); 
});