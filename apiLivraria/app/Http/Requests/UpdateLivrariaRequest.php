<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLivrariaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome_livro' => [
                'required',
                'min:3',
                'max:50',
            ],
            'autor_livro' => [
                'required',
                'min:3',
                'max:50',
            ],
            'ano_livro' => [
                'required',
                'min:4',
                'max:5',
            ],
            'genero_livro' => [
                'required',
                'min:3',
                'max:50',
            ],
            'editora_livro' => [
                'required',
                'min:3',
                'max:50',
            ],
            'paginas_livro' => [
                'required',
                'min:1',
                'max:500',
            ],

        ];
    }
}
