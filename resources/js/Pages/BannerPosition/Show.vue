<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Banner Position Details
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <p>Name : {{bannerPosition.name}} </p>
                    <p>Display Name : {{bannerPosition.display_name}} </p>
                    <p>Status : {{bannerPosition.status}}</p>
                    <p>Description : {{bannerPosition.description}}</p>
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

    props: ["bannerPosition"],

}
</script>
