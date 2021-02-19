<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CargoRequest;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function store(CargoRequest $request) {
        Cargo::create([
            'nombre_cargo' => $request -> nombre_cargo
        ]);
        return redirect('cargo');
    }

    public function cargo() {
        $cargos = Cargo::all();
        return view('cargo', compact('cargos'));
    }

    public function edit(Cargo $cargo) {
        return view('editCargo', compact('cargo'));
    }

    public function update(CargoRequest $request, Cargo $cargo) {
        Cargo::where('id', $cargo->id)
                -> update([
                    'nombre_cargo' => $request->nombre_cargo
                ]);
        return redirect('cargo');
    }
}
