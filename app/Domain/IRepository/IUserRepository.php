<?php
namespace App\Domain\IRepository;

use App\DTO\User\CreateUserDTO;
use App\Models\User;

interface IUserRepository
{
    public static function Create(CreateUserDTO $context);
}