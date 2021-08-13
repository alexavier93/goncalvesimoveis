<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
            'nome'          => 'required',
            'dormitorios'   => 'required',
            'banheiros'     => 'required',
            'descricao'     => 'required',
            'endereco'      => 'required',
            'tag_title'         => 'max:150',
            'tag_description'   => 'max:150',
            'tag_keywords'      => 'max:150',
            'imagem'            => 'mimes:jpeg,png,jpg',
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
            'required'  => 'Este campo é obrigatório',
            'mimes'     => 'As imagens precisam ser em JPEG, JPG ou PNG.',
            'min'       => 'O campo deve ter no mínimo :min caracteres.',
            'max'       => 'O campo deve ter no máximo :max caracteres.',
        ];
    }
}
