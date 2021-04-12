<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NominaGeneralRequest;
use App\Models\NominasGenerale;
use App\Models\NominasIndividuale;

class NominasGeneraleController extends Controller
{
    public function nominaGeneral()
    {
        $general = NominasGenerale::all();
        $nomina_individual = NominasIndividuale::all();
        return view("nominageneral", compact('general', 'nomina_individual'));
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
