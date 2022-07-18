<template>
  <!-- <NuxtLogo/> -->
  <div>
   <Navbar></Navbar>
  <home></home>
  <Header></Header>
  <Gallery></Gallery>
  <emailsub></emailsub>
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
