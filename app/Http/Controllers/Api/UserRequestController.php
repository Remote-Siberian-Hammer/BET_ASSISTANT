<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserRequestResource;
use Illuminate\Http\Request;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\Domain\Service\UserService;
use App\DTO\Mail\SendCreateUserDTO;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\DTO\User\ResetToPasswordUserDTO;
use Illuminate\Database\QueryException;


class UserRequestController extends Controller
{
    protected UserService $service;
    public function __construct()
    {
        $this->service = new UserService();
    }

    /**
     * Create a newly created resource in storage.
    */
    public function create(Request $request, UserService $service)
    {
        $user =  $service->ShowUserByEmailService(SearchUserByEmailDTO::AutoMap($request->Email));
        if ($user)
        {
            throw new \ErrorException('Такой пользователь существует!');
        }
        try
        {
            return new UserRequestResource(
                $service->CreateUserService(
                    CreateUserDTO::AutoMap($request),
                    SendCreateUserDTO::AutoMap($request),
                )
            );
        }
        catch(QueryException $e)
        {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * ShowById the specified resource.
    */
    public function showById(int $user_id, UserService $service)
    {
        $action = $service->ShowUserByIdService(
            SearchUserByIdDTO::AutoMap($user_id)
        );
        if ($action)
        {
            return new UserRequestResource($action);
        }
        else
        {
            throw new \Exception('Данных нет!');
        }
    }

    /**
     * ShowByEmail the specified resource.
    */
    public function showByEmail(string $user_email, UserService $service)
    {
        $action = $service->ShowUserByEmailService(
            SearchUserByEmailDTO::AutoMap($user_email)
        );
        if ($action)
        {
            return $action;
            // return new UserRequestResource($action);
        }
        else
        {
            throw new \Exception('Данных нет!');
        }
    }

    /**
     * ResetToPassword the specified resource in storage.
    */
    public function resetToPassword(Request $request, UserService $service)
    {
        try
        {
            return new UserRequestResource(
                $service->ResetToPasswordUserService(
                    ResetToPasswordUserDTO::AutoMap($request),
                    SendResetToPasswordUserDTO::AutoMap($request)
                )
            );
        } 
        catch(QueryException $e)
        {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Auth the specified resource in storage.
    */
    public function auth(Request $request, UserService $service)
    {
        return $service->AuthUserService(
            AuthUserDTO::AutoMap($request),
            SearchUserByEmailDTO::AutoMap($request->Email)
        );
    }

    /**
     * Logout the specified resource in storage.
    */
    public function logout(int $user_id, UserService $service)
    {
        return $service->LogoutUserService(
            LogoutUserDTO::AutoMap($user_id)
        );
    }

    /**
     * UpdateAuthPassword the specified resource in storage.
    */
    public function updateToPassword(Request $request)
    {
        //
    }
}
