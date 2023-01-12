<script setup>
import { ref } from "@vue/reactivity"


defineProps({
    question : String ,
    checks : Object,
    score : Number
})
</script>


<template>
    
    <p class="font-semibold relative">  
                <span>-</span>{{question}}
                <span class="absolute text-gray-600 right-10 text-xs mt-1">score : {{score}}</span>
    </p>


    <div class="flex flex-row justify-center  items-center gap-10 mt-5">

        <div>
            <input name="test" type="radio" @click="$emit('check' , 1)">
            <span class="mx-2">
               {{checks.first_option}}
            </span>
        </div>

        <div>
            <input name="test" type="radio"  @click="$emit('check' , 2)">
            <span class="mx-2">
                {{checks.secend_option}}
            </span>
        </div>

        <div>
            <input name="test" type="radio"  @click="$emit('check' , 3)">
            <span class="mx-2">
                {{checks.third_option}}
            </span>
        </div>

        <div>
            <input name="test" type="radio"   @click="$emit('check' , 4)">
            <span class="mx-2">
                {{checks.forth_option}}
            </span>
        </div>

     

    </div>
</template>