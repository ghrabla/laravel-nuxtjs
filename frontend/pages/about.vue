<template>
    <div>
         <Navbar></Navbar>
        <about></about>
       <Footer></Footer>
    </div>
</template>
<script setup>
  export default{
       head: {
    title: 'ABOUT FCES MAROC',
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
      { hid: 'fontawesome', src: 'https://kit.fontawesome.com/a9441c7460.js', defer: true }
    ]

  },
  }

</script>
