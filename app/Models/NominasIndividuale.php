<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NominasIndividuale extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleado_id',
        'nominagen_id',
        'extra_id',
        'descuento_id',
    ];

    public function empleados()
    {
        return $this->belongsTo('App\Models\Empleado', 'empleado_id');
    }
    
    public function extras()
    {
        return $this->belongsTo('App\Models\Extra', 'extra_id');
    }

    public function nomina_gen()
    {
        return $this->belongsTo('App\Models\NominasGenerale', 'nominagen_id');
    }

    public function descuentos()
    {
        return $this->belongsTo('App\Models\Descuento', 'descuento_id');
    }

}
