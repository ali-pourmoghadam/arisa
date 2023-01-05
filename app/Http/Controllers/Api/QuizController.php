<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\QuizService;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function __construct (QuizService $service)
    {
        $this->service = $service;
    }
    
    public function fetchQuiz()
    {
       return $this->service->readAll();
    }
}
