import { components } from 'vuetify/dist/vuetify-labs.js';
import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';
import TestPage from "./Pages/TestPage.vue"
import vuetify from "./vuetify";


const app = createApp({
    data :() => ({
        version : "vuejs 3v"
    }),
    components: {
        TestPage:TestPage
    }
})


app.use(vuetify).mount("#app")
