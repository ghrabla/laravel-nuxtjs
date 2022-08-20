<template>
    <div >
    <div class="mt-5" id="app">
      <search-profile></search-profile>
			<statistic></statistic>
      <Sidebaradmin></Sidebaradmin>  
      <message></message>  
    </div>
    </div>
</template>

<script>
    export default{
      middleware: 'auth',
      head:{
        title: "messages dashboard"
       
      }
    }
</script>