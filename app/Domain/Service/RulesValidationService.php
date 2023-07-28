<?php
namespace App\Domain\Service;


class RulesValidationService
{
    /**
     * Правила и сообщения валидации для 
     * создания профиля в системе.
    */
    public const REGISTRATION_VALIDATOR = [
        "FirstName" => "required|min:2|max:30",
        "LastName" => "required|min:2|max:30",
        "Email" => "required|min:8|max:30",
        "Password" => "required|min:8|max:30",
        "Password1" => "required|min:8|max:30",
    ];
    
    public const REGISTRATION_ERROR_MESSAGE = [
        // REQUIRED
        "FirstName.required" => "Укажите ваше имя",
        "LastName.required" => "Укажите вашу фамилию",
        "Email.required" => "Укажите адрес электронной почты",
        "Password.required" => "Введите пароль",
        "Password1.required" => "Введите пароль ещё раз",
        // MIN
        "FirstName.min" => "Имя не должено быть меньше :min символов",
        "LastName.min" => "Фамилия не должна быть меньше :min символов",
        "Email.min" => "E-mail не должен быть меньше :min символов",
        "Password.min" => "Пароль не должен быть меньше :min символов",
        "Password1.min" => "Пароль не должен быть меньше :min символов",
        // MAX
        "FirstName.max" => "Имя не должено быть больше :max символов",
        "LastName.max" => "Фамилия не должна быть больше :max символов",
        "Email.max" => "E-mail не должен быть больше :max символов",
        "Password.max" => "Пароль не должен быть больше :max символов",
        "Password1.max" => "Пароль не должен быть больше :max символов"
    ];

    /**
     * Правила и сообщения валидации для 
     * смены пароля профиля.
    */
    public const RESET_TO_PASSWORD_VALIDATOR = [
        "Email" => "required|min:8|max:30",
        
    ];
    
    public const RESET_TO_PASSWORD_ERROR_MESSAGE = [
        // REQUIRED
        "Email.required" => "Укажите адрес электронной почты",
        // MIN
        "Email.min" => "E-mail не должен быть меньше :min символов",
        // MAX
        "Email.max" => "E-mail не должен быть больше :max символов",
    ];

    /**
     * Правила и сообщения валидации для 
     * смены пароля профиля.
    */
    public const AUTH_VALIDATOR = [
        "Email" => "required|min:8|max:30",
        "Password" => "required|min:8|max:30",
    ];
    
    public const AUTH_ERROR_MESSAGE = [
        // REQUIRED
        "Email.required" => "Укажите адрес электронной почты",
        // MIN
        "Email.min" => "E-mail не должен быть меньше :min символов",
        "Password.min" => "Пароль не должен быть меньше :min символов",
        // MAX
        "Email.max" => "E-mail не должен быть больше :max символов",
        "Password.max" => "Пароль не должен быть больше :max символов",
    ];

    /**
     * Правила и сообщения валидации для 
     * смены пароля профиля.
    */
    public const ACCOUNT_RAPID_VALIDATOR = [
        "Email" => "required|min:6|max:30",
    ];

    public const ACCOUNT_RAPID_ERROR_MESSAGE = [
        // REQUIRED
        "Email.required" => "Укажите адрес электронной почты",
        // MIN
        "Email.min" => "E-mail не должен быть меньше :min символов",
    ];
}
