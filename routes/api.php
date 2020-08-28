<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Alerta;

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

Route::get('alertas', 'AlertaController@index');
Route::get('alertas/{id}', 'AlertaController@show');
Route::post('alertas', 'AlertaController@store');
Route::put('alertas/{id}', 'AlertaController@update');
Route::delete('alertas/{id}', 'AlertaController@delete');

Route::get('parametros', 'ParametroController@index');
Route::get('parametros/{id}', 'ParametroController@show');
Route::post('parametros', 'ParametroController@store');
Route::put('parametros/{id}', 'ParametroController@update');
Route::delete('parametros/{id}', 'ParametroController@delete');