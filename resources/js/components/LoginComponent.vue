<script setup>
import { quizStore } from "../sotres/QuizStore.js"
import ButtonComponent from "./ButtonComponent.vue"

let quiz = quizStore()

</script>


<template>
    

    <div >

    <h1 class="text-center text-lg ">
        Login
    </h1>


    <div class="w-4/6 mx-auto mt-4">

    <label class="block mx-2 text-sm font-semibold" for="">
        Email : 
    </label>

    <input type="text" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
    </div>

    <div class="w-4/6 mx-auto mt-4">

    <label class="block mx-2 text-sm font-semibold" for="">
        Password : 
    </label>

    <input type="text" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
    </div>

    <div class="w-4/6 mx-auto mt-6">

    <button-component class="text-sm px-2 block mx-auto font-semibold py-1 w-24">
        login
    </button-component>

    <p class="text-xs mt-5 text-center">
        you havent any accout yet ? 
        
        <button @click="$emit('update:status' , true)" class="font-bold cursor-pointer">click here</button>
    </p>

    </div>

    </div>

</template>