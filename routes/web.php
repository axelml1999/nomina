<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pago;
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


Route::get('/', 'App\Http\Controllers\UsuarioController@login');
Route::get('index', 'App\Http\Controllers\UsuarioController@index');
Route::get('extras', 'App\Http\Controllers\UsuarioController@extras');
Route::get('descuentos', 'App\Http\Controllers\UsuarioController@descuentos');

Route::get('empleados', 'App\Http\Controllers\ArchivoController@empleados');
Route::get('horarios', 'App\Http\Controllers\ArchivoController@horarios');
Route::get('cargo', 'App\Http\Controllers\ArchivoController@cargo');

// Tabla pagos.
Route::get('pago', 'App\Http\Controllers\PagoController@pago');
Route::post('pago', 'App\Http\Controllers\PagoController@store');
Route::get('tabla', 'App\Http\Controllers\PagoController@tabla');
Route::get('/delete/{pago}','App\Http\Controllers\PagoController@delete');
// Fin pagos


Route::get('departamento', 'App\Http\Controllers\ArchivoController@departamento');
Route::get('tablados', 'App\Http\Controllers\ArchivoController@tablados');


Route::get('nominageneral', 'App\Http\Controllers\ArchivoController@nominageneral');
Route::get('nominaindividual', 'App\Http\Controllers\ArchivoController@nominaindividual');
Route::get('asistencias', 'App\Http\Controllers\ArchivoController@asistencias');