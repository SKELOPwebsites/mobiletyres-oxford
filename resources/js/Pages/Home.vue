<template>
    <Head>
        <title>Mobile Tyre Fitting Services in Oxford | Mobile Tyres Oxford</title>
        <meta name="description" content="Mobile Tyres Oxford's Privacy Policy">
        <link rel="canonical" href="https://mobiletyres-oxford.co.uk/privacy-policy">
    </Head>

    <Header />
    <div class="relative w-full lg:h-[44rem] md:h-[40rem] sm:h-[36rem] h-[32rem]">
        <Container class="font-montserrat z-10 relative md:pt-60 sm:pt-48 pt-44">
            <h1 class="md:text-6xl sm:text-5xl text-3xl font-bold text-white sm:text-left text-center">Mobile Tyre Fitting</h1>
            <h2 class="sm:text-2xl text-lg text-white sm:text-left text-center">In & Around Oxford</h2>

            <div class="flex sm:justify-start justify-center space-x-4 mt-8">
                <a class="block text-white bg-site-300 font-medium sm:px-6 sm:py-3 px-4 py-2 uppercase hover:bg-site-400 transition cursor-pointer" href="tel:07375502411">Call Now</a>
                <button class="text-white bg-transparent border border-white font-medium sm:px-6 sm:py-3 px-4 py-2 uppercase hover:bg-white hover:text-black transition">Contact Us</button>
            </div>
        </Container>

        <BrandLogoCarousel />

        <img
            src="/images/home-banner.jpg"
            alt="Mobile Tyre Fitting in Oxford"
            class="absolute inset-0 object-cover object-center w-full h-full brightness-[0.35]"
        >
    </div>

    <div class="w-screen mx-auto 2xl:max-w-5xl lg:max-w-4xl md:max-w-3xl max-w-xl lg:px-0 px-2 font-montserrat mt-12">
        <h3 class="sm:text-3xl text-2xl text-center" id="mobile-tyre-fitting">
            Having over 20 years of experience, <br> you can be confident that you'll receive top-notch service
        </h3>

        <div class="flex md:flex-row flex-col justify-between md:mt-24 mt-16">
            <div class="md:w-[48%] space-y-2 md:mb-0 mb-4">
                <h4 class="text-lg font-bold">Mobile Tyre Fitting</h4>
                <p>Get your tyres fitted at home, work or on the roadside. Why not save yourself the time and hassle of bringing your car to the garage, and use our Mobile Tyre Fitting service instead!</p>
                <p>Mobile Tyre Fitting is a safe and convenient way of getting your new tyres. We have many professionals on standby, so what are you waiting for? Call now!</p>
            </div>
            <img src="/images/mobile-tyre-fitting.jpg" class="md:w-[48%]" alt="Mobile Tyre Fitting">
        </div>

        <hr class="my-20" id="coverage">

        <h3 class="sm:text-3xl text-2xl text-center">
            We cover Oxford & Surrounding areas
        </h3>
        <p class="text-center mt-4">
            Oxford is a city that is always on the go, and we understand that time is of the essence for its residents.
            That's why our mobile tyre fitting service is designed to be quick, efficient, and convenient.
            We don't want you to wait for hours to have your tyres fitted or for breakdown services.
        </p>
        <p class="text-center mt-4">
            Our team of professional tyre fitters is well equipped to handle any tyre related issue you may have and will arrive at your location promptly.
            Whether you're at home, work, or on the side of the road, we'll be there to get you back on the road in no time.
        </p>

        <hr class="my-20" id="about">

        <h3 class="sm:text-3xl text-2xl text-center">
            Who we are & what we do
        </h3>
        <p class="text-center mt-4">
            Tyres Oxford is a leading provider of mobile tyre fitting services in and around the city of Oxford. With over 20 years of experience,
            our company has built a reputation for delivering top-quality tyre fitting services to customers in the local area.
        </p>
        <p class="text-center mt-4">
            Our team of experienced and professional tyre fitters are equipped with the latest tools and technology, ensuring that each job is completed to the highest standards.
            We understand the importance of time and convenience, which is why we offer our services at a time that is convenient for you and come to your location to fit your new tyres.
        </p>
        <p class="text-center mt-4">
            Whether you're at home, work, or on the side of the road, we'll be there to get you back on the road in no time.
            Choose Tyres Oxford for a fast, reliable, and affordable tyre fitting service.
        </p>

        <hr class="my-20">

        <h3 class="sm:text-3xl text-2xl text-center">
            Contact the team
        </h3>

        <ContactForm />
    </div>

    <Footer />
</template>

<script setup>
import Container from '../Shared/Container.vue'
import Header from '../Shared/Header.vue'
import Footer from '../Shared/Footer.vue'
import BrandLogoCarousel from '../Shared/BrandLogoCarousel.vue'
import ContactForm from '../Shared/ContactForm.vue'
import { Link, Head } from "@inertiajs/vue3"

</script>

<style scoped>

</style>
