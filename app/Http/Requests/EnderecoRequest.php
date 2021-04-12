<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoRequest extends FormRequest
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
            'cep' => 'required|string|max:10',
            'logradouro' => 'required|string|max:100',
            'numero' => 'required|int',
            'bairro' => 'required|string',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:100'
        ];
    }
}
