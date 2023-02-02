<template>
    <div class="bg-white shadow-xl px-6 py-4 rounded-lg md:w-[650px] w-full mx-auto my-10" id="contact">
        <template v-if="$page.props.success">
            <div class="flex items-center justify-start space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" height="24" width="24" class="fill-green-600">
                    <path d="M103.99951,190.00012a5.98047,5.98047,0,0,1-4.24219-1.75732l-56-55.99561a5.99971,5.99971,0,1,1,8.48438-8.48535l51.75781,51.75342L211.75732,67.76184a5.99971,5.99971,0,1,1,8.48438,8.48535l-112,111.99561A5.98045,5.98045,0,0,1,103.99951,190.00012Z"></path>
                </svg>
                <p class="text-center text-sm">Your message has been successfully sent. Hang tight for a reply!</p>
            </div>
        </template>
        <template v-else>
            <p class="text-sm text-gray-400 mb-4">Note: All fields are required</p>
            <div class="mb-4 flex items-start justify-between">
                <div class="w-[48%]">
                    <label class="block font-medium sm:text-sm text-xs text-gray-700" for="fname">
                        First Name
                    </label>

                    <input
                        class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-25 w-full block mt-1"
                        id="fname"
                        v-model="form.first_name"
                        autocomplete="given-name"
                        type="text"
                    >
                    <span class="text-xs text-red-500" v-if="$page.props.errors.first_name" v-text="$page.props.errors.first_name"></span>
                </div>
                <div class="w-[48%]">
                    <label class="block font-medium sm:text-sm text-xs text-gray-700" for="lname">
                        Last Name
                    </label>

                    <input
                        class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-25 w-full block mt-1"
                        id="lname"
                        v-model="form.last_name"
                        autocomplete="family-name"
                        type="text"
                    >
                    <span class="text-xs text-red-500" v-if="$page.props.errors.last_name" v-text="$page.props.errors.last_name"></span>
                </div>
            </div>
            <div class="mb-4">
                <label class="block font-medium sm:text-sm text-xs text-gray-700" for="email">
                    E-mail Address
                </label>

                <input
                    class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-25 w-full block mt-1"
                    id="email"
                    v-model="form.email"
                    autocomplete="email"
                    type="email"
                >
                <span class="text-xs text-red-500" v-if="$page.props.errors.first_name" v-text="$page.props.errors.email"></span>
            </div>
            <div class="mb-4">
                <label class="block font-medium sm:text-sm text-xs text-gray-700" for="phone">
                    Phone Number
                </label>

                <input
                    class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-25 w-full block mt-1"
                    name="phone"
                    id="phone"
                    v-model="form.phone"
                    type="text"
                >
                <span class="text-xs text-red-500" v-if="$page.props.errors.first_name" v-text="$page.props.errors.phone"></span>
            </div>
            <div class="mb-4">
                <label class="block font-medium sm:text-sm text-xs text-gray-700" for="comments">
                    Comments
                </label>

                <textarea
                    id="comments"
                    v-model="form.comments"
                    class="w-full py-2 px-3 block mt-1 min-h-[6rem] rounded shadow-sm outline-0 border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-25"
                ></textarea>
                <span class="text-xs text-red-500" v-if="$page.props.errors.first_name" v-text="$page.props.errors.comments"></span>
            </div>

            <div class="flex items-center justify-end">
                <button @click="submit()" class="w-full py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    SEND INQUIRY
                </button>
            </div>
        </template>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3"

const form = useForm({
    first_name: null,
    last_name: null,
    email: null,
    phone: null,
    comments: null,
})

function submit() {
    form.post('/contact', {
        preserveScroll: true,
    })
}

</script>

<style scoped>

</style>
