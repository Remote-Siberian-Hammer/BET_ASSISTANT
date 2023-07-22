<?php
namespace App\DTO\Language\Session;

final class ShowSessionLanguageDTO
{
    public int $UserId;

    public static function AutoMap(mixed $args): ShowSessionLanguageDTO
    {
        $dto = new self();
        $dto->UserId = $args['UserId'];
        return $dto;
    }
}