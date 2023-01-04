import { createRouter , createWebHistory } from "vue-router";

import HomeComponent from "./components/HomeComponent.vue"
import ResultComponent from "./components/ResultComponent.vue"
import NotFoundComponent from "./components/NotFoundComponent.vue"

const routes = [

    {

        path : '/:catchAll(.*)' , 
        component : NotFoundComponent
    },
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