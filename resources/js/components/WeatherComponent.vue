<script setup>
import { onMounted, reactive } from "@vue/runtime-core";
import { quizStore } from "../sotres/QuizStore.js"


let quiz = quizStore()

let weather = reactive({})

onMounted(()=>{


axios.get("http://localhost:8000/api/v1/getWeather",{

    headers : {

        Authorization : `Bearer ${quiz.token}`
    }
})
.then(response => {
    
    weather.value = response.data

})
.catch(error => console.log(error))


})


</script>

<template>

    <h1 class="font-bold mt-10">
        Weather Api (https://openweathermap.org/current) :
    </h1>

 
    <div v-if="weather.value">

       <span class="font-semibold mt-2">Cordiates</span>  

       <ul class="mt-2 ml-10 border-b-2 border-gray-500 py-2">
        <li>lat :{{ weather.value.coord.lat }}</li>
        <li>lon :{{ weather.value.coord.lon }}</li>
       </ul>


       <span class="font-semibold mt-2">main</span>  

       <ul class="mt-2 ml-10 border-b-2 border-gray-500 py-2">
        <li>tempeture : {{ weather.value.main.temp }}</li>
        <li>lon : {{ weather.value.main.feels_like }}</li>
        <li>min : {{ weather.value.main.temp_min }}</li>
        <li>max : {{ weather.value.main.temp_max }}</li>
       </ul>

    </div>
    
    
</template>