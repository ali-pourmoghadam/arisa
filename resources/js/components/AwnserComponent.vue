<script setup>
import GuestComponentVue from './GuestComponent.vue';

import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()

</script>


<template>

     <guest-componentVue v-if="! quiz.login"></guest-componentVue>

 
    <div class="w-3/6 mx-auto" v-else>
        <h1 class="text-lg font-semibold">Awnsers : </h1>
    </div>
</template>