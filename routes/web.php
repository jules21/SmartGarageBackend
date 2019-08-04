<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::group(['prefix'=>'admin'], function ()
{
    Route::get('dashboard', 'HomeController@index');

    Route::resource('mechanicians', 'MechanicianController');
    Route::resource('garages', 'GarageController');

    Route::resource('services', 'ServiceController');
    Route::resource('specialities', 'SpecialityController');
    Route::resource('spareparts', 'SparepartController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
