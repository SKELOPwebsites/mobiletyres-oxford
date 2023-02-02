<template>
    <div
        class="sm:fixed absolute top-0 w-full z-50"
        :class="{'bg-gradient-to-t from-transparent to-black h-36': scrollPosition < 300, 'bg-black/75 lg:h-28 h-auto lg:py-0 py-2': scrollPosition >= 300 }"
    >
        <Container class="h-full flex items-center justify-start lg:flex-row flex-col">
            <img src="/images/logo-white.png" class="w-60" alt="Mobile Tyres Oxford Logo">

            <div class="font-montserrat font-bold text-sm flex flex-row space-x-4 lg:ml-12 lg:mt-0 mt-2 uppercase">
                <a href="/" class="sm:block hidden text-white hover:text-site-300">HOME</a>
                <a href="/#mobile-tyre-fitting" class="sm:block hidden text-white hover:text-site-300">SERVICE</a>
                <a href="/#coverage" class="sm:block hidden text-white hover:text-site-300">COVERAGE</a>
                <a href="/#about" class="sm:block hidden text-white hover:text-site-300">ABOUT</a>
                <a href="/#contact" class="sm:block hidden text-white hover:text-site-300">CONTACT</a>
                <a href="tel:07375502411" class="text-white hover:text-site-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor" data-v-412ccbe4=""><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" data-v-412ccbe4=""></path></svg>
                    07375 502411
                </a>
            </div>
            <div class="lg:block hidden font-montserrat font-bold text-sm space-x-4 ml-auto uppercase">
                <a href="tel:07375502411" class="text-white hover:text-site-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor" data-v-412ccbe4=""><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" data-v-412ccbe4=""></path></svg>
                    07375 502411
                </a>
            </div>
        </Container>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import Container from './Container.vue'

const scrollPosition = ref(0)

onMounted(() => {
    window.addEventListener('scroll', updateScroll)
})
onUnmounted(() => {
    window.removeEventListener('scroll', updateScroll)
})

function updateScroll() {
    scrollPosition.value = window.scrollY
}
</script>

<style scoped>

</style>
