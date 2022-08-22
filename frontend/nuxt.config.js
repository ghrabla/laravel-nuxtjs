export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Fces maroc ',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ],
    script: [
      { hid: 'fontawesome', src: 'https://kit.fontawesome.com/a9441c7460.js', defer: true },
      { hid: 'sweetalert', src: '//cdn.jsdelivr.net/npm/sweetalert2@11', defer: true },
      { hid: 'lottiefiles', src: 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', defer: true },
    ]
  },

  // ssr : false,
  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],
  
  server: {
    port: 51602,
},
  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/axios',
    '@nuxtjs/auth-next',
    // 'nuxt-vuex-localstorage'
    // 'vue-localstorage'
  ],


  // router: {
  //   middleware: ['auth']
  // },

  axios: {
    baseURL: "http://localhost:8000",
    // credentials : true
    //  credentials: true,
  },

  auth: {
    redirect : {
     login : '/',
     home : '/',
     callback : '/'
    },
    strategies: {
      local :{
        user : {
          property : "data",
          // _scheme : 'local',
        },
        endpoints : {
          login : {url : "/api/adminlogin" , method : "post"},
          logout : {url : "/api/adminlogout" , method : "post"},
          // user : {url : "/api/auth/user" , method : "get"},
        }
        
      }
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
