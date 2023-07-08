<?php
namespace App\Repository;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\Domain\IRepository\IUserRepository;
use App\DTO\User\SearchUserByEmailDTO;
use App\Models\User;

final class UserRepository implements IUserRepository
{
    public static function Create(CreateUserDTO $context)
    {
        $model = new User();
        $model->FirstName = $context->FirstName;
        $model->LastName = $context->LastName;
        $model->Email = $context->Email;
        $model->Phone = $context->Phone;
        $model->Password = $context->Password;
        $model->save();
        return $model;
    }

    public static function ShowUserById(SearchUserByIdDTO $context)
    {
        $model = User::find($context->Id);
        return $model;
    }

    public static function ShowUserByEmail(SearchUserByEmailDTO $context)
    {
        $model = User::where('Email', $context->Email)
            ->latest()
            ->get();
        return $model;
    }
}