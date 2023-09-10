<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRegistration()
    {
        return view("UserView/create");
    }
    public function getAuthorization()
    {
        return view("UserView/auth");
    }
}
