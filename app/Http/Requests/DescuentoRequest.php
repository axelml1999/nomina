<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescuentoRequest extends FormRequest
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
            'descuento' => 'required',
            'valor' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'descuento.required' => 'Este campo es requerido',
            'valor.required' => 'El campo es requerido'
        ];
    }
}
