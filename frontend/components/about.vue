<template>
    <div class="bg-gray-100 ">
        <body class="text-gray-700 bg-white antialiased" style="font-family: 'Roboto', sans-serif">
  <div class="py-20 bg-cover bg-no-repeat bg-fixed " id="backimg">
    <div class="container m-auto text-center px-6 opacity-100">
      <h2 class="text-4xl font-bold mb-20 text-white">plus d'informations sur le FCES MAROC sur charika.ma!</h2>
      <!-- <h3 class="text-2xl mb-8 text-white font-bold">Not much, but it could be a life form. This is Rouge Two. this is Rouge Two. Captain Solo, so you copy?</h3> -->
      <a href="https://www.charika.ma/societe-fcesmaroc-435550" class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider hover:border-transparent hover:text-blue-500 hover:bg-gray-800">allons-y maintenant</a>
    </div>
  </div>
        
        <!-- Features -->
        <section class="container mx-auto px-6 p-10">
          <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">ce que nous faisons!</h2>
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 pr-10">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">Objectif</h4>
              <p class="text-gray-600 mb-8">Notre société se propose de vous offrir ses services, et désire entretenir avec vous des relations commerciales, rentrant dans les domaines de ses activité.</p>
            </div>
            <div class="w-full md:w-1/2">
              <img class="rounded-lg" src="~/assets/staticimg/3d-house-with-solar-pannels.jpg" alt="Vortex" />
            </div>
          </div>
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <img class="rounded-lg" src="..\assets\staticimg\solar-cell-farm-power-station-alternative-energy-from-sun.jpg" alt="use the force" />
            </div>
            <div class="w-full md:w-1/2 pl-10">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">Expérience</h4>
              <p class="text-gray-600 mb-8">La sous-traitance de la maintenance de toutes sortes d'installations de climatisation, de froid industriel ou de chauffage central; avec des formules de contrat allant de la maintenance simple à la prise en charge totale par notre société.
La vente de matériel, accessoires ou pièces de rechange d'équipement de climatisation, de chaufferie, ou autre utilité.</p>
            </div>
          </div>
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 pr-10">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">َEfficacité</h4>
              <p class="text-gray-600 mb-8">L'étude et la réalisation clé en main, d'installation de climatisation, de chambres froides, de chauffe eau solaire et de plomberie ainsi que la réalisation des installations des panneaux photovoltaïques.</p>
            </div>
            <div class="w-full md:w-1/2">
              <img class="rounded-lg" src="..\assets\staticimg\man-worker-firld-by-solar-panels.jpg" alt="Syncing" />
            </div>
          </div>
        </section>
        
        <!-- Testimonials -->
        <section class="bg-gray-100">
          <div class="container mx-auto px-6 py-20">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Notre équipe</h2>
            <div class="flex flex-wrap">
              
              <div class="w-full h-auto md:w-1/3 px-2 mb-4">
                <div class="flex flex-col justify-between h-full bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">How are you feeling, kid? You don't look so bad to me. In fact, you look strong enough to pull the ears off a Gundark. Thanks to you.</p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">Luke Skywalker</p>
                </div>
              </div>
              
              <div class="w-full h-auto md:w-1/3 px-2 mb-4">
                <div class="flex flex-col justify-between h-full bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">That's two you owe me, junior. Well your Worship, looks like you managed to keep me around for a little while longer. I had nothing to do with it.</p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">Emperor's Royal Guards</p>
                </div>
              </div>
              
              <div class="w-full h-auto md:w-1/3 px-2 mb-4">
                <div class="flex flex-col justify-between h-full bg-white rounded shadow py-2">
                  <p class="text-gray-800 text-base px-6 mb-5">General Rieekan thinks it's dangerous for any ships to leave the system until we've activated the energy shield. That's a good story. I think you just can't bear to let a gorgeous guy like me out of your sight</p>
                  <p class="text-gray-500 text-xs md:text-sm px-6">Queen Mother Ta'a Chume</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!--Call to Action-->
        <section style="background-color: #667eea">
          <div class="container mx-auto px-6 text-center py-20">
            <h2 class="mb-6 text-4xl font-bold text-center text-white">Headquarters personnel</h2>
            <h3 class="my-4 text-2xl text-white">Report to command center. Take it easy.</h3>
            <button class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider hover:border-red hover:text-white hover:bg-red-600">Report</button>
          </div>
        </section>
      </body>
    </div>
</template>

<script>
// import axios from '@nuxtjs/axios';
   export default {
    //  data(){
    //    return{

    //    }
    //  },
     mounted(){
       console.log('kamla')
     }
//     methods: {
//   async fetchSomething() {
//     const ip = await this.$axios.$get('http://icanhazip.com')
//     this.ip = ip
//     console.log(this.ip);
//   }
// }
   }
</script>


<style scoped>
   #backimg{
     background-image: url('../assets/staticimg/3d-house-with-solar-pannels (1).jpg');
     /* background-repeat: no-repeat;
     background: fixed;
     background-size: cover; */
   }
   
</style>