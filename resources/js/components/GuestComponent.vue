<script setup>
import ButtonComponent from "./ButtonComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()


</script>

<template>
    <div class="text-center">

            <h1 class="font-bold">
                for test you have to register first !
            </h1>

            <button-component class="w-32 h-7  text-sm font-bold mt-10" @click="quiz.authShowPopup()">
                click here
            </button-component>
    </div>
</template>