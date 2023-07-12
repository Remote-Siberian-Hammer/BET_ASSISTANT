<?php
namespace App\DTO\User;

final class ResetToPasswordUserDTO
{
    public string $Email;

    public static function AutoMap(mixed $args): ResetToPasswordUserDTO
    {
        $dto = new self();
        $dto->Email = $args['Email'];
        return $dto;
    }
}