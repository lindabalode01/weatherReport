<?php

namespace App;

class WeatherReport
{
    private float $temperature;
    private float$maxTemperature ;
public function __construct(
    float $temperature,
    float $maxTemperature
){
    $this->temperature = $temperature;
    $this->maxTemperature = $maxTemperature;
}
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    public function getMaxTemperature(): float
    {
    return $this->maxTemperature;
    }
}