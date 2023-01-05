<script setup>
import ButtonComponent from "./ButtonComponent.vue"

defineProps({
    initStatus : Boolean,
    action : Boolean
})


let form = {

    name : "" ,
    email : "" , 
    password : ""

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

            <input type="text" v-model="name" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
        </div>

        <div class="w-4/6 mx-auto mt-4">

            <label class="block mx-2 text-sm font-semibold" for="">
                email : 
            </label>

            <input type="text" v-model="email" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
        </div>

        <div class="w-4/6 mx-auto mt-4">

            <label class="block mx-2 text-sm font-semibold" for="">
                password : 
            </label>

            <input type="text" v-model="password" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
        </div>

        <div class="w-4/6 mx-auto mt-6">

            <button-component class="text-sm px-2 block mx-auto font-semibold py-1 w-24">
                register
            </button-component>

            <p class="text-xs mt-5 text-center">
                Do you have account ? 
                
                <button @click="$emit('update:status' , false)" class="font-bold cursor-pointer">click here</button>
            </p>

        </div>
        </div>

</template>