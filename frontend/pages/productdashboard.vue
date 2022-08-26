<template>
    <div>
    <div class="mt-5" id="app">
      
      <Sidebaradmin></Sidebaradmin> 
       <search-profile></search-profile>
      
      <productdashboard></productdashboard> 
      </div>
    </div>
</template>

<script >
    export default{
      middleware: 'auth',
      head:{
        title: "products dashboard"
      },
       
    provide() {
       return {
         show: false,
        //  products : this.products
       }
    }
}
    
</script>
