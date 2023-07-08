<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserRequestResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\DTO\User\CreateUserDTO;
use App\Domain\Service\UserService;
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
    public function create(Request $request)
    {
        try
        {
            $dto = CreateUserDTO::AutoMap($request);
            return new UserRequestResource(
                $this->service->CreateUserService($dto)
            );
        }
        catch(QueryException $e)
        {
            return $e->getMessage();
        }
        
    }

    /**
     * ShowById the specified resource.
    */
    public function showById(User $user)
    {
        //
    }

    /**
     * ShowByEmail the specified resource.
    */
    public function showByEmail(User $user)
    {
        //
    }

    /**
     * ResetToPassword the specified resource in storage.
    */
    public function resetToPassword(Request $request)
    {
        //
    }

    /**
     * Auth the specified resource in storage.
    */
    public function auth(Request $request)
    {
        //
    }

    /**
     * Logout the specified resource in storage.
    */
    public function logout(Request $request)
    {
        //
    }

    /**
     * UpdateAuthPassword the specified resource in storage.
    */
    public function updateAuthPassword(Request $request)
    {
        //
    }
}
