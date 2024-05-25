<script setup>
const props = defineProps({
    name: String,
    price: Number,
});
</script>

<template>
	<div
		class="max-w-xs rounded-3xl relative transition hover:bg-slate-100 hover:-translate-y-2 hover:shadow-xl"
	>
		<img
			src="/public/src/watch.png"
			alt="watch"
			class="w-full rounded-3xl"
		/>
		<div class="flex justify-between">
			<div class="ml-3 mt-2 text-sm">
				<b>{{ name }}</b>
				<p class="text-slate-600">Accessories</p>
				<b>${{ price }}</b>
				<p class="text-slate-600 line-through">${{price + 100}}</p>
				<div class="flex mt-1 mb-2">
					<img
						src="/public/src/star.svg"
						alt="star"
					/>
					<p class="text-slate-600">4.9 (98)</p>
				</div>
			</div>
		</div>
	</div>
</template>

<style scoped></style>
