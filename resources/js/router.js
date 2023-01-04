import { createRouter , createWebHistory } from "vue-router";

import HomeComponent from "./components/HomeComponent.vue"
import ResultComponent from "./components/ResultComponent.vue"

const routes = [

    {
        path : "/" , 
        name : "Home" , 
        component : HomeComponent
    } ,

    {
        path : "/result" , 
        name : "Result" , 
        component : ResultComponent
    }
]



const router = createRouter({

    history : createWebHistory(import.meta.env.BASE_URL) , 
    routes
})


export default router