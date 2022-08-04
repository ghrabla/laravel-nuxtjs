<template>
  <div>
    <p v-if="$fetchState.pending">Fetching products...</p>
    <p v-else-if="$fetchState.error">An error occurred </p>
    <div v-else>
      <h1>Nuxt products</h1>
      <ul>
        <li v-for="product of products" :key="product.id">{{ product.name }}</li>
      </ul>
      <button @click="$fetch">Refresh</button>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        products: ['kamal']
      }
    },
    async fetch() {
      this.products = await fetch(
        'http://localhost:8000/api/products'
      ).then(res => res.json())
      // console.log(this.product)
    },
    mounted(){
      console.log(this.products);
    }
  }
</script>