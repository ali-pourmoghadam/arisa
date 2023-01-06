<script setup>
import GuestComponentVue from './GuestComponent.vue';

import { quizStore } from "../sotres/QuizStore.js"
import { onMounted } from '@vue/runtime-core';

let quiz = quizStore()


onMounted(()=>{


        axios.get("http://localhost:8000/api/v1/fetchAwnser",{

            headers : {

                Authorization : `Bearer ${quiz.token}`
            }
        })
        .then(response => {
            
            quiz.awnsers = response.data.data;

        })
        .catch(error => console.log(error))


})

</script>


<template>

     <guest-componentVue v-if="quiz.token.length == 0"></guest-componentVue>

 
    <div class="w-3/6 mx-auto" v-else>
    
        <h1 class="text-lg font-semibold">Awnsers : </h1>

            <div v-if="quiz.awnsers">
                <div  v-for="item in quiz.awnsers" class="mt-6 border-b-2 py-2 border-gray-600">

                    <span class="font-semibold">quesiton number :</span>  {{ item.question[0].id }}
                    <br>
                    <span  class="font-semibold">your awnser :</span>    {{ item.awnser }}
                    <br>
                  
                </div>
            </div>

            <p v-else class="text-center text-sm font-semibold mt-4">you haven't register any awnser yet!</p>
    </div>
</template>