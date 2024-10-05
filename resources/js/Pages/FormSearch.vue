<template>
  <v-sheet class="mx-auto" style="width:100%">
    <v-form @submit.prevent>
      <v-text-field
        bg-color="grey-lighten-2"
        v-model="search_field"
        :rules="rules"
        label="type Title or Description"
      ></v-text-field>
      <v-btn class="mt-2" color="light-blue" block>Advanced search</v-btn>
    </v-form>
  </v-sheet>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>
    <post></post>

  <v-pagination :length="50"></v-pagination>

</template>

<script>
import Post from "./Post.vue"

export default {
    name: 'FormSearch',
    data:()=>({
        search_field:null
    }),
    components: {
        Post:Post
    }
}
</script>
