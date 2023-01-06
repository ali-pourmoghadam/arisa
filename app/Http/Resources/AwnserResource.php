<?php

namespace App\Http\Resources;

use App\Models\QuizQuestion;
use Illuminate\Http\Resources\Json\JsonResource;

class AwnserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
        $questions = QuizQuestion::where( "id", $this->question_id)->get();

        return [

            "question" => QuestionResource::collection($questions) ,

            "awnser" => $this->awnser ,

            "attachment" => $this->attachment

        ];
    }
}
