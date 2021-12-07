<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FullName;

class EditDriverRequest extends FormRequest
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
            'name' => ['required', new FullName],
            'cpf' => 'required|cpf',
            'cnhNumber' => 'required|cnh',
            'cnhCategory' => 'required',
            'birthDate' => 'required',
            'status' => 'required'
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
        'cpf.cpf' => 'CPF inválido.',
        'name.required' => 'O nome é obrigatório!',
        'cpf.required' => 'O CPF é obrigatório!',
        'cnhNumber.required' => 'O número da CNH é obrigatório!',
        'cnhCategory.required' => 'A categoria da CNH é obrigatória!',
        'birthDate.required' => 'A data de nascimento é obrigatória!',
        'status.required' => 'O status é obrigatório!'
    ];
}
}
