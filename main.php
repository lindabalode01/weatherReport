<?php

use App\Api;

require_once 'vendor/autoload.php';


$city = readline('Enter city name: ');
$countryCode = readline('Enter country code: ');

$api = new \App\Api();
$weatherData = $api->getReport($city, $countryCode);

echo 'Today in '.$city.' current temperature is '.$weatherData->getTemperature().' degrees'.PHP_EOL;
echo 'Maximum temperature today will be '.$weatherData->getMaxTemperature().' degrees'.PHP_EOL;
