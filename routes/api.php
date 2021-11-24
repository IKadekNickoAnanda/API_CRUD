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

Route::post('create-data', 'ApikelompokController@create');
Route::get('get-data', 'ApikelompokController@get');
Route::put('update-data/{id_kelompokpenjual}', 'ApikelompokController@update');
Route::post('delete-data/{id_kelompokpenjual}', 'ApikelompokController@delete');

