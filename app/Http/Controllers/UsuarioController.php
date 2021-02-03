<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function index(){
        return view('index');
    }
    public function extras(){
        return view('extras');
    }

    public function descuentos(){
        return view('descuentos');
    }

}
