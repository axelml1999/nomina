<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NominasGenerale extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'semana',
        'fecha_inicio',
        'fecha_fin',
        'total_nomina',
        'total_descuentos',
        'total_extras'
    ];
}
