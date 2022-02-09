<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|string',
            'username' => 'bail|string',
            'password' => 'bail|string',
            'exchange_api_key' => 'bail|string',
            'exchange_secret_key' => 'bail|string',
        ];
    }
}
