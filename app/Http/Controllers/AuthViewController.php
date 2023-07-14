<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Service\UserService;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\AuthUserDTO;
use App\Domain\Service\ValidationService;
use App\DTO\User\LogoutUserDTO;


class AuthViewController extends Controller
{
    public function __construct()
    {
        
    }

    public function auth_get()
    {
        return View('login');
    }
    
    public function auth_post(Request $request, UserService $service, ValidationService $isValid)
    {
        $validated = $isValid->AuthUserValidationService($request);
        if (key_exists('errors', $validated)) return back()->withInput()->with('error', 'Проверьте правильность введённых данных!');

        $user = $service->AuthUserService(
            AuthUserDTO::AutoMap($request),
            SearchUserByEmailDTO::AutoMap($request->Email)
        );
        $request->session()->put("access_key", "Bearer {$user['bearer_token']}");
        $request->session()->put("user_id", $user['user']['id']);
        $request->session()->put("FirstName", $user['user']['FirstName']);
        $request->session()->put("LastName", $user['user']['LastName']);
        $request->session()->put("Email", $user['user']['Email']);
        return redirect()->route('home');
    }

    public function logout_get(int $user_id, UserService $service)
    {
        $service->LogoutUserService(LogoutUserDTO::AutoMap($user_id));
        session()->forget("access_key");
        session()->forget("user_id");
        session()->forget("FirstName");
        session()->forget("LastName");
        session()->forget("Email");
        return redirect()->route('home');;
    }
}
