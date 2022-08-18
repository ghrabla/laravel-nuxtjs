<template>
    <div class="m-8 bg-gray"> 
        <div class="lg:flex flex-row-reverse">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Register</h2>
                    <div class="mt-12">
                        <form @submit.prevent="submitForm">
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Full Name</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="Adnane elgotabi" v-model="form.name">
                                <p class=" text-red-500 text-xs text-center" v-if="errors.name">
                                       {{ errors.name.join(" ") }}
                                </p>
                            </div>
                            <div class="mt-8">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="mike@gmail.com" v-model="form.email">
                                <p class=" text-red-500 text-xs text-center" v-if="errors.email">
                                       {{ errors.email.join(" ") }}
                                </p>
                            </div>
                            <div class="mt-8">
                                <div class="flex justify-between items-center">
                                    <div class="text-sm font-bold text-gray-700 tracking-wide">
                                        Password
                                    </div>
                                    
                                </div>
                                <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="Enter your password" v-model="form.password">
                                <p class=" text-red-500 text-xs text-center" v-if="errors.password">
                                       {{ errors.password.join(" ") }}
                                </p>
                            </div>
                            <div class="mt-10">
                                <button class="bg-blue-700 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-700
                                shadow-lg">
                                    Register
                                </button>
                            </div>
                        </form>
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            you have an account ? <NuxtLink to="/login"> <a class="cursor-pointer text-blue-700 hover:text-indigo-800">Sign in</a> </NuxtLink>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center bg-indigo-100 flex-1 h-screen">
                <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
                    <img src="../assets/staticimg/20944201.jpg" alt="">
                </div>
            </div>
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
    methods:{
       async submitForm(){
           this.errors='';
           try {
               const res= await this.$axios.$post("api/register", this.form);
            //    console.log(res);
            console.log(res);
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