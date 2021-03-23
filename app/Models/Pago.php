<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_empleado',
            'correo',
            'telefono',
            'num_cuenta' ,
            'num_tarjeta'
    ];
}