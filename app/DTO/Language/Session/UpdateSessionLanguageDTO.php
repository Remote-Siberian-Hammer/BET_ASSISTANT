<?php
namespace App\DTO\Language\Session;

final class UpdateSessionLanguageDTO
{
    public int $Id;
    public int $LanguageId;
    public int $UserId;

    public static function AutoMap(mixed $args): UpdateSessionLanguageDTO
    {
        $dto = new self();
        $dto->Id = $args['Id'];
        $dto->LanguageId = $args['LanguageId'];
        $dto->UserId = $args['UserId'];
        return $dto;
    }
}