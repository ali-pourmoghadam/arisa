<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestContent extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function TestQuestion()
    {
        return $this->belongsTo(TestQuestion::class);
    }
}
