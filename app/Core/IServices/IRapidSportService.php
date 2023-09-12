<?php
namespace App\Core\IServices;

use App\Core\DTO\RapidApi\Sport\CreateSportDTO;

interface IRapidSportService
{
	public function createAction(CreateSportDTO $context);
}