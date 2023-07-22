<?php
namespace App\DTO\Language\Session;

final class CreateSessionLanguageDTO
{
    public int $LanguageId;
    public int $UserId;

    public static function AutoMap(mixed $args): CreateSessionLanguageDTO
    {
        $dto = new self();
        $dto->LanguageId = $args['LanguageId'];
        $dto->UserId = $args['UserId'];
        return $dto;
    }
}