<?php
namespace App\Repository\RapidApi;

use App\Core\Entityes\RapidApi\Section\SectionEntity;
use App\Core\IRepository\IRapidSectionRepository;

class SectionRepository implements IRapidSectionRepository
{
	public function create(SectionEntity $section)
    {
        return $section->save();
    }
}