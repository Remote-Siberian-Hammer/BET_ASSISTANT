<?php
namespace App\Core\IServices;

use App\Core\DTO\RapidApi\Section\CreateSectionDTO;

interface IRapidSectionService
{
	public function createAction(CreateSectionDTO $context);
}