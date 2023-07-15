<?php
namespace App\Domain\IService;

use App\DTO\Mail\SendCreateUserDTO;


interface IEmailService
{
    public function SendCreateUserService(SendCreateUserDTO $context);
}