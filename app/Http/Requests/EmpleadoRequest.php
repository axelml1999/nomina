<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            "nombre" => "required" ,
            "apellido_paterno" => "required" ,
            "apellido_materno" => "required" ,
            "curp" => "required" ,
            "direccion" => "required" ,
            "salario" => "required" ,
            "turno_id" => "required" ,
            "cargo_id" => "required" ,
            "departamento_id" => "required" ,
            "sexo_id" => "required" ,
            "fecha_nacimiento" => "required" ,
            "pago_id" => "required" 
        ];
    }

    public function messages() {
        return [
            "nombre.required" => "nombre no puede estar vacio" ,
            "apellido_paterno.required" => "Apellido paterno no puede estar vacio" ,
            "apellido_materno.required" => "Apellido materno no puede estar vacio" ,
            "curp.required" => "Curp no puede estar vacio" ,
            "direccion.required" => "direccion no puede estar vacia", 
            "salario.required" => "Salario no puede estar vacio" ,
            "turno_id.required" => "Turno no puede estar vacio" ,
            "cargo_id.required" => "Cargo no puede estar vacio" ,
            "departamento_id.required" => "Departamento no puede estar vacio" ,
            "sexo_id.required" => "Sexo no puede estar vacio" ,
            "fecha_nacimiento.required" => "Fecha de nacimiento no puede estar vacio" ,
            "pago_id.required" => "Pago no puede estar vacio" 
        ];
    }

}
