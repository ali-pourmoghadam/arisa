<script setup>
import  {ref}  from "vue"
import ButtonComponent from "./ButtonComponent.vue"


let register = ref(true)

</script>

<template>

    <div class="w-full h-full bg-gray-400 absolute top-0 left-0">

        <div class="w-2/6 h-96 bg-white rounded-lg mx-auto mt-32 p-4">
            
            

                <div v-if="register">

                    <h1 class="text-center text-lg ">
                        Registeration
                    </h1>


                    <div class="w-4/6 mx-auto mt-4">

                        <label class="block mx-2 text-sm font-semibold" for="">
                            Name : 
                        </label>

                        <input type="text" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
                    </div>

                    <div class="w-4/6 mx-auto mt-4">

                        <label class="block mx-2 text-sm font-semibold" for="">
                            email : 
                        </label>

                        <input type="text" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
                    </div>

                    <div class="w-4/6 mx-auto mt-4">

                        <label class="block mx-2 text-sm font-semibold" for="">
                            password : 
                        </label>

                        <input type="text" class="border border-gray-300 w-4/5 mt-2 rounded block mx-auto">
                    </div>

                    <div class="w-4/6 mx-auto mt-6">

                        <button-component class="text-sm px-2 block mx-auto font-semibold py-1 w-24">
                            register
                        </button-component>

                        <p class="text-xs mt-5 text-center">
                            Do you have account ? 
                            
                            <button @click="register = false" class="font-bold cursor-pointer">click here</button>
                        </p>
                    
                    </div>
                </div>



                <div v-else>

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
                        
                        <button @click="register = true" class="font-bold cursor-pointer">click here</button>
                    </p>

                    </div>

                </div>



        </div>


    </div>

</template>