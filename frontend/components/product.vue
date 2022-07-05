<template>
    
    <div class="flex justify-between flex-wrap bg-gray-200">
       <card v-for="n in 8" :key="n"/> 
    </div> 
    
</template>


<script>
import crad from '../components/card';
    export default{
        data(){
            return {
                n:''
            }
        },
        methods :{

        }
    }
</script>


<style scoped>

</style>