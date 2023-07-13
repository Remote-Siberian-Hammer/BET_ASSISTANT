<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Resources\UserRequestResource;
use App\Domain\Service\UserService;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\Mail\SendCreateUserDTO;


class RegistrationViewController extends Controller
{
    private const REGISTRATION_VALIDATOR = [
        "FirstName" => "required|min:2|max:30",
        "LastName" => "required|min:2|max:30",
        "Email" => "required|min:8|max:30",
        "Password" => "required|min:8|max:30",
        "Password1" => "required|min:8|max:30",
    ];
    private const REGISTRATION_ERROR_MESSAGE = [
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

    public function get()
    {
        return View('registration');
    }

    public function post(Request $request, UserService $service)
    {
        $validated = $request->validate(
            self::REGISTRATION_VALIDATOR,
            self::REGISTRATION_ERROR_MESSAGE
        );

        if (key_exists('errors', $validated)) return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');

        $user =  $service->ShowUserByEmailService(SearchUserByEmailDTO::AutoMap($request->Email));
        if (count($user) > 0)
        {
            return back()->withInput()->with('error', 'Такой пользователь существует!');
        }
        try
        {
            new UserRequestResource(
                $service->CreateUserService(
                    CreateUserDTO::AutoMap($request),
                    SendCreateUserDTO::AutoMap($request),
                )
            );
            return back()->with('success', 'Вы успешно зарегистрированны, проверьте почту.');
        }
        catch(QueryException $e)
        {
            return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');
        }
    }
}
