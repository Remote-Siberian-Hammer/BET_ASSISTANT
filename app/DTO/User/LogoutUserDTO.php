<?php
namespace App\DTO\User;

final class LogoutUserDTO
{
    public int $Id;

    public static function AutoMap(int $args): LogoutUserDTO
    {
        $dto = new self();
        $dto->Id = $args;
        return $dto;
    }
}