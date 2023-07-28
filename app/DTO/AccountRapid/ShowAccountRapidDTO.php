<?php
namespace App\DTO\AccountRapid;

final class ShowAccountRapidDTO
{
    public int $Id;

    public static function AutoMap(int $args): ShowAccountRapidDTO
    {
        $dto = new self();
        $dto->Id = $args;
        return $dto;
    }
}