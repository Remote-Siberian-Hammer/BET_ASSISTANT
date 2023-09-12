<?php
namespace App\Core\IServices;

use App\Services\ParserService;
use Psr\Http\Message\ResponseInterface;

interface IParserObserverService
{
	public function update(ParserService $parser, ResponseInterface $response);
	public function parser(ParserService $parser);
}