<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function horarios(){
        return view('horarios');
    }

    public function pago(){
        return view('pago');
    }

    public function tabla(){
        return view('tabla');
    }

    public function asistencias(){
        return view('asistencias');
    }
    public function nominaindividual(){
        return view('nominaindividual');
    }
    public function nominageneral(){
        return view('nominageneral');
    }

    public function login(){
        return view('login');
    }

    public function extras(){
        return view('extras');
    }

    public function descuentos(){
        return view('descuentos');
    }

    public function cargo() {
        $cargos = Cargo::all();
        return view('cargo', compact('cargos'));
    }

    public function departamento() {
        $departamentos = Departamento::all();
        return view('departamento', compact('departamentos'));
    }

    public function tablados(){
        $empleados = Empleado::all();
        return view('tablados',compact("empleados"));
    }

    public function empleados(){
        return view('empleados');
    }
}
