<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})


var wordList = ["Attention Library Patrons!", "Alert: Book Return Reminder", "Important Notice: Book Returns", "Urgent Book Return Request", "Reminder: Return Your Books"];

const generateWord = () => {
  // Get a random word from the wordList
  const randomIndex = Math.floor(Math.random() * wordList.length);
  const generatedWord = wordList[randomIndex];

  // Assign the generated word to the input field
  form.subject = generatedWord;
};
// console.log(props.message)
</script>

<template>


    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-right text-gray-900 leading-tight mb-10" style="font-size: 30px;">Send Message To All Babies</h2>
                <form @submit.prevent="submit">
                <div class="bg-slate-800 text-white p-5 shadow-2xl rounded-3xl">
                    <div style="display: grid; place-content: center;">
                        <div class="">
                            <label for="subject" class="text-4xl"><b>Alert Message:</b> &nbsp;&nbsp;</label> <br> <br>
                            <input v-model="form.subject" type="text" id="subject" class="text-black" style="width: 1000px;"> <br> <br> <br> <br> <br>
                            <label for="message" class="text-4xl"><b>Content Message:</b> </label>
                            <textarea style="background-color: transparent; " v-model="form.message" type="text" id="message" class="px-2 py-1 h-[120px] w-full rounded-md text-white"></textarea> <br> <br> <br> <br>
                            <button style="font-size: 20px;" type="submit" class="text-white px-4 py-1.5 rounded-md bg-slate-500">Deliver Message</button>

                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
