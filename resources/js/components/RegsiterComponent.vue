<script setup>
import { reactive, ref } from "@vue/reactivity"
import ButtonComponent from "./ButtonComponent.vue"
import { quizStore } from "../sotres/QuizStore.js"
import router  from "../router.js"
import Swal from 'sweetalert2'

let quiz = quizStore()


defineProps({
    initStatus : Boolean,
    action : Boolean
})


let form = reactive({

        name : "" ,
        email : "" , 
        password : ""

})


function regsiter(){

        axios.post('http://localhost:8000/api/v1/register', {

        name : form.name ,
        email : form.email ,
        password : form.password 


        })
        .then(function (response) {

            quiz.token = response.data.token

            quiz.authShowDismiss()

            Swal.fire({
                title: 'Success',
                text: 'User Created Successfully',
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
    
    
        <div>

        <h1 class="text-center text-lg ">
            Registeration
        </h1>


        <div class="w-4/6 mx-auto mt-4">

            <label class="block mx-2 text-sm font-semibold" for="">
                Name : 
            </label>

            <input type="text" v-model="form.name" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">

           
        </div>

        <div class="w-4/6 mx-auto mt-4">

            <label class="block mx-2 text-sm font-semibold" for="">
                email : 
            </label>

            <input type="email" v-model="form.email" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
            
        </div>

        <div class="w-4/6 mx-auto mt-4">

            <label class="block mx-2 text-sm font-semibold" for="">
                password : 
            </label>

            <input type="password" v-model="form.password" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
           
        </div>

        <div class="w-4/6 mx-auto mt-3">

            <button-component @click="regsiter()" class="text-sm px-2 block mx-auto font-semibold py-1 w-24">
                register
            </button-component>

            <p class="text-xs mt-5 text-center">
                Do you have account ? 
                
                <button @click="$emit('update:status' , false)" class="font-bold cursor-pointer">click here</button>
            </p>

        </div>
        </div>

</template>