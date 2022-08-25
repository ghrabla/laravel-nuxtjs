<template>
    <div class="">
        <div class="flex justify-around lg:flex-row flex-col">
            <div class="flex mt-10 px-7 py-5 rounded lg:mx-0 mx-10 " id="box-sta">
                <div class="text-purple-900">
                  <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                </div>
                <div class="ml-4">
                  <span class="font-bold ">Total users</span> 
                  <p class="font-bold text-xl">{{users.length}}</p>
                </div>
            </div>
            <div class="flex mt-10 px-7 py-5 rounded lg:mx-0 mx-10 " id="box-sta">
                <div class="text-green-800">
                  <i class="fa-regular fa-message fa-3x"></i>
                </div>
                <div class="ml-4">
                  <span class="font-bold ">Total message</span> 
                  <p class="font-bold text-xl">{{messages.length}}</p>
                </div>
            </div>
            <div class="flex mt-10 px-7 py-5 rounded lg:mx-0 mx-10 " id="box-sta">
                <div class="text-blue-800">
                  <i class="fa fa-product-hunt fa-3x" aria-hidden="true"></i>
                </div>
                <div class="ml-4">
                  <span class="font-bold ">Total product</span> 
                  <p class="font-bold text-xl">{{products.length}}</p>
                </div>
            </div>
            <div class="flex mt-10 px-7 py-5 rounded lg:mx-0 mx-10 " id="box-sta">
                <div class="text-red-800">
                    <i class="fa fa-first-order fa-3x" aria-hidden="true"></i>
                </div>
                <div class="ml-4">
                  <span class="font-bold ">Total orders</span> 
                  <p class="font-bold text-xl">{{orders.length}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
  // inject:['products'], 
  data(){
    return{
      products: [],
      orders : [],
      users : [],
      messages : [],
    }
    },
    methods : {
    async fetchproducts() {
    const response = await this.$axios.$get('api/products')
    this.products = response
    console.log(this.products)
  },
    async fetchorders() {
    const response = await this.$axios.$get('api/orders')
    this.orders = response
    console.log(this.orders)
  },
    async fetchusers() {
    const response = await this.$axios.$get('api/users')
    this.users = response
    console.log(this.users)
  },
    async fetchmessages() {
    const response = await this.$axios.$get('api/contacts')
    this.messages = response
    console.log(this.messages)
  }
  },
  created(){
     this.fetchproducts();
     this.fetchorders();
     this.fetchusers();
     this.fetchmessages();
   },
   
    
  }
</script>


<style scoped>
   #box-sta{
       box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
   }
</style>