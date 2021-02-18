<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function store(Request $request) {
        Departamento::create([
            'nombre_dep' => $request -> nombre_dep,
            'num_trab' => $request -> num_trab
        ]);
        return redirect('departamento');
    }

    public function departamento() {
        $departamentos = Departamento::all();
        return view('departamento', compact('departamentos'));
    }
}
