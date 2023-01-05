<script setup>
import TestComponent from "./TestComponent.vue"
import DiscriptiveComponent from "./DiscriptiveComponent.vue"
import ButtonComponent from "./ButtonComponent.vue"
import { onMounted, reactive } from "@vue/runtime-core"
import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()

onMounted(()=>{

    axios.get("http://localhost:8000/api/v1/fetchQuiz",{

        headers : {

            Authorization : `Bearer ${quiz.token}`
        }
    })
    .then(response => {
        
        quiz.data = response.data.data[0]

        console.log( response.data.data[0])


    })
    .catch(error => console.log(error))



})

</script>

<template>

    <div class="w-full px-4">

     <h1 class="text-lg font-semibold">
        Quiz Data :
     </h1>    

     <div class="flex flex-row gap-8 justify-center items-center">
        <div>
            <span class="font-bold">Name</span> : {{ quiz.data.name }}
        </div>

        <div>
           <span class="font-bold">score</span> : {{ quiz.data.score }}
        </div>
     </div>

    <h1 class="text-lg font-semibold">
        Questions :
    </h1>

    <div class="flex flex-col gap-2 mt-7 ml-4">

        <div v-for="item in quiz.data.questions">
   
      
         <test-component

          :question="item.questions"
          :checks="item.option" 
          v-if="item.type == 'test'"

          >
         </test-component>



         <discriptive-component 
         :question="item.questions"
         v-if="item.type == 'descriptive'"

         ></discriptive-component> 
            
        </div>

     

        <button-component class="w-32 h-7 text-sm font-bold mt-5 mx-auto">
            send
        </button-component>
        

    </div>

    </div>
    
</template>