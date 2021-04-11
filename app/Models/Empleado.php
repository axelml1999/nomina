<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Empleado extends Model{
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


    public function turnos() {
        return $this-> belongsTo('App\Models\Turno','turno_id');
    }

    public function cargos() {
        return $this-> belongsTo('App\Models\Cargo','cargo_id');
    }

    public function departamentos() {
        return $this-> belongsTo('App\Models\Departamento','departamento_id');
    }

    public function pagos() {
        return $this-> belongsTo('App\Models\Pago','pago_id');
    }
    
    public function sexos() {
        return $this-> belongsTo('App\Models\Sexo','sexo_id');
    }
    
}

