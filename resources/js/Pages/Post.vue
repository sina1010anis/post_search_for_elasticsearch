<template>
  <v-card
    class="mx-auto my-8 p-2"
    elevation="16"
    max-width="344"
  >
    <v-card-item>
      <v-card-title>
        {{title}}
      </v-card-title>

      <v-card-subtitle>
        {{created_at}}
      </v-card-subtitle>
    </v-card-item>

    <v-card-text>
      {{desc}}
    </v-card-text>
    <div>
        <span style="padding:10px" v-for="item in keyword"> {{item}} </span>

    </div>
  </v-card>
</template>

<script>
export default {
    name: 'Post',
    data:()=>({
        firstName:null
    }),
    props:{
        title: String,
        created_at:String,
        desc:String,
        keyword:Object

    },
}
</script>
