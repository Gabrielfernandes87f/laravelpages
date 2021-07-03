<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\userController;
route::get('/login', [userController::class, 'login']);



Route::get('/', function () {
    return view('welcome');
});


Route::get('/github', function () {
    return view('github');
});

Route::get('/login', function () {
    return view('sign-in');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/criar-conta', function () {
    return view('criar-conta');
});

Route::get('/about', function () {
    return view('about');
});