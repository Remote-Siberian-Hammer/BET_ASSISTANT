<?php
namespace App\Repository\RapidApi;

use App\Core\Entityes\RapidApi\Sport\SportEntity;
use App\Core\IRepository\IRapidSportRepository;

class SportRepository implements IRapidSportRepository
{
	public function create(SportEntity $sport)
    {
        return $sport->save();
    }
}