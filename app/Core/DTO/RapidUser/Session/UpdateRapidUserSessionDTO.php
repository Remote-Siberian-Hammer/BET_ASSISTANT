<?php
namespace App\Core\DTO\RapidUser\Session;

class UpdateRapidUserSessionDTO
{
	public int $id;
	public int $rapid_profile_id;
    public function __construct(int $id, int $rapid_profile_id)
    {
        $this->id = $id;
        $this->rapid_profile_id = $rapid_profile_id;
    }

    public function getArray(): array
    {
        return [
            "id" => $this->id,
            "rapid_profile_id" => $this->rapid_profile_id
        ];
    }
}