import './bootstrap';
import '../css/app.css'; 

import {createApp} from 'vue/dist/vue.esm-bundler.js'
import {createPinia} from "pinia"
import router from './router';
import AppComponent from "./components/AppComponent.vue"

const app = createApp({

    components : {
        AppComponent
    }
    
}) 

app.use(createPinia())
app.use(router)
app.mount("#app")

