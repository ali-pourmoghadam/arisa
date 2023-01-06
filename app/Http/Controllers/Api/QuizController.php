<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AwnserRequest;
use App\Models\Quiz;
use App\Models\UserAwnser;
use App\Services\QuizService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function putAwnser(AwnserRequest $request)
    {
        $user = Auth::user();
        
        $quiz = Quiz::find($request->input("quiz_id"));

        $exists = $this->service->quizCheck($user , $quiz);

        if($exists !== true) return $exists;

        $user->Quiz()->attach($quiz);

        $this->service->quizSubmit($user , $request["test_info"]);

        $this->service->quizSubmit($user , $request["descreptive"]);

        return response()->json(["data" => "your exam submitted successfully"]);
    }


}
