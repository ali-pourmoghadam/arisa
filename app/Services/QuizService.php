<?php

namespace App\Services;

use App\Http\Resources\QuizResource;
use App\Models\Quiz;
use App\Models\User;
use App\Models\UserAwnser;
use Illuminate\Support\Facades\Auth;


class QuizService {

    public function readAll()
    {
        return QuizResource::collection(Quiz::all());
    }

    public function quizCheck(User $user ,Quiz $quiz)
    {

        $exists = $user->Quiz()->where("quiz_id" , $quiz->id)->exists();

        if($exists) return response()->json(["data" => "you cant have more than one exam !"], 401);
        
        return true;
    }


    public function quizSubmit(User $user ,$request)
    {

       $takenQuizId = $user->Quiz[0]->pivot->id;

        UserAwnser::create([

            "quiz_id" =>    $takenQuizId ,

            "question_id" => $request["id"] ,

            "awnser" =>      $request["awnser"]

        ]);
    }

}