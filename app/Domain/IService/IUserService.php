<?php
namespace App\Domain\IService;

use App\DTO\User\CreateUserDTO;


interface IUserService
{
    public function CreateUserService(CreateUserDTO $context);
}