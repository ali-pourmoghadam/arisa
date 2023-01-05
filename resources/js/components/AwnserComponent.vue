<script setup>
import GuestComponentVue from './GuestComponent.vue';

import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()

</script>


<template>

     <guest-componentVue v-if="quiz.token.length == 0"></guest-componentVue>

 
    <div class="w-3/6 mx-auto" v-else>
    
        <h1 class="text-lg font-semibold">Awnsers : </h1>

            <p class="text-center text-sm font-semibold mt-4">you haven't register any awnser yet!</p>
    </div>
</template>