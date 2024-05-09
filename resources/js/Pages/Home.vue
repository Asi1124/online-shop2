<script setup>

import CollectionsSection from "@/Components/CollectionsSection.vue";
import Slider from "@/Components/Slider.vue";
import BrandInfo from "@/Components/BrandInfo.vue";
import Card from "@/Components/Card.vue";
import Banner from "@/Components/Banner.vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <Header/>
    <div class="max-w-4xl h-full m-auto text-sm bg">
        <div class="pt-16 text-4xl">
            <Slider/>
        </div>
        <div class="">
            <BrandInfo/>
        </div>
        <div class="flex mb-2 ">
            <h2 class="text-3xl font-bold">Start exploring.</h2>
            <h2 class="text-3xl font-bold text-slate-500"> Good things are waiting for you</h2>
        </div>
        <div class="mb-12 mt-5">
            <collections-section/>
        </div>
        <div class="">
            <div class="flex mb-2 ">
                <h2 class="text-3xl font-bold">Recommendations.</h2>
                <h2 class="text-3xl font-bold text-slate-500"> Best matching products for you</h2>
            </div>
            <div class="flex justify-between gap-5 w-full mt-5" >
                <card/>
                <card/>
                <card/>
                <card/>

            </div>
        </div>
        <div class="mt-5">
            <div class="flex mb-2 ">
                <h2 class="text-3xl font-bold">Best Sellers.</h2>
                <h2 class="text-3xl font-bold text-slate-500">Best selling of the month</h2>
            </div>
            <div class="flex justify-between gap-5 w-full mt-5" >
                <card/>
                <card/>
                <card/>
                <card/>

            </div>
        </div>
        <div>
            <Banner/>
        </div>
    </div>
    <Footer/>
</template>

<style scoped>

</style>
