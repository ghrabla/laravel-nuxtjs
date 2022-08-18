<template>
    <div>
    <div class="mt-5" id="app">
      
      <Sidebaradmin></Sidebaradmin> 
      <search-profile></search-profile>
			<statistic></statistic>
      <productdashboard></productdashboard> 
      </div>
    </div>
</template>

<script >
    export default{
      head:{
        title: "products dashboard"
      },
       
    provide() {
       return {
         show: false
       }
    }
}
    
</script>
