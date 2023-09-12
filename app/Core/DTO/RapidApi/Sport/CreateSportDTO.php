<?php
namespace App\Core\DTO\RapidApi\Sport;

class CreateSportDTO
{
    public string $name;
    public int $rapid_id;

    public function __construct(string $name, int $rapid_id)
    {
        $this->name = $name;
        $this->rapid_id = $rapid_id;
    }
}