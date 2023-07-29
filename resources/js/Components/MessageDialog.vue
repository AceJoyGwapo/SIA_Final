<template>
    <div style="display: grid; place-content: center;">
        <div style="width: 1275px;">
        <div class="text-red-400 p-4 mx-8 mt-4 text-center" v-if="messages.err" style="margin-bottom: -30px; font-size: 40px;">
            <div class="flex-1">
                {{ messages.err }}
            </div>

        </div>
        <div class="text-white p-4 mx-8 mt-4 text-center" v-if="messages.info" style="margin-bottom: -30px; font-size: 40px;">
            {{ messages.info }}
        </div>
    </div>
    </div>

</template>

<script setup>

const props = defineProps({
    messages: Object
})

</script>
