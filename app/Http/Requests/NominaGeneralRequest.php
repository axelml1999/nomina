<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NominaGeneralRequest extends FormRequest
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
            'semana' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'semana.required' => 'estes campo es requerido',
            'fecha_inicio.required' => 'estes campo es requerido',
            'fecha_fin.required' => 'estes campo es requerido',

        ];
    }
}
