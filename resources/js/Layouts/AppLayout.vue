<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const menu = ref(false)
</script>

<template>
    <nav class="fixed top-0 z-40 w-full border-b border-gray-200 bg-gradient-to-r from-black to-gray-950">
        <div class="flex flex-wrap justify-between px-2 py-4 mx-auto lg:p-4">

            <!--Logo and menu aside button-->
            <div class="flex lg:order-1">
                <div class="flex gap-2">
                    <button @click="menu = true" data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <p class="self-center text-lg font-semibold text-white whitespace-nowrap md:hidden">Ilha das Lendas</p>
                </div>

                <div class="hidden lg:block">
                    <Link href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://w7.pngwing.com/pngs/384/161/png-transparent-tom-clancy-s-rainbow-six-siege-tom-clancy-s-rainbow-six-vegas-2-tom-clancy-s-rainbow-6-patriots-tom-clancy-s-rainbow-six-3-raven-shield-rainbow-six-tom-clancy-s-rainbow-six.png"
                        class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Ilha das Lendas</span>
                    </Link>
                </div>
            </div>

            <!--Menu aside-->
            <div class="lg:hidden">
                <aside id="logo-sidebar" :class="{ 'transform-none': menu, '-translate-x-full': !menu }"
                    class="fixed top-0 left-0 z-50 w-64 h-screen pt-5 transition-transform border-r border-gray-200 bg-gradient-to-b from-black to-gray-950 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
                    aria-label="Sidebar">
                    <div class="h-full pb-4 overflow-y-auto">
                        <div class="flex gap-2 px-3 pb-4 border-b">
                            <div>
                                <button @click="menu = false" class="text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div>
                                <Link href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6" alt="Flowbite Logo">
                                <span class="self-center text-lg font-semibold text-white whitespace-nowrap">Ilha das
                                    Lendas</span>
                                </Link>
                            </div>
                        </div>

                        <ul class="mt-4 space-y-2 font-medium">
                            <li>
                                <Link href="/"
                                    :class="{ 'bg-gray-800 text-lime-500': $page.url == '/', 'bg-transparent text-white': $page.url != '/' }"
                                    class="block p-2">
                                <button class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Home
                                </button>
                                </Link>
                            </li>
                            <li>
                                <Link href="/cards"
                                    :class="{ 'bg-gray-800 text-lime-500': $page.url == '/cards', 'bg-transparent text-white': $page.url != '/cards' }"
                                    class="block p-2">
                                <button class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                                    </svg>
                                    Cards
                                </button>
                                </Link>
                            </li>
                            <li>
                                <Link href="/"
                                    :class="{ 'bg-gray-800 text-lime-500': $page.url == '/call', 'bg-transparent text-white': $page.url != '/call' }"
                                    class="block p-2">
                                <button class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    Call
                                </button>
                                </Link>
                            </li>
                            <li>
                                <Link href="/"
                                    :class="{ 'bg-gray-800 text-lime-500': $page.url == '/make-legends', 'bg-transparent text-white': $page.url != '/make-legends' }"
                                    class="block p-2">
                                <button class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                    Make Legends
                                </button>
                                </Link>
                            </li>
                        </ul>
                    </div>
                </aside>
                <div v-show="menu" @click="menu = false"
                    class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 dark:bg-opacity-80"></div>
            </div>

            <!--Auth buttons-->
            <div class="flex justify-end mt-0.5 space-x-1 lg:hidden lg:order-3 md:space-x-0 rtl:space-x-reverse">
                <div v-if="$page.props.auth.user" class="hidden lg:block">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>

                <div v-if="$page.props.auth.user" class="hidden lg:block">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </button>
                </div>

                <Link v-else href="/login">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-600 hover:bg-lime-800">Get
                    started</button>
                </Link>
            </div>

            <!--Navbar items-->
            <div class="items-center justify-between hidden w-full lg:flex md:block lg:ml-5 md:w-auto lg:order-2"
                id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 mr-4 font-medium border border-gray-100 rounded-lg md:p-0 md:space-x-2 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <Link href="/"
                            :class="{ 'bg-gray-800 text-lime-500': $page.url == '/', 'bg-transparent text-white hover:text-lime-700': $page.url != '/' }"
                            class="block px-4 py-1 rounded-xl">
                        <button class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mt-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Home
                        </button>
                        </Link>
                    </li>
                    <li>
                        <Link href="/cards"
                            :class="{ 'bg-gray-800 text-lime-500': $page.url == '/cards', 'bg-transparent text-white hover:text-lime-700': $page.url != '/cards' }"
                            class="block px-4 py-1 rounded-xl">
                        <button class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mt-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                            </svg>
                            Cards
                        </button>
                        </Link>
                    </li>
                    <li>
                        <Link href="/"
                            :class="{ 'bg-gray-800 text-lime-500': $page.url == '/call', 'bg-transparent text-white hover:text-lime-700': $page.url != '/call' }"
                            class="block px-4 py-1 rounded-xl">
                        <button class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mt-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            Call
                        </button>
                        </Link>
                    </li>
                    <li>
                        <Link href="/"
                            :class="{ 'bg-gray-800 text-lime-500': $page.url == '/make-legends', 'bg-transparent text-white hover:text-lime-700': $page.url != '/make-legends' }"
                            class="block px-4 py-1 rounded-xl">
                        <button class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mt-0.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                            Make Legends
                        </button>
                        </Link>
                    </li>

                    <li class="block px-2 py-1 text-white">
                        |
                    </li>
                </ul>

                <div class="flex justify-end space-x-1 lg:order-3 md:space-x-0 rtl:space-x-reverse">
                    <div v-if="$page.props.auth.user" class="hidden lg:block">
                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>

                    <div v-if="$page.props.auth.user" class="hidden lg:block">
                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </button>
                    </div>

                    <Link v-else href="/login">
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-600 hover:bg-lime-800">Get
                        started</button>
                    </Link>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-16">
        <slot />
    </div>
</template>
