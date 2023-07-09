<?php
namespace App\Domain\Service;

use App\Domain\IService\IEmailService;
use App\DTO\Mail\SendCreateUserDTO;
use App\DTO\Mail\SendResetToPasswordUserDTO;
use App\Mail\CreateUserMail;
use App\Mail\ResetToPasswordUserMail;
use Illuminate\Support\Facades\Mail;

class EmailService implements IEmailService
{
    public function SendCreateUserService(SendCreateUserDTO $context)
    {
        return Mail::to($context->Email)
            ->send(new CreateUserMail($context));
    }
    
    public function SendResetToPasswordUserService(SendResetToPasswordUserDTO $context)
    {
        return Mail::to($context->Email)
            ->send(new ResetToPasswordUserMail($context));
    }
}