<?php

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


Route::get('/', 'App\Http\Controllers\UsuarioController@login');
// Route::get('/', function(){
//     $empleados = Empleado::all(); 
//     var_dump($empleados);
// });
Route::get('index', 'App\Http\Controllers\UsuarioController@index');
Route::get('extras', 'App\Http\Controllers\UsuarioController@extras');
Route::get('descuentos', 'App\Http\Controllers\UsuarioController@descuentos');

Route::get('empleados', 'App\Http\Controllers\ArchivoController@empleados');
Route::post('empleados', 'App\Http\Controllers\ArchivoController@creates');


Route::get('horarios', 'App\Http\Controllers\ArchivoController@horarios');
Route::get('cargo', 'App\Http\Controllers\ArchivoController@cargo');
Route::get('pago', 'App\Http\Controllers\ArchivoController@pago');
Route::get('departamento', 'App\Http\Controllers\ArchivoController@departamento');
Route::get('tabla', 'App\Http\Controllers\ArchivoController@tabla');
Route::get('tablados', 'App\Http\Controllers\ArchivoController@tablados');
Route::get('tablados/{id}/edit', 'App\Http\Controllers\ArchivoController@edit');
Route::put('tablados/{id}', 'App\Http\Controllers\ArchivoController@update');
Route::delete('tablados/{id}', 'App\Http\Controllers\ArchivoController@destroy');


Route::get('nominageneral', 'App\Http\Controllers\ArchivoController@nominageneral');
Route::get('nominaindividual', 'App\Http\Controllers\ArchivoController@nominaindividual');
Route::get('asistencias', 'App\Http\Controllers\ArchivoController@asistencias');