<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Service\UserService;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\AuthUserDTO;
use App\Domain\Service\ValidationService;
use Illuminate\Contracts\Session\Session;

class LoginViewController extends Controller
{
    public function __construct()
    {
        
    }

    public function get()
    {
        return View('login');
    }
    
    public function post(Request $request, UserService $service, ValidationService $isValid)
    {
        $validated = $isValid->AuthUserValidationService($request);
        if (key_exists('errors', $validated)) return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');

        $bearerToken = $service->AuthUserService(
            AuthUserDTO::AutoMap($request),
            SearchUserByEmailDTO::AutoMap($request->Email)
        );
        // $request->session()->put("access_key", "Bearer {$bearerToken['original']['token']}");
        return redirect()->route('home');
    }
}
