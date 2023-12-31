<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::view('/login', "auth.login")->name('login');
Route::view('/registro', "auth.register")->name('registro');
Route::view('/privada', "privada")->middleware('auth')->name('privada');

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/inicio-sesion',[LoginController::class,'login'])->name('inicio-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');