<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DiscriptiveQuestion;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\TestContent;
use App\Models\TestQuestion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
       $quiz = Quiz::create([ 

            "name" => "Ambiguous test" , 
            "score" => 10 , 
            "time" => 5 

        ]);



        $testQuestion = TestQuestion::create([
            
            "question" => "can dolphins fly upon sky ?" , 
            "score" => 5 ,
            "awnser" => 4

        ]);


        $testContent = TestContent::create([
            "test_questions_id" =>  $testQuestion->id,
            "first_option" => "they can do it" ,
            "secend_option" => "no its not possible" ,
            "third_option" => "maybe" ,
            "forth_option" => "i think writer is crazy !" 
        ]);
        
        
        $discriptiveQuestion = DiscriptiveQuestion::create([
            
            "question" => "tell me about your self ..." ,
            "score" => 5 
        ]);
        
        $quizQuestionOne = new QuizQuestion(["quiz_id" => $quiz->id ]);
        $quizQuestionTwo = new QuizQuestion(["quiz_id" => $quiz->id ]);



        $testQuestion->QuizQuestion()->save($quizQuestionOne);

        $discriptiveQuestion->QuizQuestion()->save($quizQuestionTwo);
    }
}
