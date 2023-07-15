<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Resources\UserRequestResource;
use App\Domain\Service\UserService;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\Mail\SendCreateUserDTO;
use App\Domain\Service\ValidationService;


class RegistrationViewController extends Controller
{
    

    public function get()
    {
        return View('registration');
    }

    public function post(Request $request, UserService $service, ValidationService $isValid)
    {
        $validated = $isValid->CreateUserValidationService($request);

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
