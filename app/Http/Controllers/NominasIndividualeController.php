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
        $nomina_individual = NominasIndividuale::all();
        $empleado = Empleado::all();
        $nom_gen = NominasGenerale::all();
        $extra = Extra::all();
        $descuento = Descuento::all();

        return view('nominaindividual', compact('nomina_individual', 'empleado', 'nom_gen', 'extra', 'descuento'));
    }

    public function individual()
    {
        $nomina_individual = NominasIndividuale::all();
        $empleado = Empleado::all();
        $nom_gen = NominasGenerale::all();
        $extra = Extra::all();
        $descuento = Descuento::all();

        return view('nominasIndividual', compact('nomina_individual', 'empleado', 'nom_gen', 'extra', 'descuento'));
    }

    public function registroIndividual(NominaIndividualRequest $request)
    {
        NominasIndividuale::create(
            [
                "empleado_id" => $request->empleado_id,
                "nominagen_id" => $request->nominagen_id,
                "extra_id" => $request->extra_id,
                "descuento_id" => $request->descuento_id
            ]
        );

        return redirect('nominaindividual');
    }

    public function delete($id)
    {
        NominasIndividuale::destroy($id);

        return back();
    }
}
