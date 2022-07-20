<template>
    
		<div class="fixed inset-0 flex z-40">
			<div class="absolute flex top-0 h-screen z-20" :class="[right ? 'right-0 flex-row' : 'left-0 flex-row-reverse']">
				<button @click="toggle()" class="w-12 h-10 mt-2  rounded text-white bg-gray-600 text-center focus:outline-none hover:bg-gray-500 transition-color duration-300">
					<span class="block transform origin-center font-bold">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</span>
				</button>
				<div ref="content" class="transition-all duration-700 bg-white overflow-hidden flex items-center justify-center" 
				:class="[open ? 'max-w-lg' : 'max-w-0']"
				>
					<div class="w-48 ml-5 text-blue-900	 flex flex-col">
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
						<NuxtLink to="/">
							<i class="fa fa-home" aria-hidden="true"></i> Home
						</NuxtLink>
						</a>
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
						<NuxtLink to="/productdashboard">
							<i class="fas fa-chart-bar"></i> Products
						</NuxtLink>
						</a>
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
						<NuxtLink to="/orderdashboard">
							<i class="fas fa-bell"></i> Orders
						</NuxtLink>
						</a>
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
						<NuxtLink to="/users">
							<i class="fa fa-user" aria-hidden="true"></i> Users
						</NuxtLink>
						</a>
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
						<NuxtLink to="/message">
							<i class="fa fa-address-book" aria-hidden="true"></i> Contacts
						</NuxtLink>
						</a>
                        <a href="javascript:void(0)" class="font-bold text-xl my-5 ">
							<i class="fa fa-sign-out" aria-hidden="true"></i> Logout
						</a>
					</div>
				</div>
			</div>

			<transition name="fade">
				<div
					v-if="dimmer && open"
					@click="toggle()"
					class="flex-1 bg-gray-400 bg-opacity-75 active:outline-none z-10"
				>
		       </div>
			</transition>
		</div>

		
</template>

<script>
export default {
	data() {
		return {
			open: false,
			dimmer: true,
			right: false
		};
	},
	methods: {
		toggle() {
			this.open = !this.open;
		}
	}
};
</script>



   