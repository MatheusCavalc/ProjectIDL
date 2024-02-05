<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps(['best', 'bests', 'cards'])

console.log(props.cards);
</script>

<template>
    <Head title="Cards" />

    <AppLayout>
        <div class="min-h-screen px-24 py-16 bg-gradient-to-b from-gray-900 to-black">
            <div class="flex justify-between">
                <div class="flex gap-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                    </svg>

                    <p class="text-3xl font-bold">Cards</p>
                </div>

                <div>

                </div>
            </div>

            <p class="text-white mt-8">Best of Weekend</p>

            <div class="w-full flex gap-8 mt-2">
                <div class="w-3/5">
                    <div>
                        <div
                            class="relative w-full h-80 bg-cover rounded-t-lg" :style="{ backgroundImage: `url('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/${best.played_champion_1}_0.jpg')` }">
                            <img :src="`/storage/${best.image}`" class="absolute bottom-0 left-6 h-48" alt="">

                            <div class="absolute bottom-36 left-8">
                                <p class="text-3xl font-bold text-white">{{ best.max_rating }}</p>
                            </div>

                            <div class="absolute bottom-4 right-4">
                                <p class="text-xl font-bold text-white">{{ best.played_champion_1 }}</p>
                                <p class="text-xl font-bold text-white">{{ best.record_with_champion_1 }}</p>
                            </div>
                        </div>

                        <div
                            class="p-4 bg-transparent rounded-b-lg text-white border-b border-b-indigo-700 flex justify-between">
                            <p>{{ best.name }}</p>

                            <p>{{ best.position }}</p>
                        </div>
                    </div>

                </div>

                <div class="w-2/5">
                    <div class="grid grid-cols-2 gap-6">
                        <div v-for="(card, index) in bests" :key="card.id">
                            <div :class="{ 'bg-gradient-to-b from-yellow-800 to-yellow-500': card.max_rating > '89', 'bg-gradient-to-b from-indigo-800 to-indigo-500': card.max_rating > '79', 'bg-gradient-to-b from-green-800 to-green-500': card.max_rating < '79' }"
                                class="w-full h-32 flex justify-center rounded-t-lg relative">
                                <img :src="`/storage/${card.image}`" class="h-32" alt="">

                                <div class="absolute top-2 left-3">
                                    <p class="text-white text-xl font-bold">{{ card.max_rating }}</p>
                                </div>
                            </div>

                            <div
                                class="p-3 bg-transparent rounded-b-lg text-white border-b border-b-indigo-700 flex justify-between">
                                <p>{{ card.name }}</p>
                                <p>{{ card.position }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

