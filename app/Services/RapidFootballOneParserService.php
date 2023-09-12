<?php
namespace App\Services;

use App\Console\Parser\ParserObserverService;
use App\Core\IServices\IRapidFootballOneParserService;

class RapidFootballOneParserService implements IRapidFootballOneParserService
{
	public function getSportAction(ParserObserverService $observer, RapidUserService $user_service, $count_page=100, $url="https://sportscore1.p.rapidapi.com/sports/1/teams?page=")
    {
        $i = 1;
        while($i < $count_page)
        {
            $service = $observer->parser(new ParserService());
            $row = $service->parse($url + $i, $user_service->showSessionAction());
            $i++;
        }
    }
}