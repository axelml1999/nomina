<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Empleado;

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

// Rutas hacia las vistas-------------------------------------------------------------------

Route::get('/', 'App\Http\Controllers\ArchivoController@login');
Route::get('index', 'App\Http\Controllers\ArchivoController@index');
Route::get('extras', 'App\Http\Controllers\ArchivoController@extras');
Route::get('descuentos', 'App\Http\Controllers\ArchivoController@descuentos');
Route::get('empleados', 'App\Http\Controllers\EmpleadoController@empleados');
Route::get('tablados/{id}', 'App\Http\Controllers\EmpleadoController@edit');
Route::get('tablados', 'App\Http\Controllers\EmpleadoController@tablados');
Route::get('horarios', 'App\Http\Controllers\ArchivoController@horarios');
Route::get('cargo', 'App\Http\Controllers\CargoController@cargo');
Route::get('pago', 'App\Http\Controllers\ArchivoController@pago');
Route::get('departamento', 'App\Http\Controllers\DepartamentoController@departamento');
Route::get('tabla', 'App\Http\Controllers\ArchivoController@tabla');
Route::get('nominageneral', 'App\Http\Controllers\ArchivoController@nominageneral');
Route::get('nominaindividual', 'App\Http\Controllers\ArchivoController@nominaindividual');
Route::get('asistencias', 'App\Http\Controllers\ArchivoController@asistencias');
Route::get('editCargo/{cargo}', 'App\Http\Controllers\CargoController@edit');
Route::get('editDepartamento/{departamento}', 'App\Http\Controllers\DepartamentoController@edit');
//---------------------------------------------------------------------------------------------
// Rutas Post ---------------------------------------------------------------------------------

Route::post('cargo', 'App\Http\Controllers\CargoController@store');
Route::post('departamento', 'App\Http\Controllers\DepartamentoController@store');
Route::post('empleados', 'App\Http\Controllers\EmpleadoController@creates');

//---------------------------------------------------------------------------------------------
// Rutas PUT-----------------------------------------------------------------------------------

Route::put('editCargo/{cargo}', 'App\Http\Controllers\CargoController@update');
Route::put('editDepartamento/{departamento}', 'App\Http\Controllers\DepartamentoController@update');
Route::put('tablados/{id}', 'App\Http\Controllers\EmpleadoController@update');
//---------------------------------------------------------------------------------------------
// Rutas Delete -------------------------------------------------------------------------------
Route::delete('cargo/{id}', 'App\Http\Controllers\CargoController@destroy');
Route::delete('departamento/{id}', 'App\Http\Controllers\DepartamentoController@destroy');
Route::delete('tablados/{id}', 'App\Http\Controllers\EmpleadoController@destroy');
