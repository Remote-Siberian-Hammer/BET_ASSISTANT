<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Service\UserService;


class LoginViewController extends Controller
{
    public function __construct()
    {
        
    }

    public function get()
    {
        return View('login');
    }
    
    public function post(Request $request, UserService $service)
    {
        
    }
}
