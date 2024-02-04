<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps(['cards'])

console.log(props.cards);
</script>

<template>
    <Head title="Welcome" />

    <AppLayout>
        <div class="min-h-screen bg-gradient-to-b from-gray-900 to-black">
            Cards
        </div>
    </AppLayout>
</template>

