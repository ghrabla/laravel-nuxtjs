export default {
  // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
  ssr: false,

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'FCES MAROC',
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
      { hid: 'lottiefiles', src: 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', defer: true },
    ]

  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],
   
  
  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],


  // publicRuntimeConfig: {
  //   axios: {
  //     baseURL: 'https://api.nuxtjs.dev'
  //   }
  // },

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/auth-next',
    '@nuxtjs/axios'
],

  // hi ilyass

  axios: {
    credentials: true, // Used as fallback if no runtime config is provided
  },


  auth: {
    strategies: {
      laravelSanctum: {
        provider: 'laravel/sanctum',
        url: 'http://localhost:8000',
      },
    },
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  },

  loading: {
    color: 'blue',
    height: '5px'
  }
}
