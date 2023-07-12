<?php
namespace App\DTO\User;

final class SearchUserByIdDTO
{
    public int $Id;

    public static function AutoMap(int $args): SearchUserByIdDTO
    {
        $dto = new self();
        $dto->Id = $args ? $args : null;
        return $dto;
    }
}