<template>
  <!-- <NuxtLogo/> -->
  <div>
   <Navbar></Navbar>
  <home></home>
  <Header></Header>
  <Footer></Footer>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
export default {
  components: { Navbar},
  name: 'IndexPage'
}
</script>
