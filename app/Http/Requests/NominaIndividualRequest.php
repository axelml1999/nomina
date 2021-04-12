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
            'empleado_id' => 'required',
            'nominagen_id' => 'required',
            'extra_id' => 'required',
            'descuento_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'empleado_id.required' => 'Este campo es requerido',
            'nominagen_id.required' => 'Este campo es requerido',
            'extra_id.required' => 'Este campo es requerido',
            'descuento_id.required' => 'Este campo es requerido'
        ];
    }
}
