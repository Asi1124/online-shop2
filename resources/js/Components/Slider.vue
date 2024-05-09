<template>
    <carousel :transition="800" :autoplay="5000" :wrapAround="true" :items-to-show="1">
        <slide v-for="slide in 1" :key="slide">
            <button>
                <div>
                <div class=" mt-20 ml-14 absolute text-xs">
                    <img  class="w-1/6 h-auto" src="/public/src/cart.svg">
                    <p>Starting from: $49.99</p>
                </div>
                <div class="text-left absolute mt-32 ml-14">
                    <b>Exclusive collection<br>for everyone</b>
                </div>
                <div class="absolute mt-56 ml-11">
                    <button><img class="w-7/12 h-auto" src="/public/src/hero-button.svg"></button>
                </div>
                    <img class="fixed-size-image" src="/public/src/slider2.jpg">
                </div>
            </button>
        </slide>
        <slide v-for="slide in 1" :key="slide">
            <button>
            <div>
                <div class=" mt-20 ml-14 absolute text-xs">
                    <img  class="w-1/6 h-auto" src="/public/src/cart.svg">
                    <p>Starting from: $49.99</p>
                </div>
                <div class="text-left absolute mt-32 ml-14">
                 <b>Exclusive collection<br>for everyone</b>
                </div>
                <div class="absolute mt-56 ml-11">
                    <button><img class="w-7/12 h-auto" src="/public/src/hero-button.svg"></button>
                </div>
                <img class="fixed-size-image" src="/public/src/slider1.png">
            </div>
            </button>
        </slide>

        <template #addons>
            <navigation />
        </template>
    </carousel>
</template>

<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
    name: 'App',
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
}
</script>

<style>
.fixed-size-image {
    width: 1536px; /* ваша ширина */
    height: 350px; /* ваша высота */
}
</style>
