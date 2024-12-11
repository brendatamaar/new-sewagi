<!-- eslint-disable vue/html-indent -->
<template>
	<div class="flex w-full max-w-3xl gap-2">
		<div class="relative flex-1">
			<div class="pointer-events-none absolute inset-y-0 mx-6 flex items-center">
				<i class="fas fa-map"></i>
			</div>
			<input
				class="w-full py-8 pl-14 h-12 bg-[#fff] text-[#a6b2b8] font-semibold"
				placeholder="Enter location, property name or company..." type="text" />
		</div>
	</div>
</template>
<script setup lang="ts">
import { cva } from 'class-variance-authority';
import { computed } from 'vue';
</script>