<template>
  <h1>{{ post.title }}</h1>
</template>

<script>
import axios from 'axios'
export default {
    async asyncData ({ $axios, params }) {
      const  post  = await $axios.$get(`https://api.nuxtjs.dev/posts/${params.id}`)
      return { post }
    }
}
</script>