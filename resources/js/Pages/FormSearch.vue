<template>
    <v-sheet class="mx-auto" style="width:100%">
        <v-form @submit.prevent >
        <v-text-field
            bg-color="grey-lighten-2"
            v-model="search_field"
            label="type Title or Description"
            name="search"
            @keyup="viewMathDesc"
        ></v-text-field>
        <v-btn class="mt-2" color="light-blue" @click="submitForm" block>Advanced search</v-btn>
        </v-form>
    </v-sheet>



    <div v-if="data_search != null">
        <p>Total Post = {{data_search.hits.total.value}}</p>
        <p>Total View post search = {{data_search.aggregations.sum_views.value}}</p>
        <div v-for="item in data_search.hits.hits">

            <post :title="item._source.title" :created_at="item._source.created_at" :desc="item._source.descrtion" :keyword="item.highlight.keyword"></post>

        </div>
    </div>


    <div class="view-title-search p-2 shadow">
        <p>Keywords</p>
        <div v-for="i in data_real_time_search" class="border p-2 mt-2 text-center">
            <p>
                {{i._source.title}}
            </p>
        </div>
    </div>


  <v-pagination :length="50"></v-pagination>

</template>

<script>
import Post from "./Post.vue"
import axios from "axios"
import $ from "jquery"

export default {
    name: 'FormSearch',
    data:()=>({
        search_field:null,
        data_search: null,
        data_real_time_search:null,
        totle_posts: 0
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
                        // return console.log(res.data);

                            this.data_search = res.data
                        }).catch(()=>{
                            console.log('error');

                        })

            }

            $(".view-title-search").slideUp()

        },

        viewMathDesc()
        {

            $(".view-title-search").slideDown()


            if (this.search_field != '' || this.search_field != null) {

                axios.post("/search/title/post", {search:this.search_field}).then((res) => {
                    this.data_real_time_search = res.data.hits.hits;
                    console.log(res.data.hits.hits);

                    // $(".view-title-search").slideDown()
                }).catch(()=>{
                    console.log('error');
                })


            }

        }

    }
}
</script>
