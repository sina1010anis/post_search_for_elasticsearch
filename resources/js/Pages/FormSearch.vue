<template>
    <v-sheet class="mx-auto" style="width:100%">
        <v-form @submit.prevent >
        <v-text-field
            bg-color="grey-lighten-2"
            v-model="search_field"
            label="type Title or Description"
            name="search"
        ></v-text-field>
        <v-btn class="mt-2" color="light-blue" @click="submitForm" block>Advanced search</v-btn>
        </v-form>
    </v-sheet>

    <div v-for="item in data_search">

        <post :title="item._source.title" :created_at="item._source.created_at" :desc="item._source.descrtion" :keyword="item.highlight.keyword"></post>

    </div>



  <v-pagination :length="50"></v-pagination>

</template>

<script>
import Post from "./Post.vue"
import axios from "axios"

export default {
    name: 'FormSearch',
    data:()=>({
        search_field:null,
        data_search: ''
    }),
    components: {
        Post:Post
    },
    methods : {
        submitForm()
        {
            if (this.search_field != '' && this.search_field != null) {

                axios.post("/search/post", {search:this.search_field})
                     .then((res)=>{
                            this.data_search = res.data.hits.hits
                        }).catch(()=>{
                            console.log('error');

                        })

            }
        }
    }
}
</script>
