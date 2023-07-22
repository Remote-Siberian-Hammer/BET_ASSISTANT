<?php
namespace App\DTO\Language;

final class CreateLanguageDTO
{
    public string $Language;

    public static function AutoMap(mixed $args): CreateLanguageDTO
    {
        $dto = new self();
        $dto->Language = $args['Language'];
        return $dto;
    }
}