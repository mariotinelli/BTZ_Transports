<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditVehicleRequest extends FormRequest
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
            'board' => 'required|placa',
            'vehicleName' => 'required',
            'fuel_id' => 'required',
            'manufacturer' => 'required',
            'yearManufacturer' => 'required',
            'maximumTankCapacity' => 'required'
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
            'board.placa' => 'Placa inválida!',
            'board.required' => 'A placa é obrigatória!',
            'vehicleName.required' => 'O nome do veículo é obrigatório!',
            'fuel_id.required' => 'O tipo de combustível é obrigatório!',
            'manufacturer.required' => 'O fabricante é obrigatório!',
            'yearManufacturer.required' => 'O ano de fabricação é obrigatório!',
            'maximumTankCapacity.required' => 'A capacidade do tanque é obrigatória!'
        ];
    }
}
