<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps(['best', 'bests', 'cards'])

console.log(props.cards);
</script>

<template>
    <Head title="Cards" />

    <AppLayout>
        <div class="min-h-screen px-4 py-12 lg:px-24 lg:py-16 bg-gradient-to-b from-gray-900 to-black">
            <div class="lg:flex lg:justify-between">
                <div class="flex gap-2 lg:gap-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 lg:w-9 lg:h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                    </svg>

                    <p class="text-xl lg:text-3xl font-bold">Cards</p>
                </div>

                <div class="gap-3 mt-1.5 flex">
                    <div class="flex">
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-l-full">League</p>
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-r-full">CBLOL</p>
                    </div>

                    <div class="flex">
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-l-full">Year</p>
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-r-full">2024</p>
                    </div>

                    <div class="flex">
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-l-full">Split</p>
                        <p class="px-2 h-6 pt-0.5 bg-lime-900 text-xs font-bold text-lime-500 border border-lime-700 rounded-r-full">First</p>
                    </div>
                </div>
            </div>

            <p class="text-white mt-6">Best of Weekend</p>

            <div class="w-full lg:flex lg:gap-8 mt-2">
                <div class="lg:w-3/5">
                    <div>
                        <div class="relative w-full h-48 lg:h-80 bg-cover rounded-t border-t border-t-red-700"
                            :style="{ backgroundImage: `url('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/${best.played_champion_1}_0.jpg')` }">
                            <img :src="`/storage/${best.image}`" class="absolute bottom-0 lg:left-6 h-32 lg:h-48" alt="">

                            <div class="absolute bottom-36 left-4 lg:left-8">
                                <p class="text-3xl font-bold text-white">{{ best.max_rating }}</p>
                            </div>

                            <div class="absolute bottom-2 right-2 lg:bottom-4 lg:right-4">
                                <p class="text-xl font-bold text-white">{{ best.played_champion_1 }}</p>
                                <p class="text-xl font-bold text-white">{{ best.record_with_champion_1 }}</p>
                            </div>
                        </div>

                        <div
                            class="p-4 bg-transparent rounded-b text-white border-b border-b-indigo-700 flex justify-between">
                            <p>{{ best.name }}</p>

                            <p>{{ best.position }}</p>
                        </div>
                    </div>

                </div>

                <div class="lg:w-2/5 mt-5 lg:mt-0">
                    <div class="grid grid-cols-2 gap-6">
                        <div v-for="(card, index) in bests" :key="card.id">
                            <div :class="{ 'bg-gradient-to-b from-yellow-800 to-yellow-500 border-t border-t-yellow-300': card.max_rating > '89', 'bg-gradient-to-b from-violet-800 to-violet-500 border-t border-t-violet-300': card.max_rating > '79', 'bg-gradient-to-b from-green-800 to-green-500 border-t border-t-green-300': card.max_rating < '79' }"
                                class="w-full h-24 lg:h-32 flex justify-center rounded-t relative">
                                <img :src="`/storage/${card.image}`" class="h-24 lg:h-32" alt="">

                                <div class="absolute top-2 left-3">
                                    <p class="text-white text-xl font-bold">{{ card.max_rating }}</p>
                                </div>
                            </div>

                            <div
                                class="p-3 bg-transparent rounded-b text-white border-b border-b-indigo-700 flex justify-between">
                                <p class="text-sm lg:text-base">{{ card.name }}</p>
                                <p class="text-sm lg:text-base">{{ card.position }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <div class="flex gap-3">
                    <div class="w-full">
                        <input type="text" id="small-input" placeholder="Search for Player, Team, Position"
                            class="block bg-black w-full py-2 text-gray-300 border border-gray-700 rounded text-sm">
                    </div>

                    <div class="text-black">
                        <button type="button"
                            class="bg-lime-500 hover:bg-lime-600 border border-lime-500 font-medium rounded text-sm px-3 py-2">
                            <p class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                                </svg>

                            <p>Filters</p>
                            </p>
                        </button>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="relative overflow-x-auto shadow-md sm:rounded border border-gray-700">
                        <table class="w-full text-sm text-left rtl:text-right text-white">
                            <thead class="text-xs text-white uppercase bg-gray-950">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Rating
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Player
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Team
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Position
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="card in cards" :key="card.id"
                                    class="bg-gray-950 border-b border-b-gray-700 text-white">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        <span
                                            :class="{ 'bg-yellow-500': card.rating > '89', 'bg-transparent': card.rating > '79', 'bg-green-500': card.rating < '79' }"
                                            class="text-white text-sm border font-medium me-2 px-2.5 py-0.5 rounded-xl">
                                            {{ card.rating }}
                                        </span>
                                    </th>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-4">
                                            <img :src="`/storage/${card.player.image}`" class="w-14 bg-indigo-600 rounded"
                                                alt="">
                                            <p class="mt-2.5">
                                                {{ card.player.name }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ card.player.team.name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ card.player.position }}
                                    </td>
                                    <td class="px-6 py-4 text-right text-lime-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

