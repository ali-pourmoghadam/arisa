<script setup>
import TestComponent from "./TestComponent.vue"
import DiscriptiveComponent from "./DiscriptiveComponent.vue"
import ButtonComponent from "./ButtonComponent.vue"

</script>

<template>

    <div class="w-full px-4">

    <h1 class="text-lg font-semibold">
        Questions :
    </h1>

    <div class="flex flex-col gap-2 mt-7 ml-4">


        <test-component></test-component>

        <discriptive-component ></discriptive-component>

        <button-component class="w-32 h-7 text-sm font-bold mt-5 mx-auto">
            send
        </button-component>
        

    </div>

    </div>
    
</template>