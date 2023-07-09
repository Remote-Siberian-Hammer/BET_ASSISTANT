<?php
namespace App\Domain\IService;

use App\DTO\Mail\SendCreateUserDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;


interface IUserService
{
    public function CreateUserService(CreateUserDTO $context, SendCreateUserDTO $emailContext);
    public function ShowUserByIdService(SearchUserByIdDTO $context);
    public function ShowUserByEmailService(SearchUserByEmailDTO $context);
}