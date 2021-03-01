<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorariosRequest extends FormRequest
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
            'entrada' => 'required',
            'salida' => 'required',
            'turno' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'entrada.required' => 'campo 1 requerido',
            'salida.required' => 'campo 2 requerido',
            'turno.required' => 'campo 3 requerido'
        ];
    }
}
