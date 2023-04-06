<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules() :array
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=> 'Veuillez saisir un nom.',
            'email.unique'=> 'Cette email est deja utilisé',
        ];
    }
}
