<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ["TestContent"];
    
    public function TestContent()
    {
        return $this->hasOne(TestContent::class , "test_questions_id");
    }

    public function QuizQuestion()
    {
        return $this->morphMany(QuizQuestion::class , "questionable" , );
    }
}
