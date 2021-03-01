<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\Pago;
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

//Route::get('index', 'App\Http\Controllers\ArchivoController@index');
Route::get('extras', 'App\Http\Controllers\HomeController@extras');
Route::get('descuentos', 'App\Http\Controllers\HomeController@descuentos');
Route::get('empleados', 'App\Http\Controllers\HomeController@empleados');
Route::get('tablados', 'App\Http\Controllers\HomeController@tablados');
Route::get('horarios', 'App\Http\Controllers\HomeController@horarios');
Route::get('cargo', 'App\Http\Controllers\HomeController@cargo');
Route::get('pago', 'App\Http\Controllers\HomeController@pago');
Route::get('departamento', 'App\Http\Controllers\HomeController@departamento');
Route::get('tabla', 'App\Http\Controllers\HomeController@tabla');
Route::get('nominageneral', 'App\Http\Controllers\HomeController@nominageneral');
Route::get('nominaindividual', 'App\Http\Controllers\HomeController@nominaindividual');
Route::get('asistencias', 'App\Http\Controllers\HomeController@asistencias');

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

Route::get('editExtras/{extra}', 'App\Http\Controllers\ExtraController@editExtras');
Route::get('editDescuentos/{descuentos}', 'App\Http\Controllers\DescuentoController@editDescuentos');
Route::get('tablados/{id}', 'App\Http\Controllers\EmpleadoController@edit');
Route::get('editHorarios/{id}', 'App\Http\Controllers\HorariosController@editar');
Route::get('editCargo/{cargo}', 'App\Http\Controllers\CargoController@edit');
Route::get('editDepartamento/{departamento}', 'App\Http\Controllers\DepartamentoController@edit');
//---------------------------------------------------------------------------------------------
// Rutas Post ---------------------------------------------------------------------------------


Route::post('cargo', 'App\Http\Controllers\CargoController@store');
Route::post('departamento', 'App\Http\Controllers\DepartamentoController@store');
Route::post('empleados', 'App\Http\Controllers\EmpleadoController@creates');
Route::post('extras', 'App\Http\Controllers\ExtraController@registro')->name('extras');
Route::post('descuentos', 'App\Http\Controllers\DescuentoController@registro')->name('descuentos');
Route::post('horarios', 'App\Http\Controllers\HorariosController@crear')->name('horarios');

//---------------------------------------------------------------------------------------------
// Rutas PUT-----------------------------------------------------------------------------------

Route::put('editCargo/{cargo}', 'App\Http\Controllers\CargoController@update');
Route::put('editDepartamento/{departamento}', 'App\Http\Controllers\DepartamentoController@update');
Route::put('tablados/{id}', 'App\Http\Controllers\EmpleadoController@update');
Route::put('editExtras/{extra}', 'App\Http\Controllers\ExtraController@update');
Route::put('editDescuentos/{descuentos}', 'App\Http\Controllers\DescuentoController@update');
Route::put('editHorarios/{id}', 'App\Http\Controllers\HorariosController@update');

//---------------------------------------------------------------------------------------------
// Rutas Delete -------------------------------------------------------------------------------
Route::delete('cargo/{id}', 'App\Http\Controllers\CargoController@destroy');
Route::delete('departamento/{id}', 'App\Http\Controllers\DepartamentoController@destroy');
Route::delete('tablados/{id}', 'App\Http\Controllers\EmpleadoController@destroy');
Route::delete('extras/{id}', 'App\Http\Controllers\ExtraController@destroy');
Route::delete('descuentos/{id}', 'App\Http\Controllers\DescuentoController@destroy');
Route::delete('horarios/{id}', 'App\Http\Controllers\HorariosController@delete');

//----------------------------------------------------------------------------------------------
// Rutas Auth ----------------------------------------------------------------------------------

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');