<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestContent extends Model
{
    use HasFactory;

    public function TestQuestion()
    {
        return $this->hasOne(TestQuestion::class);
    }
}
