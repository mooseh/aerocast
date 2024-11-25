<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <App title="Dashboard">

    <div class="py-2 sm:py-2">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                <div v-for="stat in stats" :key="stat.id" class="flex flex-col bg-white/5 p-8">
                    <dt class="text-sm/6 font-semibold text-gray-300">{{ stat.name }}</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-white">{{ stat.value }}</dd>
                </div>
            </dl>
        </div>
    </div>

    </App>
</template>

<script>
export default {
    mounted() {
        Native.on("Native\\Laravel\\Events\\ProfileEvent", (payload, event) => {
            console.log(event)
        })
    },
    computed:{
        stats(){
            return [
                { id: 1, name: 'Creators on the platform', value: '8,000+' },
                { id: 2, name: 'Flat platform fee', value: '3%' },
                { id: 3, name: 'Uptime guarantee', value: '99.9%' },
                { id: 4, name: 'Paid out to creators', value: '$70M' },
            ]
        }
    }


}
</script>
