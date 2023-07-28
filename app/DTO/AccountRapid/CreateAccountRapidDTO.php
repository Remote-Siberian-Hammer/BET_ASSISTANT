<?php
namespace App\DTO\AccountRapid;

final class CreateAccountRapidDTO
{
    public string $Email;
    public string $RapidTocken;
    public int $SportScoreCountQuery;
    public int $TranslationMemoryWordCount;
    public string $NextUpdate;

    public static function AutoMap(mixed $args): CreateAccountRapidDTO
    {
        $dto = new self();
        $dto->Email = $args['Email'];
        $dto->RapidTocken = $args['RapidTocken'] ? $args['RapidTocken'] : null;
        $dto->SportScoreCountQuery = $args['SportScoreCountQuery'] ? $args['SportScoreCountQuery'] : null;
        $dto->TranslationMemoryWordCount = $args['TranslationMemoryWordCount'] ? $args['TranslationMemoryWordCount'] : null;
        $dto->NextUpdate = $args['NextUpdate'];
        return $dto;
    }
}