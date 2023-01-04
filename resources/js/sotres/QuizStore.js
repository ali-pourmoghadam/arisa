import { defineStore } from "pinia";



export let quizStore = defineStore("quiz" , {

    state(){

        return{
            
            login : false , 
            authShow : false

        }
    },


    actions : {
        
        authShowPopup(){

            this.authShow = true
        } , 
        
        authShowDismiss(){

            this.authShow = false
        }


    } , 

    getters : {

    }

})