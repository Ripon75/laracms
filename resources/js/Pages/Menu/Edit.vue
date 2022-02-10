<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Menu
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

                     <a-form layout="vertical">

                         <a-form-item label="Name" required>
                             <a-input v-model:value="form.name" />
                             <div class="text-red-400 text-sm" v-if="form.errors.name">{{ form.errors.name }}</div>
                         </a-form-item>

                         <a-form-item label="Display Name" required>
                             <a-input v-model:value="form.display_name" />
                             <div class="text-red-400 text-sm" v-if="form.errors.display_name">{{ form.errors.display_name }}</div>
                         </a-form-item>

                         <a-form-item label="Status" required>

                             <a-select v-model:value="form.status">
                                <a-select-option value="active">Active</a-select-option>
                                <a-select-option value="inactive">Inactive</a-select-option>
                            </a-select>

                         </a-form-item>

                         <a-form-item label="Description" required>
                             <a-input v-model:value="form.description"/>
                         </a-form-item>

                         <a-form-item>
                             <a-button type="primary" @click="onUpdate()">Update</a-button>
                         </a-form-item>

                     </a-form>
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

    props: ["menu"],

    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                name: this.menu.name,
                display_name: this.menu.display_name,
                status: this.menu.status,
                description: this.menu.description
            })
        }
    },

    methods: {

        onUpdate() {
            const routeURL = route('menus.update', this.menu.id);
            this.form.put(routeURL);
        }

    }
}
</script>
