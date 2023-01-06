<script setup>
import AuthComponent from "./AuthComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"



let quiz = quizStore()

function logout(){

    quiz.token = ''
    quiz.data = {}
    quiz.awnsers = {}
}

</script>


<template>

    <div class="flex flex-row gap-4 justify-center items-center py-5 relative">

            <router-link to="/" active-class="font-bold">Home</router-link>

            <router-link to="/result"  active-class="font-bold">submited</router-link>


            <img 
            
            v-if="quiz.token.length > 0" 
            
            src="/img/login.png" alt="#" 
            
            @click="logout() "

            class="absolute right-10 w-8 h-8 -mt-2 cursor-pointer">
    </div>

 
    
    <div class="w-3/6 mx-auto  mt-10">

        <router-view></router-view>

    </div>

     <auth-component v-if="quiz.authShow"></auth-component>


</template>