<?php

namespace App\Http\Controllers;

use App\Http\Requests\NominaIndividualRequest;
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
        return view('nominasIndividual');
    }

    public function registroIndividual(NominaIndividualRequest $request)
    {
        NominasIndividuale::create(
            $request->only('empleado', 'nominagen', 'total_nom')
        );

        return redirect('nominaindividual');
    }

    public function delete($id)
    {
        NominasIndividuale::destroy($id);

        return back();
    }
}
