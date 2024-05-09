<script setup>

</script>

<template>
        <header class=" z-50 min-w-full w-screen bg-white fixed  flex justify-between border-b border-slate-300 px-16">
            <div class="flex items-center mt-1 mb-1">
                <div>
                    <b class="sm:text-3xl cursor-pointer">NEXTON</b>
                    <p class="pl-10 cursor-pointer">eCommerce</p>
                </div>
            </div>
            <div class="flex items-center rounded-3xl mt-1 mb-1">
                <span class="absolute flex items-center pl-3">
                <img src="/public/src/search.svg" alt="search">
                </span>
                <input class="bg-gray-200 placeholder:text-slate-400 block  border-slate-300 rounded-3xl py-3 pl-10 pr-20 focus:outline-none focus:border-gray-600 focus:ring-gray-600 focus:ring-1 " placeholder="Искать что угодно..." type="text" name="search"/>
            </div>
            <ul class="flex mt-5 gap-6">
                <li class="cursor-pointer">
                    <img src="/public/src/user.svg" alt="user">
                </li>
                <li class="cursor-pointer">
                    <img src="/public/src/cart.svg" alt="cart">
                </li>
            </ul>
        </header>
</template>

<style scoped>

</style>
