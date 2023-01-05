<?php

namespace App\Services;

use App\Http\Resources\QuizResource;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;


class QuizService {

    public function readAll()
    {
        return QuizResource::collection(Quiz::all());
    }


}