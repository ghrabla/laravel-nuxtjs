<template>

    <!-- Page Content -->
	<div >
		<form  class="w-full max-w-lg absolute bg-gray-500 rounded  p-10 mx-auto ml:0 lg:ml-80 shadow-md z-50	absolute" v-if="showupdate">
   <a href="#" @click="showupdate=!showupdate" class="text-white font-bold flex justify-end text-xl mb-5"><i class="fa-solid fa-xmark"></i></a>
  <!-- <div class="text-center text-white font-bold mb-4">Update Product</div> -->
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        ordre Owner
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.fullname">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        ordre adresse
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.adresse">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        ordre postale code
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.postale">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        order téléphone
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.phone">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        ordre city
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.city">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        ordre email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.email">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        ordre quntity
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.orderquant">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <!-- <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        ordre prix
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="order.price*order.orderquant">
    </div> -->
  </div>
  <div class="p-2 w-full">
    <a class="flex mx-auto text-white bg-blue-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer" @click="updateorder(order.id)">Editer </a>
  </div>
  </form>

   
  <div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
<label for="countries" class="block mb-2 text-sm  font-medium text-gray-900 dark:text-gray-400">Sélectionner une option</label>
<select name="sortBy" id="sortBy" @change="sort(sortType)" v-model="sortType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option v-for="item in sortOptions" :key="item" :value="item.value">{{item.text}}</option>
</select>
    

      
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div
        class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
      >
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                PROPRIÉTAIRE/TÉLÉPHONE 
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Price
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                CREATDAT/PRODNOM
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Type/Quantity
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
              ></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="order in orders" :key="order.id">
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <div class="flex-shrink-0 w-10 h-10">
                    <img
                      class="w-full h-full rounded-full"
                      :src="order.picture"
                      alt=""
                    />
                  </div>
                  <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap font-bold">
                      {{order.fullname}}
                    </p>
                    <p class="text-gray-600 whitespace-no-wrap">{{order.phone}}</p>
                  </div>
                </div>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{order.price * order.orderquant}}</p>
                <p class="text-gray-600 whitespace-no-wrap">DH</p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{order.created_at}}</p>
                <p class="text-gray-600 whitespace-no-wrap">{{order.name}}</p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span
                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                >
                  <span
                    aria-hidden
                    class="absolute inset-0 opacity-50 rounded-full"
                  ></span>
                  <span class="relative">{{order.type}}</span>
                  <span class="relative font-bold block">{{order.orderquant}}</span>
                </span>
              </td>
              <td
                class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right"
              >
                <button @click="showfun(order)" v-if="showaction!=order"
                  type="button"
                  class="inline-block text-gray-500 hover:text-gray-700"
                >
                  <svg
                    class="inline-block h-6 w-6 fill-current"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"
                    />
                  </svg>
                </button>
                <button class="font-bold text-xl" v-if="showaction==order" @click="showaction=!showaction"><i class="fa-solid fa-xmark"></i></button>
              </td>
               <div class="flex flex-col gap-3" v-if="showaction==order">
                  <button class="text-green-500 font-bold" @click="getorder(order.id)"><i class="fas fa-edit" ></i> Update</button>
                  <button class="text-red-500 font-bold" @click="deleteorder(order.id)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              </div> 
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</template>

<script>
   export default {
    //  inject : ['products'],
     data(){
       return{
         order : {},
         orders : [],
         showaction: false,
         showupdate: false,
         showsort : false,
         sortType: 'nouvelle',
         sortOptions: [
          // { text: 'sort by', value: 'new' },
          { text: 'nouvelle', value: 'nouvelle' },
          { text: 'ancien', value: 'ancien' },
       ]
       }
     },
     methods : {
        showfun(num){
       this.showaction = num;
      //  this.showaction = !this.showaction;
     },
     showtime(){
       this.showsort = !this.showsort;
     },
   
    sort(type){
      if (type === 'ancien'){
		    this.orders.sort((a, b) =>(a.id > b.id ? 1 : -1));
      }else{
		    this.orders.sort((a, b) =>(a.id > b.id ? -1 : 1));
      }
	    },
    async fetchorders() {
    const response = await this.$axios.$get('api/orders')
    this.orders = response
    console.log(this.orders)
  },
    deleteorder(id) {
      Swal.fire({
        title: "Are you sure ?",
        text: "You are going to delete this order",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "black",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
      }).then((result) => {
        if (result.value) {
        this.$axios.$delete("api/orders/"+id)
            .then((response) => {
              Swal.fire("Deleted !", "success").then(() => {
                this.orders = this.orders.filter((order) => {
                  return order.id !== id;
                });
              });
            })
            .catch((err) => console.log(err));
        }
      });
    },
        async getorder(id) {
          this.showupdate=!this.showupdate;
        const res = await  this.$axios.$get("api/orders/"+id)
          this.order = res;
        // .then((response) => {
        // })
        // .catch((err) => console.log(err));
    },
      async updateorder(id){
           this.errors='';
           try {
               const res = await this.$axios.$put("api/orders/"+id, this.order);
               console.log(res)
               Swal.fire("order updated succesfully !", "success")
               this.fetchorders()
            
            //    console.log(res);
           } catch (error) {
               if(error.response.status===422){
                   this.errors = error?.response?.data?.errors;
               console.log(this.errors);

               }

           }


        }

     },
     created(){
       this.fetchorders();
     }
   }
</script>



