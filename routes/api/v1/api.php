<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(["middleware" => 'auth:sanctum'] , function(){

    Route::group(["controller" => QuizController::class],function(){

        Route::get("fetchQuiz" , "fetchQuiz");

        Route::post("putAwnser" , "putAwnser");

        Route::get("fetchAwnser" , "fetchAwnser");
        
    });

    Route::group(["controller" => WeatherController::class],function(){

        Route::get("getWeather" , "getWeather");
        
    });
    


});


Route::group(["controller" => AuthController::class],function(){

    Route::post("register" , "register");
    
    Route::post("login" , "login");

});


