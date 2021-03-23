<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagosRequest;

use App\Models\Pago;

class PagoController extends Controller
{
    public function pago(){
        return view('pago');
    }
    public function tabla(){
        $pagos = Pago::all();
        return view('tabla', compact('pagos'));
    }
    public function store(PagosRequest $request){
        Pago::create([
            'nombre_empleado' => $request->nombre_empleado,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'num_cuenta'=> $request->num_cuenta,
            'num_tarjeta' => $request->num_tarjeta
        ]);
        
        
        return redirect('/pago');
    }

    public function delete(Pago $pago){
        Pago::where('id', $pago->id)->delete();

        return back();
    }
}
