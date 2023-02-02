<template>
    <footer>
        <div class="bg-stone-800">
            <div class="mx-auto w-screen 2xl:max-w-7xl xl:max-w-6xl lg:max-w-4xl md:max-w-3xl max-w-xl lg:px-0 px-2">
                <div class="grid grid-cols-3 md:gap-x-12 md:gap-y-0 gap-y-8 md:px-0 px-8 py-10">
                    <div class="md:col-span-1 col-span-3">
                        <p class="text-xl tracking-wide mb-2 text-white uppercase">Mobile Tyres Oxford</p>
                        <p class="mt-6 text-gray-500 text-sm">
                            Tyres Oxford is a 20-year-old company offering mobile tyre fitting services in and around the city of Oxford.
                            <br><br>
                            Our professional and experienced tyre fitters are equipped with the latest tools and technology to deliver
                            top-quality tyre fitting services at a time convenient for you. Choose Tyres Oxford for a fast, reliable, and affordable tyre fitting service.
                        </p>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <p class="text-xl tracking-wide mb-2 text-white uppercase">Operating Hours</p>
                        <div class="space-y-3 flex flex-col items-start">
                            <p class="text-sm text-gray-500 hover:text-gray-300">24 hours, and 7 days a week</p>
                        </div>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <p class="text-xl tracking-wide mb-2 text-white uppercase">HELP</p>
                        <div class="space-y-3 flex flex-col items-start">
                            <a class="text-sm text-gray-500 underline hover:text-gray-300" title="Contact Us" href="/#contact">Contact Us</a>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" title="Privacy Policy" href="/privacy-policy">Privacy Policy</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-stone-900">
            <div class="mx-auto w-screen 2xl:max-w-7xl xl:max-w-6xl lg:max-w-4xl md:max-w-3xl max-w-xl lg:px-0 px-2 flex lg:flex-row lg:space-y-0 space-y-2 flex-col items-center justify-between py-5">
                <p class="text-sm text-center text-gray-500">© 2022 Tyres Oxford | All Rights Reserved</p>
                <p class="text-gray-300 text-center text-sm">Website by: <a class="text-white hover:underline" href="https://skelop.com" target="_blank" rel="noreferrer">SKELOP Website Design &amp; Development</a></p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

</script>

<style scoped>

</style>
