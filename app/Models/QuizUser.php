<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizUser extends Model
{
    use HasFactory;

    protected $table = "quiz_user";


    public function UserAwnser()
    {
        return $this->hasMany(UserAwnser::class);
    }
}
