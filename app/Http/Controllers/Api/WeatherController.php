<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    

    public function  getWeather()
    {

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'lat' => '35.7002284',
            'lon' => '51.3408388',
            'appid' => '00776239cc0957b2da6551a97c82b7be'
        ]);


        return $response;
        
    }
}
