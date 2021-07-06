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

use App\Http\Controllers\UserController;

route::get('/sign', [userController::class, 'sign']);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/github', function () {
    return view('github');
});


Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/about', function () {
    return view('about');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


