<template>
    <br /><br />
    <section
        class="shadow rounded-lg bg-gray-900"
        style="
            width: 80%;
            margin-left: 10%;
            background-color: rgba(0, 0, 0, 0.664);
        "
    >
        <div class="wrapper opacity-100 flex">
            <div id="brand" class="py-1">
                <img
                    src="/images/logo.png"
                    alt="mdc logo"
                    class="h-20 w-auto rounded-full ml-5"
                />
            </div>
            <nav class="main-nav mt-2 py-2 ml-10">
                <Link class="main-link ml-20" href="/">Home</Link>
                <Link class="main-link" href="/services">Services</Link>
                <Link class="main-link" href="/feedback">Feedback</Link>
                <Link class="main-link" href="/about-us">About Us</Link>
                <Link class="main-link" href="/contact-us">Contact Us</Link>
            </nav>
            <div class="flex main-nav mt-2 p-2 ml-auto">
                <Link v-if="!user" class="main-link" href="/login">Log In</Link>
                <Link v-if="!user" class="main-link" href="/register"
                    >Register</Link
                >
                <Link
                    v-if="user"
                    class="py-4 text-white font-semibold hover:bg-gray-500 px-2"
                    href="/logout"
                    method="post"
                    as="button"
                    >Log Out</Link
                >
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";

defineProps({
    user: "",
});
</script>
