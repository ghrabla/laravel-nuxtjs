<template>
    <div>
    <div class="mt-5" id="app">
      <search-profile></search-profile>
			<statistic></statistic>
      <Sidebaradmin></Sidebaradmin>  
      <orderdashboard></orderdashboard>  
    </div>
    </div>
</template>
<script setup>
    export default{
      head:{
        title: "orders dashboard"
       
      }
    }
</script>