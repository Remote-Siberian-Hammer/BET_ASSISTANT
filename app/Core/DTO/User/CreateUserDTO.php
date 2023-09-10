<?php

namespace App\Core\DTO\User;

class CreateUserDTO
{

    private string|null $email;
    private string $role;
    private string $password;

    public function __construct(string|null $email, string $role, string $password)
    {
        $this->email = $email;
        $this->role = $role;
        $this->password = $password;
    }

    public function getArray(): array
    {
        return [
            "email" => $this->email,
            "role" => $this->role,
            "password" => $this->password,
        ];
    }
}
