<?php

namespace App\Services;

use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;


class QuizService {

    public function readAll()
    {
        return Quiz::all();
    }


}