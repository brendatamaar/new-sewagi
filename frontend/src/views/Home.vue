<!-- eslint-disable vue/html-indent -->
<template>
	<!-- start: home -->
	<section
		class="relative overflow-hidden min-h-screen bg-gradient-to-t from-[#f0e7e1] to-[#f7f9fa] flex flex-col flex-wrap justify-center">
		<button onclick="$zopim.livechat.window.show()"
			class="h-14 w-14 border-0 rounded-full leading-none bg-[var(--color-primary)] fixed bottom-16 left-16 z-[1030] text-white text-2xl">
			<i class="fas fa-comment-alt"></i>
		</button>

		<div id="homeSlider">
			<div class="w-full h-screen">
				<div class="home-slider-item">
					<img src="/img/background/homepage/architecture-building-man-1527256.jpg"
						class="w-full max-w-full h-screen object-cover object-center !w-full !block align-middle border-none"
						alt="Slider">
				</div>
			</div>
		</div>
	</section>
	<!-- end: home -->
</template>

<script setup lang="ts">
import { Button, HomeSearchBar } from '@/components'

</script>

<style scoped>
</style>