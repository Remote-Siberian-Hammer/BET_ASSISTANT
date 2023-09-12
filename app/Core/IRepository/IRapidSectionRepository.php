<?php
namespace App\Core\IRepository;

use App\Core\Entityes\RapidApi\Section\SectionEntity;

interface IRapidSectionRepository
{
	public function create(SectionEntity $section);
}