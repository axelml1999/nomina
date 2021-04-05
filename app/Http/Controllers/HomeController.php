<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Descuento;
use App\Models\Empleado;
use App\Models\Extra;
use App\Models\Horarios;
use App\Models\Pago;
use App\Models\Sexo;
use App\Models\Turno;
use Facade\FlareClient\View;
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

    public function horarios()
    {
        $target = Horarios::all();
        return view('horarios', compact('target'));
    }


    public function pago()
    {
        return view('pago');
    }

    public function tabla()
    {
        return view('tabla');
    }

    public function asistencias()
    {
        return view('asistencias');
    }
    public function nominaindividual()
    {
        return view('nominaindividual');
    }
    public function nominageneral()
    {
        return view('nominageneral');
    }

    public function login()
    {
        return view('login');
    }

    public function extras()
    {
        $extras = Extra::all();
        return view('extras', compact('extras'));
    }

    public function descuentos()
    {
        $descuentos = Descuento::all();
        return view('descuentos', compact('descuentos'));
    }

    public function cargo()
    {
        $cargos = Cargo::all();
        return view('cargo', compact('cargos'));
    }

    public function departamento()
    {
        $departamentos = Departamento::all();
        return view('departamento', compact('departamentos'));
    }

    public function tablados(){
        $turnos = Turno::all();
        $cargos = Cargo::all();
        $departamentos = Departamento::all();
        $sexos = Sexo::all();
        $pagos = Pago::all();
        // $empleados = Empleado::all();
        $empleados = Empleado:: all(); 
        return view('tablados', compact('empleados', 'sexos', 'cargos', 'turnos', 'departamentos', 'pagos'));
    }


    public function empleados()
    {
        $turnos = Turno::all();
        $cargos = Cargo::all();
        $departamentos = Departamento::all();
        $sexos = Sexo::all();
        $pagos = Pago::all();
        return view('empleados', compact('sexos', 'cargos', 'turnos', 'departamentos', 'pagos'));
    }
}
