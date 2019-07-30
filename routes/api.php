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

Route::apiResource('mechanicians', 'MechanicianController');
Route::apiResource('garages', 'GarageController');
Route::group(['prefix'=>'mechanicians'], function()
{
    Route::apiResource('/{mechanician}/specialities', 'SpecialityController');
});
Route::apiResource('spareparts', 'SparepartController');


Route::group(['prefix'=>'garages'], function()
{
    Route::apiResource('/{garage}/services', 'ServiceController');
    Route::get('/{garage}/mechanicians', 'GarageController@mech')->name('garage.mechanicians');
   
});