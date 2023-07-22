<?php
namespace App\DTO\Language;

final class ShowLanguageDTO
{
    public int $Id;

    public static function AutoMap(int $args): ShowLanguageDTO
    {
        $dto = new self();
        $dto->Id = $args;
        return $dto;
    }
}