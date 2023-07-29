<template>

        <div @click="open(client)" class="bg-slate-300 p-3" style="display: grid; place-content: center;">
            <div style="display: grid; place-content: center;">
                <img :src="client.picUrl" alt="Product photo" class="rounded-xl w-[350px] h-[315px] border-4 bg-gray-300">

                <div class="p-5 rounded-xl flex" style="transform: translateY(-70px) translateX(-10px); margin-bottom: -100px;">
                    <label :for="'enabled' + '-' + client.id" class="switch">
                        <input type="checkbox" :id="'enabled' + '-' + client.id" :checked="client.enabled" @change.prevent="toggleEnabled(client)">
                        <span class="slider round"></span>
                    </label> <br>
                    <h1 style="font-size: 20px; margin-left: 15px;">
                        <b>{{ client.enabled ? 'Survived' : 'Dead' }}</b>
                    </h1>
                </div>
            </div>

        <div class="flex-wrap" style="font-size: 15px;">
            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Name: {{ client.name }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Email: {{ client.email }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Address: {{ client.address }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Phone: {{ client.phone }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Born Date: {{ client.born_date }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Doctor: {{ client.doctor }}
            </div>

            <div class="bg-slate-900 shadow-2xl rounded-xl p-3 mb-1">
                Hospital: {{ client.hospital }}
            </div>

        </div>
        </div>
</template>
<style scoped>
    .switch {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    /* The slider */
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #6a6a6a;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 5px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #20c747;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #1ac233;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26spx);
    -ms-transform: translateX(26px);
    transform: translateX(64px);
    }


    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
</style>

<script setup>
import { router } from '@inertiajs/vue3';


const props = defineProps({
    client: Object
})

function open(client) {
    router.visit('/clients/' + client.id)
}


function toggleEnabled(client) {
    router.visit('/clients/toggle/' + client.id,{
        method: 'post',
        preserveScroll: true
    })
}

</script>
