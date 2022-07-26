<template>
  <div>
    <p v-if="$fetchState.pending">Loading....</p>
    <p v-else-if="$fetchState.error">Error while fetching mountains</p>
    <ul v-else>
      <div>{{mountains}}</div>
      <li v-for="(mountain, index) in mountains" :key="index">
        {{ mountain.title }}
      </li>
      <button @click="refresh">Refresh</button>
    </ul>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        mountains: []
      }
    },
    async fetch() {
      this.mountains = await fetch(
        'https://api.nuxtjs.dev/mountains'
      ).then(res => res.json())
    },
     methods: {
      refresh() {
        this.$nuxt.refresh()
      }
    }
  }
</script>
<style scoped>
 
</style>