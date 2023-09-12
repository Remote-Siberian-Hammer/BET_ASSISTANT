<?php
namespace App\Core\IServices;

use App\Console\Parser\ParserObserverService;
use App\Services\RapidUserService;

interface IRapidFootballOneParserService
{
	public function getSportAction(ParserObserverService $observer, RapidUserService $user_service);
}