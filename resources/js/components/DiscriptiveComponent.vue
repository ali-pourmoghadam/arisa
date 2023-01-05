<script setup>

defineProps({
    question : String 
})
</script>

<template>

    <p class="font-semibold mt-5">  
                <span>1</span>-{{question}}
    </p>

    <textarea name="" rows="4"  placeholder="Write your thoughts here..." 
    
     class="w-full px-2 mt-5 border border-gray-500 rounded-md text-sm resize-none font-semibold">

    </textarea>
    
</template>