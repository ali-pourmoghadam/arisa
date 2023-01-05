<script setup>

defineProps({
    question : String ,
    checks : Object
})
</script>


<template>
    
    <p class="font-semibold">  
                <span>1</span>-{{question}}
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