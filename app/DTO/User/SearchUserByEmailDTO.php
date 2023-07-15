<?php
namespace App\DTO\User;

final class SearchUserByEmailDTO
{
    public string $Email;

    public static function AutoMap(string $args): SearchUserByEmailDTO
    {
        $dto = new self();
        $dto->Email = $args ? $args : null;
        return $dto;
    }
}