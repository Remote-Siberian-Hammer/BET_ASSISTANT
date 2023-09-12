<?php
namespace App\Core\DTO\RapidApi\Section;

class CreateSectionDTO
{
    public int $sport_id;
    public int $rapid_sport_id;
    public string $slug;
    public string $flag;
    public string $name;
    public string $name_ru;
    public string $name_en;
    public string $name_de;
    public string $name_fr;

    public function __construct(int $sport_id, int $rapid_sport_id, string $slug, string $flag, string $name,
                    string $name_ru, string $name_en, string $name_de, string $name_fr)
    {
        $this->sport_id = $sport_id;
        $this->rapid_sport_id = $rapid_sport_id;
        $this->slug = $slug;
        $this->flag = $flag;
        $this->name = $name;
        $this->name_ru = $name_ru;
        $this->name_en = $name_en;
        $this->name_de = $name_de;
        $this->name_fr = $name_fr;
    }
}