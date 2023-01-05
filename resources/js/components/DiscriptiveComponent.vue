<script setup>

defineProps({
    question : String ,
    score : Number
})
</script>

<template>

    <p class="font-semibold mt-5 relative">  
                <span>-</span>{{question}}
                <span class="absolute text-gray-600 right-10 text-xs mt-1">score : {{score}}</span>
    </p>

    <textarea name="" rows="4"  placeholder="Write your thoughts here..." 
    
     class="w-full px-2 mt-5 border border-gray-500 rounded-md text-sm resize-none font-semibold">

    </textarea>
    
</template>