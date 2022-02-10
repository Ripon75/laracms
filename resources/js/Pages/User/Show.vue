<template>
    <app-layout title="Singe view">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Singe View
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- strat -->
                    <h2>{{user.name}}</h2>
                    <h2>{{user.email}}</h2>
                    <!-- end -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default {

        components: {
            AppLayout,
        },

        props: ["user"],

    }
</script>
