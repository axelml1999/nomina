<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Http\Requests\EmpleadoRequest;

class ArchivoController extends Controller
{
    //

    // public function creates(EmpleadoRequest $request){

    //     Empleado::create([
    //         "nombre" => $request->nombre,
    //         "apellido_paterno" => $request->apellido_paterno,
    //         "apellido_materno"  => $request->apellido_materno,
    //         "curp" => $request->curp,
    //         "direccion"  => $request->direccion,
    //         "salario" => $request->salario,
    //         "turno_id" => $request->turno_id,
    //         "cargo_id" => $request->cargo_id,
    //         "departamento_id" => $request->departamento_id,
    //         "sexo_id" => $request->sexo_id,
    //         "fecha_nacimiento"  => $request->fecha_nacimiento,
    //         "pago_id"  => $request->pago_id
    //     ]);
    //     return redirect("tablados");
    // }


    // public function destroy($id){
    //     Empleado::destroy($id);
    //     return redirect('tablados');
    //     // return redirect()->route('tablados');
    // }

    // public function edit($id){
    //     $empleado=Empleado::findOrFail($id);
    //     return view('edit',compact('empleado'));
    // }

    // public function update(EmpleadoRequest $request, $id){
    //     $empleado = Empleado::findOrFail($id);
    //     $empleado->update($request->all());
    //     return view('edit',compact('empleado'));
        // $datosEmpleado=request()->except(['_token','_method']);
        // Empleado::where('id','=',$id)->update($datosEmpleado);
        // $empleado=Empleado::findOrFail($id);
        // return view('edit',compact('empleado'));
    // }




    public function departamento(){
        return view('departamento');
    }
    public function pago(){
        return view('pago');
    }
    public function tabla(){
        return view('tabla');
    }

    public function asistencias(){
        return view('asistencias');
    }
    public function nominaindividual(){
        return view('nominaindividual');
    }
    public function nominageneral(){
        return view('nominageneral');
    }

    public function login(){
        return view('login');
    }

    public function index(){
        return view('index');
    }

}
