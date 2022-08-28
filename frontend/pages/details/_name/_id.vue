<template>
    <div >
    <div >
      <navbar></navbar>  
      <Details></Details>  
    </div>
    </div>
</template>

<script >
import Details from '../../../components/details.vue'
import Navbar from '../../../components/Navbar.vue'
    export default{
  components: { Navbar, Details },
      head:{
        title: "product details"
       
      }
    }
</script>