<script setup>
import AuthComponent from "./AuthComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"



let quiz = quizStore()

</script>


<template>

    <div class="flex flex-row gap-4 justify-center items-center py-5 relative">

            <router-link to="/" active-class="font-bold">Home</router-link>

            <router-link to="/result"  active-class="font-bold">result</router-link>

            <img src="/img/login.png" alt="#" class="absolute right-10 w-8 h-8 -mt-2">
    </div>

 
    
    <div class="w-3/6 mx-auto  mt-10">

        <router-view></router-view>

    </div>

     <auth-component v-if="quiz.authShow"></auth-component>


</template>