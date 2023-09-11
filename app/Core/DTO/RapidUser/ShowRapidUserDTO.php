<?php
namespace App\Core\DTO\RapidUser;

class ShowRapidUserDTO
{
	public int $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getArray(): array
    {
        return [
            "id" => $this->id
        ];
    }
}