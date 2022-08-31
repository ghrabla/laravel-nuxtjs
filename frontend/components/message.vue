<template>
    <!-- Page Content -->
		<div >
		<form  class="w-full max-w-lg absolute bg-gray-500 rounded  p-10 mx-auto ml:0 lg:ml-80 shadow-md z-50	absolute" v-if="showupdate">
   <a href="#" @click="showupdate=!showupdate" class="text-white font-bold flex justify-end text-xl mb-5"><i class="fa-solid fa-xmark"></i></a>
  <!-- <div class="text-center text-white font-bold mb-4">Update Product</div> -->
  <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
         Nome
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="message.fullname">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
         email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="message.email">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-password">
        message
      </label>
      <textarea class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"  v-model="message.message"></textarea>
      <!-- <p class="text-white text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
  </div>
   <div class="flex flex-wrap -mx-3 mb-6 ">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-first-name">
        téléphone
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="message.phone">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
        sujet
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" v-model="message.subject">
    </div>
  </div>
  
  <div class="p-2 w-full">
    <a class="flex mx-auto text-white bg-blue-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer" @click="updatemessage(message.id)">update </a>
  </div>
</form>
            <!-- </div> -->
  <div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div>
      <h2 class="text-2xl font-semibold leading-tight">messages tableau</h2>
    </div>
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
                Nom / téléphone
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Email
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Date de création 
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Sujet
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
              ></th>
            </tr>
          </thead>
          <tbody>
   
            <tr v-for="message in messages" :key="message.id">
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <div class="flex-shrink-0 w-10 h-10">
                    <img
                      class="w-full h-full rounded-full"
                      src="https://media.istockphoto.com/id/1041319964/vector/shadow-from-the-head.webp?s=612x612&w=is&k=20&c=1CpmZgXg5TKW464vCRuj-pKnczsRG0SCK2UVeJNu_fU="
                      alt=""
                    />
                  </div>
                  <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                      {{message.fullname}}
                    </p>
                    <p class="text-gray-600 whitespace-no-wrap">{{message.phone}}</p>
                  </div>
                </div>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <!-- <p class="text-gray-900 whitespace-no-wrap">$214,000</p> -->
                <p class="text-gray-600 whitespace-no-wrap">{{message.email}}</p>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">{{message.created_at}}</p>
                <!-- <p class="text-gray-600 whitespace-no-wrap">Due in 6 days</p> -->
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <span
                  class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                >
                  <span
                    aria-hidden
                    class="absolute inset-0 opacity-50 rounded-full"
                  ></span>
                  <span class="relative">{{message.subject}}</span>
                </span>
              </td>
              <td
                class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right"
              >
                <button  @click="showfun(message)" v-if="showaction!=message"
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
                 <button class="font-bold text-xl" v-if="showaction==message" @click="showaction=!showaction"><i class="fa-solid fa-xmark"></i></button>
              </td>
               <div class="flex flex-col gap-3" v-if="showaction==message">
                  <button class="text-green-500 font-bold" @click="getmessage(message.id)"><i class="fas fa-edit" ></i> Editer</button>
                  <button class="text-red-500 font-bold" @click="deletemessage(message.id)"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</button>
              </div> 
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div></div>
</template>
<script>
   export default {
    //  inject : ['products'],
     data(){
       return{
         message : {},
         messages : [],
          showaction: false,
       showupdate: false,
       }
     },
     methods : {
        showfun(num){
       this.showaction = num;
      //  this.showaction = !this.showaction;
     },
        async fetchmessages() {
    const response = await this.$axios.$get('api/contacts')
    this.messages = response
    console.log(this.messages)
  },
      deletemessage(id) {
      Swal.fire({
        title: "Are you sure ?",
        text: "You are going to delete this message",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "black",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
      }).then((result) => {
        if (result.value) {
        this.$axios.$delete("api/contacts/"+id)
            .then((response) => {
              Swal.fire("Deleted !", "success").then(() => {
                this.messages = this.messages.filter((message) => {
                  return message.id !== id;
                });
              });
            })
            .catch((err) => console.log(err));
        }
      });
    },
        async getmessage(id) {
          this.showupdate=!this.showupdate;
        const res = await  this.$axios.$get("api/contacts/"+id)
          this.message = res;
        // .then((response) => {
        // })
        // .catch((err) => console.log(err));
    },
      async updatemessage(id){
           this.errors='';
           try {
               const res = await this.$axios.$put("api/contacts/"+id, this.message);
               console.log(res)
               Swal.fire("message updated succesfully !", "success")
               this.fetchmessages()
            
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
       this.fetchmessages();
     }
   }
</script>


