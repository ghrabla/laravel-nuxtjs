<template>
    <div>
	<div id="app">
		<!--Sidebar with Dimmer -->
		<div class="fixed inset-0 flex z-40">
			<!-- Sidebar -->
			<div
				class="absolute flex top-0 h-screen z-20"
				:class="[right ? 'right-0 flex-row' : 'left-0 flex-row-reverse']"
			>
				<!--Drawer -->
				<button
					@click.prevent="toggle()"
					class="w-12 h-48 p-1 my-auto rounded text-white bg-gray-600 text-center focus:outline-none hover:bg-gray-500 transition-color duration-300"
				>
					<span
						:class="[right ? '-rotate-90' : 'rotate-90']"
						class="block transform origin-center font-bold"
					>
						Drawer
					</span>
				</button>

				<!-- Sidebar Content -->
				<div
					ref="content"
					class="transition-all duration-700 bg-yellow-200 overflow-hidden flex items-center justify-center"
					:class="[open ? 'max-w-lg' : 'max-w-0']"
				>
					<div class="w-48 text-center font-bold text-xl">Sidebar</div>
					<slot></slot>
				</div>
			</div>

			<transition name="fade">
				<!-- Dimmer -->
				<div
					v-if="dimmer && open"
					@click="toggle()"
					class="flex-1 bg-gray-400 bg-opacity-75 active:outline-none z-10"
				/>
			</transition>
		</div>

		<!-- Page Content -->
		<div
			class="absolute inset-1/2 rounded bg-green-500 w-1/2 h-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center text-white"
		>
			Page Content
		</div>
	</div>
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

<style>


.fade-enter-active,
.fade-leave-active {
	transition: opacity 1s ease-out;
}

.fade-enter,
.fade-leave-to {
	opacity: 0;
}
</style>

   