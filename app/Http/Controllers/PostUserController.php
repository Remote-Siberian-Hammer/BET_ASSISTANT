<?php

namespace App\Http\Controllers;

use App\Core\DTO\User\AuthUserDTO;
use App\Core\DTO\User\CreateUserDTO;
use App\Core\Entityes\UserRoleEntity;
use App\Http\Requests\User\AuthUserRequest;
use App\Http\Requests\User\CreateUserRequest;
use App\Services\UserService;

class PostUserController extends Controller
{
    public function createUser(CreateUserRequest $userRequest, UserRoleEntity $role, UserService $service)
    {
        $request = $userRequest->validated();
        $service->createAction(
            new CreateUserDTO(
                $request["email"],
                $role::CLIENT,
                $request["password"]
            )
        );
        return back()
            ->with("success", "Вы успешно создали аккаунт!");
    }

    public function authUser(AuthUserRequest $userRequest, UserService $service)
    {
        $request = $userRequest->validated();
        $user = $service->authAction(
            new AuthUserDTO(
                $request["email"],
                $request["password"]
            )
        );

        return $user ? redirect()->route("index.page") : back()->with("error", "");
    }

    public function logoutUser(UserService $service)
    {
        $service->logoutAction();
        return redirect()
            ->route("index.page");
    }
}
