<?php
namespace App\Domain\IRepository;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;


interface IUserRepository
{
    public static function Create(CreateUserDTO $context);
    public static function ShowUserById(SearchUserByIdDTO $context);
    public static function ShowUserByEmail(SearchUserByEmailDTO $context);
}