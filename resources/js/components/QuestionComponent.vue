<script setup>
import TestComponent from "./TestComponent.vue"
import DiscriptiveComponent from "./DiscriptiveComponent.vue"
import ButtonComponent from "./ButtonComponent.vue"
import Swal from 'sweetalert2'
import { onMounted, reactive, ref } from "@vue/runtime-core"
import { quizStore } from "../sotres/QuizStore.js"

let quiz = quizStore()

let testQuestion= ref("0")
let descriptiveQuestion= ref("")




onMounted(()=>{

    axios.get("http://localhost:8000/api/v1/fetchQuiz",{

        headers : {

            Authorization : `Bearer ${quiz.token}`
        }
    })
    .then(response => {
        
        quiz.data = response.data.data[0]

        console.log(response.data.data[0]);

    })
    .catch(error => console.log(error))



})




function sendAwnsers(){

    axios.post("http://localhost:8000/api/v1/putAwnser",{
        
    quiz_id : quiz.data.id ,

    test_info : {

        awnser : testQuestion.value ,

        id : quiz.data.questions[0].id

    }, 

    descreptive  :{

        awnser : descriptiveQuestion .value ,

        id :  quiz.data.questions[1].id

    }
    } ,{

     headers : {

      Authorization : `Bearer ${quiz.token}`

     }
    })
    .then(response => {

        Swal.fire({
            title: 'Success',
            text: response.data.data,
            icon: 'success',
            confirmButtonText: 'ok'
        })


    })
    .catch(error =>
    

        Swal.fire({
                title: 'Error',
                text: error.response.data.data,
                icon: 'error',
                confirmButtonText: 'close'
            })
    
    )

}

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
          :score="item.score"
          v-if="item.type == 'test'"
          @check="(val)=> testQuestion= val"

          >
         </test-component>



         <discriptive-component 

         :question="item.questions"
         :score="item.score"
         v-if="item.type == 'descriptive'"
         v-model:textArea="descriptiveQuestion"
    
         ></discriptive-component> 
            
        </div>

     

        <button-component @click="sendAwnsers()" class="w-32 h-7 text-sm font-bold mt-5 mx-auto">
            send
        </button-component>
        

    </div>

    </div>
    
</template>