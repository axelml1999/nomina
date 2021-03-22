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
        'total_nom'
    ];
}
