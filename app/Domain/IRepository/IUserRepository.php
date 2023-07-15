<?php
namespace App\Domain\IRepository;

use App\DTO\User\AuthUserDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\LogoutUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\ResetToPasswordUserDTO;


interface IUserRepository
{
    public static function Create(CreateUserDTO $context);
    public static function ShowUserById(SearchUserByIdDTO $context);
    public static function ShowUserByEmail(SearchUserByEmailDTO $context);
    public static function ResetToPasswordUser(ResetToPasswordUserDTO $context, string $newPassword);
    public static function Auth(AuthUserDTO $context);
    public static function Logout(LogoutUserDTO $context);
}