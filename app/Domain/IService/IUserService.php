<?php
namespace App\Domain\IService;

use App\DTO\Mail\SendCreateUserDTO;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\SearchUserByIdDTO;
use App\DTO\User\SearchUserByEmailDTO;
use App\DTO\User\ResetToPasswordUserDTO;


interface IUserService
{
    public function CreateUserService(CreateUserDTO $context, SendCreateUserDTO $emailContext);
    public function ShowUserByIdService(SearchUserByIdDTO $context);
    public function ShowUserByEmailService(SearchUserByEmailDTO $context);
    public function ResetToPasswordUserService(ResetToPasswordUserDTO $context, SendResetToPasswordUserDTO $emailContext);
}