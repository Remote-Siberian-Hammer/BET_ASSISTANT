<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'email' => ['required', 'unique:users',],
            'password' => ['required', 'min:8', 'max:16', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            /* REQUIRE */
            'email.required' => 'Это обязательное поле!',
            'password.required' => 'Это обязательное поле!',
            'password_confirmation.required' => 'Это обязательное поле!',
            /* MIN */
            'password.min' => 'Пароль не может быть меньше :min и больше :max символов!',
            /* MAX */
            'password.max' => 'Пароль не может быть меньше :min и больше :max символов!',
            /* CONFIRMED */
            'password.confirmed' => 'Пароли не совпадают!',
            /* UNIQUE */
            'email.unique' => 'Адрес электронной почты уже зарегистрирован!',
        ];
    }
}
