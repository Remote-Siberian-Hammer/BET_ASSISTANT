<?php

namespace App\Core\IServices;

use App\Core\DTO\User\AuthUserDTO;
use App\Core\DTO\User\CreateUserDTO;

interface IUserService
{
    public function createAction(CreateUserDTO $context);
    public function authAction(AuthUserDTO $context);
    public function logoutAction();
}
