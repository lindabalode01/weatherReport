<?php

namespace App;
use App\WeatherReport;
use GuzzleHttp\Client;

class Api
{
    private Client $client;
public function __construct()
{
    $this->client = new Client();
}
public function getReport(string $city, string $country): WeatherReport
{
     $key = "864754d9412a35de85e9c2f29f18b702";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city,$country&appid=$key&units=metric";
    $response = $this->client->request('GET', $url);
    $weather = json_decode($response->getBody()->getContents());
    var_dump($weather);
return new WeatherReport(
    $weather->main->temp,
    $weather->main->temp_max,
);
}
}