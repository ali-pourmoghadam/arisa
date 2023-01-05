import { defineStore } from "pinia";



export let quizStore = defineStore("quiz" , {

    state(){

        return{
            
            loginPage : false , 
            authShow : false ,
            token : "" ,
            data : {}

        }
    },


    actions : {
        
        authShowPopup(){

            this.authShow = true
        } , 
        
        authShowDismiss(){

            this.authShow = false
        } 

    } 

})