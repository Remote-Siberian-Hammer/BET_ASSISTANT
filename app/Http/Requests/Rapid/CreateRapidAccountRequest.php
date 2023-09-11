<?php

namespace App\Http\Requests\Rapid;

use Illuminate\Foundation\Http\FormRequest;

class CreateRapidAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required'],
            'host' => ['required'],
            'access_key' => ['required'],
            'count' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            /* REQUIRE */
            'type.required' => 'Это обязательное поле!',
            'host.required' => 'Это обязательное поле!',
            'access_key.required' => 'Это обязательное поле!',
            'count.required' => 'Это обязательное поле!',
        ];
    }
}
