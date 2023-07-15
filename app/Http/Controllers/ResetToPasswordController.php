<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Service\UserService;
use App\Http\Resources\UserRequestResource;
use App\DTO\User\ResetToPasswordUserDTO;
use Illuminate\Database\QueryException;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use App\Domain\Service\ValidationService;


class ResetToPasswordController extends Controller
{
    public function __construct()
    {
        
    }

    public function post(Request $request, UserService $service, ValidationService $isValid)
    {
        $validated = $isValid->ResetToPasswordUserValidationService($request);
        if (key_exists('errors', $validated)) return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');
        try
        {
            new UserRequestResource(
                $service->ResetToPasswordUserService(
                    ResetToPasswordUserDTO::AutoMap($request),
                    SendResetToPasswordUserDTO::AutoMap($request)
                )
            );
            return back()->with('success', 'Проверьте почту, вам должно прийти письмо с новым паролем!');
        } 
        catch(QueryException $e)
        {
            return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');
        }
    }
}
