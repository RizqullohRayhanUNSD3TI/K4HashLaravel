<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HashController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hash', [HashController::class, 'hash']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/proseslogin', [LoginController::class, 'proses']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/prosesregistrasi', [RegisterController::class, 'proses']);