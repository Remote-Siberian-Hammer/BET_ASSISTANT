<?php
namespace App\Core\DTO\RapidUser\Session;

class CreateRapidUserSessionDTO
{
	public int $rapid_profile_id;
    public function __construct(int $rapid_profile_id)
    {
        $this->rapid_profile_id = $rapid_profile_id;
    }

    public function getArray(): array
    {
        return [
            "rapid_profile_id" => $this->rapid_profile_id
        ];
    }
}