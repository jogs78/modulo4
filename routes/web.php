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

Route::get('/', 'SessionController@inicio' );
Route::get('login', 'SessionController@credenciales' )->name('login');
Route::post('validar', 'SessionController@autenticar' );
Route::get('salir', 'SessionController@salida' );

Route::resource('usuarios','UsuarioController')->middleware('auth');
