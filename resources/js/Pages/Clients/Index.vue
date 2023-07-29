<template>

    <Head title="Clients" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-right text-gray-900 leading-tight mb-10" style="font-size: 30px;">New Born List</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
                        <div>
                            <input type="text" @keydown.enter="search($event)" name="" id="" class="mb-10 text-black" style="width: 1000px;" placeholder="Search Baby   Example: Baby ko si kulot">
                            <Link href="/clients/create" class="bg-slate-700 p-3 shadow-lg mt-2 text-dark rounded-xlp-5 float-right" style="font-size: 20px;">Add</Link>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-[49%] mb-4" v-for="client in clients" :key="client.id">
                                <ClientCard :client="client" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    clients: Array
})

function search(e) {
    router.visit('/clients/search/' + e.target.value, {
        only: ['clients']
    })
}

const clientCount = computed(() => props.clients.length);

</script>

<style>
    .res_btn{
        background-color: green;
        color: white;
        border-radius: 20px;
        padding: 10px;

    }
</style>
