<?php
namespace App\Domain\IService;

use Illuminate\Http\Request;


interface IValidationService
{
    public function CreateUserValidationService(Request $request);
    public function ResetToPasswordUserValidationService(Request $request);
}