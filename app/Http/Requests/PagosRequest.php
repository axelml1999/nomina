<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagosRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nombre_empleado' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'num_cuenta' => 'required',
            'num_tarjeta' => 'required' 
        ];
    }

    public function messages()
    {
        return [
            'nombre_empleado.required' => 'El nombre no puede estar vacía',
            'correo.required' => 'El correo no debe estar vacio',
            'telefono.required' => 'El campo telefono no puede estar vacio',
            'num_cuenta.required' => 'Debe ingresar en número de cuenta',
            'num_tarjeta.required' => 'Debe ingresar el número de tarjeta',
        ];
    }
}
