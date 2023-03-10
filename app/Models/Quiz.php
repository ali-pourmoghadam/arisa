<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $gaurded = [];

    protected $with = ["QuizQuestion"];

    public function User()
    {
        return $this->belongsToMany(User::class);
    }


    public function QuizQuestion()
    {
        return $this->hasMany(QuizQuestion::class);
    }

 
}
