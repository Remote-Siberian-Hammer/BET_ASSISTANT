<?php
namespace App\Core\IRepository;

use App\Core\Entityes\RapidApi\Sport\SportEntity;

interface IRapidSportRepository
{
	public function create(SportEntity $sport);
}