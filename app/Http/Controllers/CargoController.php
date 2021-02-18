<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function store(Request $request) {
        Cargo::create([
            'nombre_cargo' => $request -> nombre_cargo
        ]);
        return redirect('cargo');
    }

    public function cargo() {
        $cargos = Cargo::all();
        return view('cargo', compact('cargos'));
    }
}
