<?php

namespace App\Services;

use App\Http\Resources\AwnserResource;
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


    public function quizSubmit($request)
    {


       $takenQuizId = $this->quizFetch();

        UserAwnser::create([

            "quiz_id" =>    $takenQuizId ,

            "question_id" => $request["id"] ,

            "awnser" =>      $request["awnser"]

        ]);
    }

    public function quizAwnsers()
    {
        
        if($this->quizFetch() == false) return [ "data" => ""];

        $takenQuizId = $this->quizFetch();

        $awnsers = UserAwnser::where("quiz_id" ,   $takenQuizId )->get();

        return AwnserResource::collection($awnsers);

    }



    public function quizFetch()
    {
        
        $user = Auth::user();

        return $user->Quiz[0]->pivot->id ?? false;
    }

  

}