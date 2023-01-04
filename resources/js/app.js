import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'

import AppComponent from "./components/AppComponent.vue"

createApp({

    components : {
        AppComponent
    }
    
}).mount("#app")

