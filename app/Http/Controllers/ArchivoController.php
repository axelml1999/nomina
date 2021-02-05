<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    //

    public function empleados(){
        return view('empleados');
    }
    public function horarios(){
        return view('horarios');
    }
    public function cargo(){
        return view('cargo');
    }
    public function departamento(){
        return view('departamento');
    }
    public function pago(){
        return view('pago');
    }
    public function tabla(){
        return view('tabla');
    }
    public function tablados(){
        return view('tablados');
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
}
