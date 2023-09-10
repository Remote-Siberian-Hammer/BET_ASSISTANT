<?php

namespace App\Core\DTO\User;

class FindByEmailDTO
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getArray(): array
    {
        return [
            "email" => $this->email,
        ];
    }
}
