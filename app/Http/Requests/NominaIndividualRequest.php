<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NominaIndividualRequest extends FormRequest
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
            'empleado' => 'required',
            'nominaGeneral' => 'required',
            'totalNomina' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'empleado.required' => 'Este campo es requerido',
            'nominaGeneral.required' => 'Este campo es requerido',
            'totalNomina.required' => 'Este campo es requerido'
        ];
    }
}
