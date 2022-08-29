<template>
    <div class="bg-cover bg-no-repeat bg-fixed h-screen	" id="home-back" >
        <div class="py-24 px-20 ">
        <h1 class=" text-5xl font-bold">FCES MAROC POUR <br >VOTRE PROJET</h1>
        <p class=" py-10">Notre société se propose de vous offrir ses services, et désire<br>entretenir avec vous des relations commerciales, rentrant dans<br> les domaines de ses activité.</p>
        <div class="lg:py-24 lg:ml-10 flex gap-1">
        <nuxt-link to="/about">
        <button class="bg-blue-700 text-white font-semibold hover:text-white py-2 px-4 border border-transparent rounded">
          Learn More
        </button>
        </nuxt-link>
        <nuxt-link to="/contact">
        <button class="ml-0 md:ml-10 bg-transparent hover:bg-transparent hover:border-transparent text-white font-semibold hover:text-white  hover:bg-blue-700 py-2 px-4 border  border-blue-500 rounded">
          Get In Touch <i class="fa-solid fa-arrow-right"></i>
        </button>
        </nuxt-link>
        </div>
        </div>
    </div>
</template>
<script>
    export default{
      data(){
        return{
          // chelog : Cookies.get("loginnum")
        }
      }
    }
</script>


<style scoped>
    #home-back{
        background-image: url('../assets/staticimg/modern-office-space-interior.jpg');
    
    }
    
</style>