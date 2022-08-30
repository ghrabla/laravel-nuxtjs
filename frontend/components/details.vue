<template>

    <div class="antialiased">
  
<form  class="w-full max-w-lg absolute bg-gray-500 rounded  p-10 mx-auto ml:0 lg:ml-80 shadow-md z-50	absolute" v-if="showform">
   <a href="#" @click="showform=!showform" class="text-white font-bold flex justify-end text-xl mb-5"><i class="fa-solid fa-xmark"></i></a>
  <!-- <div class="text-center text-white font-bold mb-4">Update Product</div> -->
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
         Nome et prénom
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.fullname">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
         adresse
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.adresse">
    </div>
  </div>
   <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        city
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.city">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        postale code
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.postale">
    </div>
  </div>
   <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        téléphone
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.phone">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        Email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.email">
    </div>
    <!-- <div class="w-full md:w-1/2 px-3 hidden">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        product id
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.product_id">
    </div> -->
  </div>
  
  <div class="p-2 w-full">
    <a class="flex mx-auto text-white bg-blue-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer" @click="sendorder()">Envoyer</a>
  </div>
</form>

<!-- <div>{{this.$route.params.id}}</div> -->
<div class="bg-indigo-700 text-indigo-200 md:text-center py-2 px-4">
  la livraison il ya possible pour ce  <a href="https://dribbble.com/shots/14127375-Product-Page" class="font-bold underline hover:text-indigo-100">produit</a>.
  Ssa c'est notre fourniseure <a href="https://dribbble.com/vlockn" class="font-bold underline hover:text-indigo-100">livero</a>.
</div>



<div class="py-6">
  <!-- Breadcrumbs -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center space-x-2 text-gray-400 text-sm">
      <nuxt-link to="/">
      <a href="#" class="hover:underline hover:text-gray-600">Home</a>
      </nuxt-link>
      <span>
        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </span>
      <nuxt-link to="/product">
      <a href="#" class="hover:underline hover:text-gray-600">Product</a>
      </nuxt-link>
      <span>
        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </span>
      <span>{{product.name}}</span>
    </div>
  </div>
  <!-- ./ Breadcrumbs -->

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <div x-data="{ image: 1 }" x-cloak>
          <div class=" md:h-80 rounded-lg bg-gray-100 md:mb-4 mb-50">
            <!-- <div x-show="image === 1" class=" " > -->

              <img class="md:h-80 md:ml-32 rounded-lg bg-gray-100 mb-4 flex items-center justify-center"  v-bind:src="product.picture" alt="">
            <!-- </div> -->
          </div>

        </div>
      </div>
      <div class="md:flex-1 px-4">
        <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
        <p class="text-gray-500 text-sm">By <a href="#" class="text-indigo-600 hover:underline">ABC Company</a></p>

        <div class="flex items-center space-x-4 my-4">
          <div>
            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
              <span class="text-indigo-400 mr-1 mt-1">DH</span>
              <span class="font-bold text-indigo-600 text-3xl">{{product.price}}</span>
            </div>
          </div>
          <div class="flex-1">
            <p class="text-green-500 text-xl font-semibold">Save 12%</p>
            <p class="text-gray-400 text-sm">{{product.created_at}}</p>
          </div>
        </div>

        <p class="text-gray-500">{{product.description}}</p>

        <div class="flex py-4 space-x-4">
          <div class="relative">
            <div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">Qty</div>
            <select class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>

            <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
            </svg>
          </div>

          <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 text-white hover:bg-white hover:text-indigo-500 border-2 border-indigo-500">
            Ajouter au panier <i class="fas fa-shopping-cart"></i>
          </button>
          <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl  hover:bg-indigo-600 text-indigo-500 hover:text-white border-indigo-500 border-2	" @click="showform=!showform">
            Acheter maintenant
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</template>

<script>
import NuxtLogo from './NuxtLogo.vue'
  export default {
  components: { NuxtLogo },
    data(){
      return{
        product : {},
        order : {fullname:"" , adresse:"",city:"",postale:"",phone:"",email:"",product_id:""},
        showform : false
      }
    },
    methods:{
     async fetchoneproduct(){
       const response = await this.$axios.$get(`api/products/${this.$route.params.id}`)
       this.product = response
      //  if(this.product){
      //    }
      },

     async sendorder(){
        const response = await this.$axios.$post('api/orders',{
        fullname:this.order.fullname , adresse:this.order.adresse,city:this.order.city,postale:this.order.postale,phone:this.order.phone,email:this.order.email,product_id:this.$route.params.id
        });
        console.log(response);
      }
      // checkid(){
      //   if (this.product.id!=this.$route.params.id){
      //     this.$router.push('/product');
      //   }
      // }

    },
    created(){
      this.fetchoneproduct();
    }
  }
</script>