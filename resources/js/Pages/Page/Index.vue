<template>
    <app-layout title="Dashboard">
        <template #header>
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Page
                <a-button class="float-right" type="primary" @click="onCreate()">Create Page</a-button>
              </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- start -->
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID
                                                </th>

                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Title
                                                </th>

                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Slug
                                                </th>

                                                <th scope="col"
                                                    class="px-10 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Action
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">

                                            <tr v-for="page in allPage.data" :key="page.id">

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{page.id}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{page.title}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{page.slug}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <a @click="onEdit(page.id)" class="mr-2">Edit</a>
                                                        <a @click="onShow(page.id)" class="mr-2 text-yellow-500">Show</a>
                                                        <a @click="onDelete(page.id)" class="mr-2 text-red-600">Delete</a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <!--More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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

    props: ["allPage"],

    methods: {

        onCreate() {
            const routeURL = route('pages.create');
            this.$inertia.visit(routeURL);
        },

        onEdit(id) {
            const routeURL = route('pages.edit', id);
            this.$inertia.visit(routeURL);
        },

        onShow(id) {
            const routeURL = route('pages.show', id);
            this.$inertia.visit(routeURL);
        },

       onDelete(id) {
            const routeURL = route('pages.destroy', id);
            this.$inertia.visit(routeURL, {
                method: 'POST',
                data: {
                    _method: 'DELETE',
                    id: id
                }
            });
        },
    },

}
</script>
