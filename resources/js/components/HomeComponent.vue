<script setup>
import QuestionComponent from "./QuestionComponent.vue"
import GuestComponent from "./GuestComponent.vue"
import ButtonComponent from "./ButtonComponent.vue"
import WeatherComponent from "./WeatherComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"


let quiz = quizStore()

</script>

<template>

    
  
    <guest-component v-if="quiz.token.length == 0"></guest-component>

    <div v-else>
    
    <question-component></question-component>
    
    <weather-component></weather-component>

     
    
    </div>

   

    

</template>