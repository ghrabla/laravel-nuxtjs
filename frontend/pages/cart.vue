<template>
  <div>
      <navbar></navbar>
      <panier></panier>
      <Footer></Footer>
  </div>
</template>

<script>
import Footer from '../components/Footer.vue'
import Panier from '../components/panier.vue'
export default {
  components: { Footer, Panier },

}
</script>

<style>

</style>