<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function Questionable()
    {
        return $this->morphTo();
    }
}
