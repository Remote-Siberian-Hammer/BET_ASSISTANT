<?php
namespace App\Domain\Service;

use Illuminate\Http\Request;
use App\Domain\IService\IValidationService;


class ValidationService implements IValidationService
{
    private  $rule;
    public function __construct($rule)
    {
        $this->rule = $rule;
    }

    public function CreateUserValidationService(Request $request)
    {
        // Должен быть RegistrationRulesService
        return $request->validate(
            $this->rule::REGISTRATION_VALIDATOR,
            $this->rule::REGISTRATION_ERROR_MESSAGE
        );
    }

    public function ResetToPasswordUserValidationService(Request $request)
    {
        // Должен быть RegistrationRulesService
        return $request->validate(
            $this->rule::RESET_TO_PASSWORD_VALIDATOR,
            $this->rule::RESET_TO_PASSWORD_ERROR_MESSAGE
        );
    }

    public function AuthUserValidationService(Request $request)
    {
        // Должен быть RegistrationRulesService
        return $request->validate(
            $this->rule::AUTH_VALIDATOR,
            $this->rule::AUTH_ERROR_MESSAGE
        );
    }
}