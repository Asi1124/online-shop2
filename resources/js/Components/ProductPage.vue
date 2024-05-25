<script setup>
	import Header from '@/Components/Header.vue';
	import Footer from '@/Components/Footer.vue';
</script>

<template>
	<Header />
	<div class="pt-20 max-w-4xl h-full m-auto text-sm bg">
		<div class="flex">
			<div class="">
				<div>
					<img
						class="w-96 rounded-3xl"
						src="/public/src/watch.png"
					/>
				</div>
				<div class="pl-0.5 pt-5 flex gap-5">
					<img
						class="h-20 w-20 rounded-3xl"
						src="/public/src/watch.png"
					/>
					<img
						class="h-20 w-20 rounded-3xl"
						src="/public/src/watch.png"
					/>
					<img
						class="h-20 w-20 rounded-3xl"
						src="/public/src/watch.png"
					/>
					<img
						class="h-20 w-20 rounded-3xl"
						src="/public/src/watch.png"
					/>
				</div>
			</div>
			<div>
				<b>ЦЕНА ЧАСИКОВ</b>
			</div>
		</div>
		<div>
			<b>ЧАСИКИ<br /></b>
			<b>ИХ ОПИСАНИЕ</b>
		</div>
	</div>
	<Footer />
</template>

<style scoped></style>
