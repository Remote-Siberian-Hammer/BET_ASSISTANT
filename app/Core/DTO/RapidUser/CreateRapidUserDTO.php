<?php
namespace App\Core\DTO\RapidUser;

class CreateRapidUserDTO
{
	public string $type;
	public string $host;
	public string $access_key;
	public int $facts_count;
	public int $count;
	public string $activation_facts;

    public function __construct(string $type, string $host, string $access_key, int $facts_count,
                                int $count, string $activation_facts)
    {
        $this->type = $type;
        $this->host = $host;
        $this->access_key = $access_key;
        $this->facts_count = $facts_count;
        $this->count = $count;
        $this->activation_facts = $activation_facts;
    }

    public function getArray(): array
    {
        return [
            "type" => $this->type,
            "host" => $this->host,
            "access_key" => $this->access_key,
            "facts_count" => $this->facts_count,
            "count" => $this->count,
            "activation_facts" => $this->activation_facts
        ];
    }
}