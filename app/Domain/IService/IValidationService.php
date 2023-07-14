<?php
namespace App\Domain\IService;

use Illuminate\Http\Request;
use App\Domain\Service\RegistrationRulesService;


interface IValidationService
{
    public function CreateUserValidationService(Request $request);
}