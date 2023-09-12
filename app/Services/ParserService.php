<?php
namespace App\Services;

use App\Core\IServices\IParserObserverService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ParserService
{
	private Client $client;
    private array $observers = [];

    private function __construct()
    {
        $this->client = new Client();
    }
    
    public static function builder(): ParserBuilder
    {
        return new ParserBuilder();
    }

    public function addObserver(IParserObserverService $observer)
    {
        $this->observers[] = $observer;
    }

    public function parse(string $url, $param)
    {
        try
        {
            $response = $this->client->request("GET", $url, [
                'headers' => [
                    'X-RapidAPI-Host' => $param->host,
                    'X-RapidAPI-Key' => $param->access_key,
                ],
            ]);
            
            foreach ($this->observers as $observer)
            {
                $observer->update($this, $response);
            }
        } 
        catch (GuzzleException $e)
        {
            echo "Ошибка при выполнении запроса: " . $e->getMessage();
        }
    }
}

// Строитель парсера
class ParserBuilder
{
    private ParserService $parser;
    
    public function __construct()
    {
        $this->parser = new ParserService();
    }

    public function withObserver(IParserObserverService $observer): self
    {
        $this->parser->addObserver($observer);
        return $this;
    }

    public function build(): ParserService
    {
        return $this->parser;
    }
}