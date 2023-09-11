<?php

namespace App\Http\Requests\Rapid;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRapidAccountRequest extends FormRequest
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
            "id" => ["required"]
        ];
    }

    public function messages()
    {
        return [
            /* REQUIRE */
            'id.required' => 'Это обязательное поле!'
        ];
    }
}
