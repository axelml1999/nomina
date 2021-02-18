<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre" ,
        "apellido_paterno",
        "apellido_materno" ,
        "curp",
        "direccion" ,
        "salario",
        "turno_id",
        "cargo_id",
        "departamento_id" ,
        "sexo_id" ,
        "fecha_nacimiento",
        "pago_id" 
    ];
}
