<script setup>
import ButtonComponent from "./ButtonComponent.vue"
import TestComponent from "./TestComponent.vue"

</script>

<template>
    <!-- <div class="text-center">

            <h1 class="font-bold">
                for test you have to register first !
            </h1>
            <button-component class="w-32 h-7  text-sm font-bold mt-10">
                click here
            </button-component>
    </div> -->

    <div class="w-full px-4">

        <h1 class="text-lg font-semibold">
            Questions :
        </h1>

        <div class="flex flex-col gap-2 mt-7 ml-4">

    
            <test-component class="mt-7"></test-component>
            

        </div>

    </div>

</template>