<?php

namespace App\Http\Controllers;

use App\Http\Requests\DescuentoRequest;
use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function descuentos () {
        $descuentos = Descuento::all();
        return view('descuentos', compact('descuentos'));
    }

    public function editDescuentos (Descuento $descuentos) {
        return view('descuentosEdit', compact('descuentos'));
    }

    public function registro (DescuentoRequest $request) {
        Descuento::create([
            'descripcion' => $request->descuento
        ]);
        return back();
    }

    public function update (DescuentoRequest $request, Descuento $descuentos) {
        Descuento::where('id', $descuentos->id)->update([
            'descripcion' => $request->descuento
        ]);
        return redirect('descuentos');
    }

    public function destroy ($id) {
        Descuento::destroy($id);
        return back();
    }
}
