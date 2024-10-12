import { components } from 'vuetify/dist/vuetify-labs.js';
import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler';
import TestPage from "./Pages/TestPage.vue"
import FormSearch from "./Pages/FormSearch.vue"
import vuetify from "./vuetify";
import Post from "./Pages/Post.vue"
import 'bootstrap/dist/css/bootstrap.css'



const app = createApp({
    data :() => ({
        version : "vuejs 3v"
    }),
    components: {
        TestPage:TestPage,
        Post:Post,
        FormSearch:FormSearch
    }
})


app.use(vuetify).mount("#app")
