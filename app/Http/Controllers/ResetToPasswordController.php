<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Service\UserService;


class ResetToPasswordController extends Controller
{
    public function __construct()
    {
        
    }

    public function post(Request $request, UserService $service)
    {
        
    }
}
