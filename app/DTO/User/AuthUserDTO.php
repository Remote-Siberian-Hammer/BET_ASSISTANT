<?php
namespace App\DTO\User;

final class AuthUserDTO
{
    public string|null $Email;
    public string $Password;

    public static function AutoMap(mixed $args): AuthUserDTO
    {
        $dto = new self();
        $dto->Email = $args['Email'];
        $dto->Password = $args['Password'];
        return $dto;
    }
}