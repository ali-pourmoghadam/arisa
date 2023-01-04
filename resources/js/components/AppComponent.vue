<script>

let login = false


</script>


<template>

    <div class="flex flex-row gap-4 justify-center items-center py-5 font-bold relative">

            <router-link to="/">Home</router-link>

            <router-link to="/result">result</router-link>

            <img src="/img/login.png" alt="#" class="absolute right-10 w-8 h-8 -mt-2">
    </div>

    
    <div class="w-3/6 mx-auto  mt-10">

        <router-view></router-view>

    </div>
</template>