import './bootstrap';
import '../css/app.css'; 

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import router from './router';
import AppComponent from "./components/AppComponent.vue"

createApp({

    components : {
        AppComponent
    }
    
}).use(router).mount("#app")

