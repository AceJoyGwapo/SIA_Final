<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    client: Object
})

const form = useForm({
    name: props.client.name,
    email: props.client.email,
    address: props.client.address,
    phone: props.client.phone,
    born_date: props.client.born_date,
    doctor: props.client.doctor,
    hospital: props.client.hospital,



})

function submit() {

    if (form.price === '') {
        // If the price is empty, call the updatePrice function to calculate and set it
        updatePrice();
    }

    // Now, the form.price value should be updated with the calculated price

    form.patch('/clients/' + props.client.id)
}


</script>

<template>
    <Head title="Edit Client" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-right text-gray-900 leading-tight mb-10" style="font-size: 30px;">Edit</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div style="font-size: 20px; display: grid; place-content: center;">
                        <form @submit.prevent="submit" class="flex bg-slate-800 p-10" style="width: 600px;">
                            <div>
                                <h4 class="text-xl mb-4"><b>Baby Information</b></h4>
                                <div class="form-field text-black">
                                    <label for="name">Name</label>
                                    <input required type="text" id="name" v-model="form.name" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="email">Email</label>
                                    <input required type="email" id="email" v-model="form.email" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="address">Address</label>
                                    <input required type="text" id="address" v-model="form.address" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="phone">Phone Number</label>
                                    <input required type="text" id="phone" v-model="form.phone" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="doctor">Doctor</label>
                                    <input required type="text" id="doctor" v-model="form.doctor" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="hospital">Hospital</label>
                                    <input required type="text" id="hospital" v-model="form.hospital" class="border-0 text-black" style="border-bottom: 0px solid white;">
                                </div>

                                <button class="float-right mt-2 bg-slate-500 text-white rounded-2xl p-5 hover:bg-slate-50 hover:text-black duration-200" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
