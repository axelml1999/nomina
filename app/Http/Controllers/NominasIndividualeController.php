<?php

namespace App\Http\Controllers;

use App\Http\Requests\NominaIndividualRequest;
use App\Models\Descuento;
use App\Models\Empleado;
use App\Models\Extra;
use App\Models\NominasGenerale;
use App\Models\NominasIndividuale;
use Illuminate\Http\Request;

class NominasIndividualeController extends Controller
{
    public function nominaIndividual()
    {
        $individual = NominasIndividuale::all();
        return view('nominaindividual', compact('individual'));
    }

    public function individual()
    {
        $empleado = Empleado::all();
        $nom_gen = NominasGenerale::all();
        $extra = Extra::all();
        $descuento = Descuento::all();

        return view('nominasIndividual', compact('empleado', 'nom_gen', 'extra', 'descuento'));
    }

    public function registroIndividual(NominaIndividualRequest $request)
    {
        NominasIndividuale::create(
            $request->only('empleado_id', 'nominagen_id', 'extra_id', 'descuento_id', 'total_nom')
        );

        return redirect('nominaindividual');
    }

    public function delete($id)
    {
        NominasIndividuale::destroy($id);

        return back();
    }
}
