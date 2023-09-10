<template layout="default">
    <div
        class="container mx-auto bg-gray-200 flex flex-col items-center justify-center p-8 w-[700px]"
        style="border-radius: 50px"
    >
        <div class="flex items-center">
            <div class="logo h-20 w-20 mr-5">
                <img src="/images/logo.png" alt="Logo" class="rounded-full" />
            </div>
            <div class="text-center">
                <p
                    class="text-white text-4xl"
                    style="
                        color: black;
                        -webkit-text-stroke: 2px rgb(255, 255, 255);
                    "
                >
                    <strong
                        style="
                            font-family: 'Courier New', monospace;
                            font-size: 60px;
                            font-weight: 900;
                        "
                        >MDC SHS-GIS</strong
                    >
                </p>
            </div>
        </div>

        <p class="text-black text-2xl" style="font-family: serif">
            <strong>Guidance Information System</strong>
        </p>
        <div class="w-[400px] bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-white text-center text-xl font-bold"><u>Registration</u></p>
            <div>
                <br />
                <form @submit.prevent="submit">
                    <div class="mb-4 relative">
                        <label
                            for="fullName"
                            class="block text-white font-bold mb-2"
                            >Full Name</label
                        >
                        <div class="flex items-center">
                            <input
                                v-model="form.fullName"
                                type="text"
                                id="fullName"
                                placeholder="Full Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                            />
                            <i
                                class="fas fa-user text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"
                            ></i>
                        </div>
                        <div
                            class="text-sm text-red-500 italic"
                            v-if="form.errors.fullName"
                        >
                            {{ form.errors.fullName }}
                        </div>
                    </div>

                    <div class="mb-4 relative">
                        <label
                            for="username"
                            class="block text-white font-bold mb-2"
                            >Username</label
                        >
                        <div class="flex items-center">
                            <input
                                v-model="form.username"
                                type="text"
                                id="username"
                                placeholder="Username"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                            />
                            <i
                                class="fas fa-user text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"
                            ></i>
                        </div>
                        <div
                            class="text-sm text-red-500 italic"
                            v-if="form.errors.username"
                        >
                            {{ form.errors.username }}
                        </div>
                    </div>

                    <div class="mb-4 relative">
                        <label
                            for="email"
                            class="block text-white font-bold mb-2"
                            >Email</label
                        >
                        <div class="flex items-center">
                            <input
                                v-model="form.email"
                                type="text"
                                id="email"
                                placeholder="Email"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                            />
                            <i
                                class="fas fa-envelope text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"
                            ></i>
                        </div>
                        <div
                            class="text-sm text-red-500 italic"
                            v-if="form.errors.email"
                        >
                            {{ form.errors.email }}
                        </div>
                    </div>

                    <div class="mb-6 relative">
                        <label
                            for="password"
                            class="block text-white font-bold mb-2"
                            >Password</label
                        >
                        <div class="flex items-center">
                            <input
                                type="password"
                                id="password"
                                v-model="form.password"
                                placeholder="Password"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                            />
                            <i
                                class="fas fa-lock text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"
                            ></i>
                        </div>
                        <div
                            class="text-sm text-red-500 italic"
                            v-if="form.errors.password"
                        >
                            {{ form.errors.password }}
                        </div>
                    </div>

                    <div class="mb-6 relative">
                        <label
                            for="confirmPassword"
                            class="block text-white font-bold mb-2"
                            >Confirm Password</label
                        >
                        <div class="flex items-center">
                            <input
                                type="password"
                                id="confirmPassword"
                                v-model="form.confirmPassword"
                                placeholder="Confirm Password"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                            />
                            <i
                                class="fas fa-lock text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"
                            ></i>
                        </div>
                        <div
                            class="text-sm text-red-500 italic"
                            v-if="form.errors.confirmPassword"
                        >
                            {{ form.errors.confirmPassword }}
                        </div>
                    </div>

                    <div class="flex justify-center items-center">
                        <div class="items-center" style="margin-left: -25px">
                            <div>
                                <span
                                    class="text-white"
                                    style="font-size: 13px"
                                >
                                    <input type="checkbox" class="mr-1" />
                                    I agree to the terms
                                    <a href="#" class="text-blue-400">terms</a>
                                </span>
                                <br />
                            </div>
                            <Link
                                href="/login"
                                class="text-blue-600"
                                style="font-size: 14px"
                                >I already have a membership</Link
                            ><br />
                        </div>
                        <button
                            class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-3 px-5 focus:outline-none focus:shadow-outline"
                            type="submit"
                            style="
                                border-radius: 20px;
                                margin-top: -20px;
                                margin-left: 80px;
                            "
                        >
                            Register
                        </button>
                    </div>

                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.authentication"
                    >
                        {{ form.errors.authentication }}
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";

let form = useForm({
    fullName: "",
    email: "",
    username: "",
    password: "",
    confirmPassword: "",
});

const submit = () => {
    form.post("/register");
};
</script>
