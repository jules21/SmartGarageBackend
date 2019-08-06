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
//users middleware 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// API Function to get user details
Route::post('/user', 'AuthController@details');

// API Authentication Functions
Route::post('/login', 'api\AuthController@login');
Route::post('/register', 'api\AuthController@register');

// api reset user password
Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['as'=>'api.'], function()
{
    Route::apiResource('mechanicians', 'api\MechanicianController');
    Route::apiResource('garages', 'api\GarageController');
    Route::apiResource('spareparts', 'api\SparepartController');
    Route::apiResource('services', 'api\ServiceController');   
    Route::apiResource('specialities', 'api\SpecialityController');
     
    Route::group(['prefix'=>'mechanicians'], function(){
        Route::get('/{mechanician}/specialities', 'api\MechanicianController@spec')->name('mechanician.specialities');
    });
    Route::group(['prefix'=>'garages'], function(){
        Route::get('/{garage}/mechanicians', 'api\GarageController@mech')->name('garage.mechanicians');
        Route::get('/{garage}/services', 'api\GarageController@serv')->name('garage.services');
    });
  
});

