<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-right text-gray-900 leading-tight mb-10" style="font-size: 30px;">{{ client.name }}</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
                        <div class="bg-slate-800 flex rounded-2xl">
                            <img :src="client.picUrl" alt="Product photo" class="rounded-xl w-[350px] h-[315px] border-4 bg-gray-300">
                            <div class="p-5" style="font-size: 20px;">
                                <div>
                                    Name: {{ client.name }}
                                </div>
                                <div>
                                    Email: {{ client.email }}
                                </div>
                                <div>
                                    Address: {{ client.address }}
                                </div>
                                <div>
                                    Phone: {{ client.phone }}
                                </div>
                                <div>
                                    Born Date: {{ client.born_date }}
                                </div>
                                <div>
                                    Doctor: {{ client.doctor }}
                                </div>
                                <div>
                                    Hospital: {{ client.hospital }}
                                </div>
                            </div>

                            <div style="font-size: 25px;" class="mt-5">
                                <div class="text-center bg-red-500 p-2 rounded-lg w-40 mb-5">
                                    <Link :href="'/clients/' + client.id" method="delete" as="button">Delete</Link>
                                </div>
                                <div class="text-center bg-green-500 p-2 rounded-lg w-40 mb-5">
                                    <a :href="'/clients/edit/' + client.id" as="button">Edit</a>
                                </div >
                                <div class="text-center bg-slate-500 p-2 rounded-lg w-40 mb-5">
                                    <a :href="'/clients/email/' + client.id"  as="button">Send Email</a>
                                </div>
                                <div class="text-center bg-slate-500 p-2 rounded-lg w-40 mb-5">
                                    <a :href="'/clients/pdf/' + client.id" as="button" target="_blank">PDF</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.auth.user)

const props = defineProps({
    'client': Object
})
</script>
