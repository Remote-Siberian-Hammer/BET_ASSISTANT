<?php
namespace App\DTO\AccountRapid;

final class DeleteAccountRapidDTO
{
    public int $Id;

    public static function AutoMap(int $args): DeleteAccountRapidDTO
    {
        $dto = new self();
        $dto->Id = $args;
        return $dto;
    }
}