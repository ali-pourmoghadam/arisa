<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    public function TestContent()
    {
        return $this->hasOne(TestContent::class);
    }

    public function QuizQuestion()
    {
        return $this->morphMany(QuizQuestion::class , "questionable");
    }
}
