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

Route::get('alerta', 'AlertaController@index');
Route::get('alerta/{alerta}', 'AlertaController@show');
Route::post('alerta', 'AlertaController@store');
Route::put('alerta/{alerta}', 'AlertaController@update');
Route::delete('alerta/{alerta}', 'AlertaController@delete');