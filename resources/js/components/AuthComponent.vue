<script setup>
import  {ref}  from "vue"
import RegsiterComponent from "./RegsiterComponent.vue";
import LoginComponent from "./LoginComponent.vue";
import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()
let register = ref(true)

</script>

<template>

    <div class="w-full h-full bg-gray-400 absolute top-0 left-0">

        <div class="w-2/6 h-96 bg-white rounded-lg mx-auto mt-32 p-4 relative">

                <button @click="quiz.authShowDismiss()" class="absolute right-10">&times</button>
            

                <regsiter-component
                
                 v-if="register"
                 v-model:status="register"
                 

                 ></regsiter-component>

                <login-component 

                 v-else
                 v-model:status="register"

                ></login-component>



        </div>


    </div>

</template>