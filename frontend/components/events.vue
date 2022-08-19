  <template>
  <div class="container mx-auto sm:w-4/5 xl:w-1/4 border p-10 rounded-xl">
       <div class="text-center -mt-4">Register</div>

        <form action="" @submit.prevent="submitForm">
            <div class="md:w-1/2 space-y-3">
        <input type="email" v-model="form.email" class="px-6  border rounded-md" placeholder-gray-500 placeholder="Enter your email" /><br>
         <p class=" text-red-500 text-xs text-center" v-if="errors.email">
          {{ errors.email.join(" ") }}
        </p>
          <input type="text" v-model="form.name" class="px-6  border rounded-md" placeholder-gray-500 placeholder="Enter your name" /><br>
          <p class=" text-red-500 text-xs text-center" v-if="errors.name">
          {{ errors.name.join(" ") }}
        </p>
          <input type="password" v-model="form.password" class="px-6  border rounded-md" placeholder-gray-500 placeholder="Password" /><br>
          <p class=" text-red-500 text-xs text-center" v-if="errors.password">
          {{ errors.password.join(" ") }}
        </p>
          <button class="px-6  bg-green-300 text-white font-serif" >SEND</button>
          </div>
        </form>
          <div class=""> Already have an account? <nuxt-link class="text-blue-600" :to="{name:'auth-login'}">Login</nuxt-link>
          </div>
      </div>

</template>

<script>
export default {
    data(){
        return{
            errors:{

            },
            form: {

        name: "",
        email: "",
        password: ""
      }
        }

    },
    // mounted(){
    //   this.consoleme();
    // },
    methods:{
      // async consoleme(){
      //   console.log("kamal");
      // },
       async submitForm(){
           this.errors='';
          
           try {
               const res= await this.$axios.$post("api/register", this.form).then(
                 this.$router.push('/login')
               )
            //    console.log(res);
            
           } 
           catch (error) {
               if(error.response.status===422){
                   this.errors = error?.response?.data?.errors;
              //  console.log(this.errors);

               }

           }


        }
    }

}
</script>