<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAwnser extends Model
{
    use HasFactory;
        
    protected $guarded = [];

    public function QuizUser()
    {
        return $this->belongsTo(QuizUser::class);
    }
}
