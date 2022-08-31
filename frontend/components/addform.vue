<template>
     <form  class="w-full max-w-lg absolute bg-gray-500 rounded  p-10 mx-auto ml:0 lg:ml-80 shadow-md z-50 	" v-if="show">
   <a href="#" @click="show=!show" class="text-white font-bold flex justify-end text-xl mb-5"><i class="fa-solid fa-xmark"></i></a>
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        Produit Nom
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="form.name">
       <p class=" text-red-500 text-xs text-center" v-if="errors.name">
                                       {{ errors.name.join(" ") }}
      </p>
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        Produit Prix
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="form.price">
       <p class=" text-red-500 text-xs text-center" v-if="errors.price">
                                       {{ errors.price.join(" ") }}
      </p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-password">
        Description
      </label>
      <textarea class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" v-model="form.description" ></textarea>
       <p class=" text-red-500 text-xs text-center" v-if="errors.description">
                                       {{ errors.description.join(" ") }}
      </p>
      <p class="text-white text-xs italic">Make it as long and as crazy as you'd like</p>
    </div>
  </div>
   <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-city">
        image
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" v-model="form.picture" >
       <p class=" text-red-500 text-xs text-center" v-if="errors.picture">
                                       {{ errors.picture.join(" ") }}
      </p>
    </div>
  <div class="w-full px-3 my-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-city">
        la marque
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" v-model="form.company" >
       <p class=" text-red-500 text-xs text-center" v-if="errors.company">
                                       {{ errors.company.join(" ") }}
      </p>
    </div>
  </div>
  <div class="flex -mx-3 mb-2">
    
    <div class="w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
        Type
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 bordeblackder-gray-200 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" v-model="form.type">
          <!-- 'all','solar','battery','chouveux','panneaux','onduleurs' -->
          <option>solar</option>
          <option>chouveux</option>
          <option>battery</option>
          <option>panneaux</option>
          <option>onduleurs</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
         <p class=" text-red-500 text-xs text-center" v-if="errors.type">
                                       {{ errors.type.join(" ") }}
      </p>
      </div>
    </div>
    <div class="w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">
        Quantity
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210" v-model="form.quantity">
       <p class=" text-red-500 text-xs text-center" v-if="errors.quantity">
                                       {{ errors.quantity.join(" ") }}
      </p>
    </div>
  </div>
  <div class="p-2 w-full">
    <a class="flex mx-auto text-white bg-blue-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer" @click="submitForm()">Add </a>
  </div>
</form>
</template>

<script>
   export default{
     inject:['show'],
     data(){
         return {
             show:'show',
             errors : {},
             form : {
               name : "",
               slug : "details",
               type : "",
               quantity : "",
               picture : "",
               company : "",
               description : "",
               price : ""

             }
         }
     },
    methods:{
       async submitForm(){
           this.errors='';
           try {
               const res = await this.$axios.$post("api/products", this.form);
               console.log(res)
               Swal.fire("product added succesfully !", "success")
            
            //    console.log(res);
           } catch (error) {
               if(error.response.status===422){
                   this.errors = error?.response?.data?.errors;
               console.log(this.errors);

               }

           }


        }
    }
     
   }
</script>
