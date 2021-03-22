<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Http\Requests\EmpleadoRequest;
use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Pago;
use App\Models\Sexo;
use App\Models\Turno;
use Illuminate\Support\Facades\DB;

class empleadoController extends Controller {
    

    // public function selectSex(){
    //     // $sexos=DB::table('sexos');
    //     $sexos = Sexo::all();
    //     foreach($sexos as $sexo){
    //         echo $sexo->tipo_sexo;
    //     }

    // }


    public function creates(EmpleadoRequest $request){

        Empleado::create([
            "nombre" => $request->nombre,
            "apellido_paterno" => $request->apellido_paterno,
            "apellido_materno"  => $request->apellido_materno,
            "curp" => $request->curp,
            "direccion"  => $request->direccion,
            "salario" => $request->salario,
            "turno_id" => $request->turno_id,
            "cargo_id" => $request->cargo_id,
            "departamento_id" => $request->departamento_id,
            "sexo_id" => $request->sexo_id,
            "fecha_nacimiento"  => $request->fecha_nacimiento,
            "pago_id"  => $request->pago_id
        ]); 
        

        return redirect("tablados");
    }


    public function destroy($id){
        Empleado::destroy($id);
        return redirect('tablados');
        // return redirect()->route('tablados');
    }

    public function edit($id){
        $turnos = Turno::all();
        $cargos = Cargo::all();
        $departamentos = Departamento::all();
        $sexos = Sexo::all();
        $pagos = Pago::all();
        $empleado=Empleado::findOrFail($id);
        // $selects = DB::table('empleados')
        // ->join('empleados', 'empleados.sexo_id', '=', 'sexos.id')
        // ->select('sexos.id')
        // ->get();

        return view('edit',compact('empleado','sexos','cargos','turnos','departamentos','pagos'));
 
        // return view('edit',compact('empleado'));
    }

    public function update(EmpleadoRequest $request, $id){
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect('tablados');
        // $datosEmpleado=request()->except(['_token','_method']);
        // Empleado::where('id','=',$id)->update($datosEmpleado);
        // $empleado=Empleado::findOrFail($id);
        // return view('edit',compact('empleado'));
    }

    public function tablados(){
        $turnos = Turno::all();
        $cargos = Cargo::all();
        $departamentos = Departamento::all();
        $sexos = Sexo::all();
        $pagos = Pago::all();
        $empleados = Empleado::all();
        return view('tablados',compact('empleados','sexos','cargos','turnos','departamentos','pagos'));
    }

    public function empleados(){
        $turnos = Turno::all();
        $cargos = Cargo::all();
        $departamentos = Departamento::all();
        $sexos = Sexo::all();
        $pagos = Pago::all();
        return view('empleados',compact('sexos','cargos','turnos','departamentos','pagos'));
    }



}
