<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NominaGeneralRequest;
use App\Models\NominasGenerale;

class NominasGeneraleController extends Controller
{
    public function nominaGeneral()
    {
        $general = NominasGenerale::all();
        return view("nominageneral", compact('general'));
    }

    public function general()
    {
        return view("nominasGeneral");
    }

    public function registroGeneral(NominaGeneralRequest $request)
    {
        NominasGenerale::create(
            $request->only(
                'semana',
                'fecha_inicio',
                'fecha_fin',
                'total_nomina',
                'total_descuentos',
                'total_extras'
            )
            );
    
        return redirect("nominageneral");
    }

    public function delete($id)
    {
        NominasGenerale::destroy($id);
        return back();
    }

}
