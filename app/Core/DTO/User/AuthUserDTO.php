<?php

namespace App\Core\DTO\User;

class AuthUserDTO
{
    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getArray(): array
    {
        return [
            "email" => $this->email,
            "password" => $this->password,
        ];
    }
}
