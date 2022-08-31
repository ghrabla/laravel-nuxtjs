<template>
    <div>
    
      <div class="font-sans text-black  bg-gray-200 flex lg:flex-row flex-col items-center justify-around">
      <div class="flex flex-wrap justify-center lg:my-0 my-5" >
          <li class="list-none cursor-pointer mx-5 lg:my-0 md:my-0 my-5" v-for="n in choices" :key="n" @click="showfun(n,n)"  :class="showaction==n ? 'bg-indigo-600 text-white font-bold rounded py-2 px-2': 'block'">{{n}}</li>
      </div>
      <div class="border rounded overflow-hidden flex py-5">
       <input type="text" class="px-4 py-2 " placeholder="Search..." v-model="keyword">
       <button class="flex items-center justify-center px-4 border-l bg-white">
        <svg class="h-4 w-4 text-grey-dark " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
       </button>
       </div>
       <div class="cursor-pointer font-bold ml-5 cursor-pointer" @click="sort0()">
           Sort by <i class="fa-solid fa-caret-down" v-if="!showsort"></i> 
           <i class="fa-solid fa-caret-right" v-if="showsort"></i>
       </div>
           <div class="flex justify-col " v-if="showsort">
               <a href="javascript:void(0)" @click="sort1()">high</a>
               <!-- <a href="javascript:void(0)" >low</a> -->
           </div>
           <div class="flex justify-col " v-if="showsort">
               <a href="javascript:void(0)" @click="sort2()">low</a>
               <!-- <a href="javascript:void(0)">high</a> -->
           </div>
       
      </div>

    <div class="flex lg:justify-between justify-center flex-wrap bg-gray-200 ">
       <!-- <card />  -->
       <div class="antialiased  font-sans" v-for="product in filteredList.filter(p => p.type === currentType || currentType === n || currentType === 'all')" :key="product">
    <div class="max-w-6xl mx-auto" >
        <div class="flex">
            <div class="py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <!-- <div class="bg-cover bg-center h-56 " > -->
                    
                    <img class="rounded shadow-md h-56 w-72" :src="product.picture" alt="">
                        <!-- <div class="flex justify-end">
                            <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div> -->
                    <!-- </div> -->
                    <div class="p-4">
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{product.name}}</p>
                        <p class="text-3xl text-gray-900">{{product.price}} DH</p>
                        <p class="text-gray-700">cliquez sur les détails pour plus...</p>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                           <a href="javascript:void(0)" class="ml-2 font-bold " @click="setproduct()">   <i class="fas fa-shopping-cart"></i> Panier</a>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                        <Nuxt-link :to="'details/'+product.name+'/'+product.id ">
                           <a href="javascript:void(0)" class="ml-2 font-bold "> <i class="fa fa-info-circle" aria-hidden="true"></i> Details</a>
                        </Nuxt-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div> 
    </div>
</template>


<script>
import crad from '../components/card';
import {computed} from 'vue';
    export default{
        
        data(){
            return {
                products : [],
                product : {id:'',name:''},
                showsort : false,
                keyword: "",
                open : false,
                showaction : false,
                n : '',
                currentType: "",
                choices: ['all','solar','battery','chouveux','panneaux','onduleurs']
            }
        },
        methods :{
            
            setproduct(){
            //   localStorage.setItem('products', this.product)
            var user1 = {"name":"user1"}; //Object1
var user2 = {"name":"user2"}; //Object2
var team = []; //array of objects
team.push(user1);
team.push(user2);
var projects = [];
projects.push(team);
console.log(projects); 
             },

             showfun(num,nom){
                 this.currentType = nom;
               this.showaction = num;

            },
             async fetchproducts() {
             const response = await this.$axios.$get('api/quant/products')
             this.products = response
             console.log(this.products)
           },
            sort1(){
		       this.products.sort((a, b) =>(a.price > b.price ? 1 : -1));
            },
            sort2(){
		       this.products.sort((a, b) =>(a.price > b.price ? -1 : 1));
            },
            sort0(){
                this.showsort =! this.showsort;
		       this.fetchproducts();
            }

        },
        computed : {
             filteredList() {
             return this.products.filter((product) => 
             product.name.toLowerCase().includes(this.keyword)
            );
      
    },
        },
        created(){
            this.fetchproducts();
        },
        provide(){
            return{
                products : computed(() => this.products),
                product : computed(() => this.product)
            }
        }
    }
</script>


<style scoped>

</style>