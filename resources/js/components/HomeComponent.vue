<script setup>
import QuestionComponent from "./QuestionComponent.vue"
import GuestComponent from "./GuestComponent.vue"
import ButtonComponent from "./ButtonComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"



let quiz = quizStore()


</script>

<template>

    
  
    <guest-component v-if="! quiz.login"></guest-component>

    <question-component v-else></question-component>

   

    

</template>