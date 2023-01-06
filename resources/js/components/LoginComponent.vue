<script setup>
import { quizStore } from "../sotres/QuizStore.js"
import ButtonComponent from "./ButtonComponent.vue"
import Swal from 'sweetalert2'

let quiz = quizStore()

let form = {

    email : "" ,
    password : "" 

}


function login(){

    axios.post('http://localhost:8000/api/v1/login', {


    email : form.email ,
    password : form.password 


    })
    .then(function (response) {

        quiz.token = response.data.token

        quiz.authShowDismiss()

        Swal.fire({
            title: 'Success',
            text: 'you Enterd Successfull',
            icon: 'success',
            confirmButtonText: 'ok'
        })

    })
    .catch(function (error) {

        
    Swal.fire({
            title: 'Error!',
            text: error.response.data.message,
            icon: 'error',
            confirmButtonText: 'close'
        })
        
    });

}

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

    <input type="text" class="px-2 border border-gray-300 w-4/5 mt-2 rounded block mx-auto" v-model="form.email">
    </div>

    <div class="w-4/6 mx-auto mt-4">

    <label class="block mx-2 text-sm font-semibold" for="">
        Password : 
    </label>

    <input type="password" class="px-2 border border-gray-300 w-4/5 mt-2 rounded block mx-auto" v-model="form.password">
    </div>

    <div class="w-4/6 mx-auto mt-6">

    <button-component @click="login()" class="text-sm px-2 block mx-auto font-semibold py-1 w-24">
        login
    </button-component>

    <p class="text-xs mt-5 text-center">
        you havent any accout yet ? 
        
        <button @click="$emit('update:status' , true)" class="font-bold cursor-pointer">click here</button>
    </p>

    </div>

    </div>

</template>