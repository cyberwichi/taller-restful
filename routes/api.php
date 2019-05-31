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

Route::get('reparaciones', 'RepationsController@getAll')->name('getAllReparations');
Route::post('reparaciones', 'RepationsController@add')->name('addReparations');
Route::get('reparaciones/{matricula}', 'RepationsController@getAllForMatricula')->name('getAllForOneMatricula');
Route::get('reparaciones/fecha/{fecha}', 'RepationsController@getAllForFecha')->name('getAllForOneFecha');
Route::get('reparaciones/desrepara/{concepto}', 'RepationsController@getAllForDesrepara')->name('getAllForOneDesrepara');
Route::get('reparaciones/{matricula}/fecha/{fecha}', 'RepationsController@getAllForMatriculaAndFecha')->name('getAllForMatriculaAndFecha');
Route::post('reparaciones/{id}', 'RepationsController@editById')->name('editReparationsById');
Route::get('reparaciones/delete/{id}', 'RepationsController@deleteById')->name('deleteReparationsById');
