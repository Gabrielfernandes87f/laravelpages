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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
Route::group(['middleware' => ['guest:api']], function() {
    Route::get('/', function() {
        return 'olá mundo API';
    });

    Route::post('login', 'API\LoginController@login');
});

Route::group(['middleware' => 'auth:api'], function() {

    Route::group('/dados', function () {
        return 'ola mundo API (Autenticado)';
    });

    Route::get('logout', 'API\LoginController@logout');
});

/*