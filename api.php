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
Route::get('listado','Listado@index');
Route::get('listado/{id}','Listado@show');
Route::post('listado','Listado@index');
Route::put('listado/{id}','Listado@update');
Route::delete('listado/{id}','Listado@delete');


