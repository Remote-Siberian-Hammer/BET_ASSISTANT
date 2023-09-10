<?php

namespace App\Services;

use App\Core\DTO\User\AuthUserDTO;
use App\Core\DTO\User\CreateUserDTO;
use App\Core\Entityes\User;
use App\Core\IServices\IUserService;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService implements IUserService
{
    protected UserRepository $repository;
    public function __construct()
    {
        $this->repository = new UserRepository();
    }
    
    public function createAction(CreateUserDTO $context)
    {
        return $this->repository->create(
            new User($context->getArray())
        );
    }

    public function authAction(AuthUserDTO $context)
    {
        $user = $this->repository->findByEmail($context->getArray()["email"]);
        if ($user && $context->getArray()["password"] == $user->password)
        {
            Auth::login($user);
            return true;
        }
        return false;
    }

    public function logoutAction()
    {
        return Auth::logout();
    }
}
