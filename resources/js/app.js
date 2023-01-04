import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import router from './router';
import AppComponent from "./components/AppComponent.vue"

createApp({

    components : {
        AppComponent
    }
    
}).use(router).mount("#app")

