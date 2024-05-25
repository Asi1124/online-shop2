<script setup xmlns="http://www.w3.org/1999/html">
	import { useForm } from '@inertiajs/vue3';
	import { router } from '@inertiajs/vue3';

	const form = useForm({
		name: null,
		description: null,
		price: null,
		images: [],
	});

	function submit() {
		form.post('/adminCreate');
	}

	function handleFileUpload(event) {
		form.images = Array.from(event.target.files);
	}
</script>

<template>
	<form
		enctype="multipart/form-data"
		@submit.prevent="submit"
	>
		<label for="name">name:</label>
		<input
			class="bg-blue-200"
			id="name"
			v-model="form.name"
		/>
		<label for="description">description:</label>
		<input
			id="description"
			class="bg-blue-200"
			v-model="form.description"
		/>
		<label for="price">price:</label>
		<input
			id="price"
			class="bg-blue-200"
			v-model="form.price"
		/>
		<input
			id="images"
			multiple="multiple"
			type="file"
			@change="handleFileUpload"
		/>
		<button
			class="bg-blue-400"
			type="submit"
		>
			Submit
		</button>
	</form>
</template>

<style scoped></style>
