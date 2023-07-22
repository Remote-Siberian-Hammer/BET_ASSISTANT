<?php
namespace App\DTO\Language;

final class DeleteLanguageDTO
{
    public int $Id;

    public static function AutoMap(int $args): DeleteLanguageDTO
    {
        $dto = new self();
        $dto->Id = $args;
        return $dto;
    }
}