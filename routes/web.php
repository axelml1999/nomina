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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\UsuarioController@login');
Route::get('index', 'App\Http\Controllers\UsuarioController@index');
Route::get('extras', 'App\Http\Controllers\UsuarioController@extras');
Route::get('descuentos', 'App\Http\Controllers\UsuarioController@descuentos');