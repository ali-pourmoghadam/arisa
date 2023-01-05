<script setup>

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
            <input type="checkbox">
            <span class="mx-2">
               {{checks.first_option}}
            </span>
        </div>

        <div>
            <input type="checkbox">
            <span class="mx-2">
                {{checks.secend_option}}
            </span>
        </div>

        <div>
            <input type="checkbox">
            <span class="mx-2">
                {{checks.third_option}}
            </span>
        </div>

        <div>
            <input type="checkbox">
            <span class="mx-2">
                {{checks.forth_option}}
            </span>
        </div>

     

    </div>
</template>