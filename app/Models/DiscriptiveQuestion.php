<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscriptiveQuestion extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function QuizQuestion()
    {
        return $this->morphMany(QuizQuestion::class , "questionable");
    }

}
