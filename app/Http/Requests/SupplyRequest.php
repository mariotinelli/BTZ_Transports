<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplyRequest extends FormRequest
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
            'vehicle_id' => 'required',
            'driver_id' => 'required',
            'fuel_id' => 'required',
            'date' => 'required',
            'qtySupplied' => 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'vehicle_id.required' => 'O veículo é obrigatório!',
            'driver_id.required' => 'O motorista é obrigatório',
            'fuel_id.required' => 'O tipo de combustível é obrigatório!',
            'date.required' => 'A data é obrigatória!',
            'qtySupplied.required' => 'A quantidade abastecida é obrigatória!'
        ];
    }


}
