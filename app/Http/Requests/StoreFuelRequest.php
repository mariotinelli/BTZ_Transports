<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuelRequest extends FormRequest
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
            'typeFuel' => 'required|unique',
            'price' => 'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'typeFuel.required' => 'O nome é obrigatório!', 
            'price.required' => 'O valor é obrigatório!',           
            'typeFuel.unique' => 'O tipo de combustível já existe no sistema!'
        ];
    }
}
