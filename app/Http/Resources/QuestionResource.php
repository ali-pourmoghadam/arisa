<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $question = $this->Questionable;

        $option =  $question->TestContent ?? null;

      
        
        return [
            "id" => $this->id ,
            "questions" =>  $question->question,
            "score" =>  $question->score ,
            "option" => $option ,
            "type" => ($option == null) ? "descriptive" : "test"
        ];
    }
}
