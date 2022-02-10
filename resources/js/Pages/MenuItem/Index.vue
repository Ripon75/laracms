<template>
    <app-layout title="Dashboard">
        <template #header>
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Menu Item
                <a-button class="float-right" type="primary" @click="onCreate()">Create Menu Item</a-button>
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
                                                    Label
                                                </th>

                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Menu
                                                </th>

                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Link
                                                </th>

                                                <th scope="col"
                                                    class="px-10 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Action
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">

                                            <tr v-for="menuItem in menuitems.data" :key="menuItem.id">

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{menuItem.id}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{menuItem.label}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{menuItem.menu.display_name}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{menuItem.link}}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <a @click="onEdit(menuItem.id)" class="mr-2">Edit</a>
                                                        <a @click="onShow(menuItem.id)" class="mr-2 text-yellow-500">Show</a>
                                                        <a @click="onDelete(menuItem.id)" class="mr-2 text-red-600">Delete</a>
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

    props: ["menuitems"],

    methods: {

        onCreate(){
            const routeURL = route('items.create');
            this.$inertia.visit(routeURL);
        },

        onEdit(id){
            const routeURL = route('items.edit', id);
            this.$inertia.visit(routeURL);
        },

        onShow(id){
            const routeURL = route('items.show', id);
            this.$inertia.visit(routeURL);
        },

        onDelete(id){
            const routeURL = route('items.destroy', id);
            this.$inertia.visit(routeURL, {
                method: 'POST',
                data: {
                    _method: 'DELETE',
                    id: id
                }
            });
        }
    }

}
</script>
