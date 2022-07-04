<template>
  <!-- <NuxtLogo/> -->
  <div>
   <Navbar></Navbar>
  <Tutorial></Tutorial>
  <Footer></Footer>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
export default {
  components: { Navbar },
  name: 'IndexPage'
}
</script>
