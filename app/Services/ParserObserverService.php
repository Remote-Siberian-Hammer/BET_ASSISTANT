<?php
namespace App\Console\Parser;

use App\Core\IServices\IParserObserverService;
use App\Services\ParserService;
use Psr\Http\Message\ResponseInterface;

class ParserObserverService implements IParserObserverService
{
	public function update(ParserService $parser, ResponseInterface $response) 
    {
        return $response->getStatusCode() == 200 ? $response->getBody() : ["message" => "Ошибка сервера статус ответа $response->getStatusCode()"];
    }
    public function parser(ParserService $parser)
    {
        return ParserService::builder()
            ->withObserver(new ParserObserverService())
            ->build();
    }
}