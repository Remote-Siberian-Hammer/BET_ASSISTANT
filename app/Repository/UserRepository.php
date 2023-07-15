<?php
namespace App\Repository;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\Domain\IRepository\IUserRepository;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\ResetToPasswordUserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

final class UserRepository implements IUserRepository
{
    public static function Create(CreateUserDTO $context)
    {
        $model = new User();
        $model->FirstName = $context->FirstName;
        $model->LastName = $context->LastName;
        $model->Email = $context->Email;
        $model->Phone = $context->Phone;
        $model->Password = Hash::make($context->Password);
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

    public static function ResetToPasswordUser(ResetToPasswordUserDTO $context, string $newPassword)
    {
        $model = User::where('Email', $context->Email)->first();
        $user = User::find($model->id);
        $user->Password = Hash::make($newPassword);
        $user->save();
        return $user;
    }

    public static function Auth(AuthUserDTO $context)
    {
        return User::createBearerTocken(
            User::where('Email', $context->Email)->first()
        );
    }

    public static function Logout(LogoutUserDTO $context)
    {
        return User::deleteBearerTocken(
            User::find($context->Id)
        );
    }
}