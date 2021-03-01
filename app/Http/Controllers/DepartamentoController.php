<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{
    public function store(DepartamentoRequest $request) {
        Departamento::create([
            'nombre_dep' => $request -> nombre_dep,
            'num_trab' => $request -> num_trab
        ]);
        return redirect('departamento');
    }

    public function edit(Departamento $departamento) {
        return view('editDepartamento', compact('departamento'));
    }

    public function update(DepartamentoRequest $request, Departamento $departamento) {
        Departamento::where('id', $departamento->id)
                -> update([
                    'nombre_dep' => $request->nombre_dep,
                    'num_trab' => $request->num_trab
                ]);
        return redirect('departamento');
    }

    public function destroy($id){
        Departamento::destroy($id);
        return redirect('departamento');
    }
}
