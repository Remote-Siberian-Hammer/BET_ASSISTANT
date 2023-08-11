<?php
namespace App\Domain\Service;

use App\Domain\IService\ILeagueListService;

class LeagueListService implements ILeagueListService
{
    public function GetList()
    {
        $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://sportscore1.p.rapidapi.com/leagues?page=1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: sportscore1.p.rapidapi.com",
		"X-RapidAPI-Key: 09cb6a80d4msh76cb256f3bacb5ap1e2e0djsnf1118a0321c7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
    }
}