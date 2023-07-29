<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    clients: Array,
    users: Array
})

const clientCount = computed(() => props.clients ? props.clients.length : 0);
const userCount = computed(() => props.users ? props.users.length : 0);

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-right text-gray-900 leading-tight mb-10" style="font-size: 30px;">Dashboard</h2>
                <div class="overflow-hidden shadow-2xl sm:rounded-lg text-white" style="font-size: 40px;">
                    <h1 class="p-5"><b>Newborn Babies</b></h1>
                    <div class="flex flex-wrap ">
                        <img class="p-3 shadow-2xl" width="304" src="https://i.pinimg.com/550x/a7/2a/a4/a72aa41f717f4025195a486d89685d2b.jpg" alt="">
                        <img class="p-3 shadow-2xl" width="304" src="https://images.squarespace-cdn.com/content/v1/52eeeae9e4b04af4cf9542bb/1663706803595-QWZ3JBK5B4QN2RGIROML/intown-atlanta-grant-park-kirkwood-decatur-tucker-dunwoody-first-birthday-milestone-cake-smash-photos-family-baby-boy_0653.jpg" alt="">
                        <img class="p-3 shadow-2xl" width="304" src="https://images.unsplash.com/photo-1617331140180-e8262094733a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFieSUyMGZhY2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="">
                        <img class="p-3 shadow-2xl" width="304" src="https://i0.wp.com/www.myplotofsunshine.com/wp-content/uploads/2018/11/open-letter-to-my-baby-boy.jpg?resize=1080%2C1440&ssl=1" alt="">
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
