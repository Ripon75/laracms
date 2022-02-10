<template>
    <app-layout title="User Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Category
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <a-form layout="vertical">

                        <a-form-item label="Name" required>
                            <a-input v-model:value="form.name"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.name">{{ form.errors.name }}</div>
                        </a-form-item>

                        <a-form-item label="Display Name" required>
                            <a-input v-model:value="form.display_name"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.display_name">{{ form.errors.display_name }}</div>
                        </a-form-item>

                         <a-form-item label="Status" required>

                            <a-select v-model:value="form.status">
                                <a-select-option value="active">Active</a-select-option>
                                <a-select-option value="inactive">Inactive</a-select-option>
                            </a-select>

                         </a-form-item>

                         <a-form-item label="Description">
                             <a-input v-model:value="form.description"/>
                         </a-form-item>

                         <a-form-item>
                             <a-button type="primary" @click="onStore()">Create</a-button>
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

    data() {
        return {
            form: this.$inertia.form({
                name: '',
                display_name: '',
                status: 'active',
                description: '',
            })
        }
    },

     methods: {

        onStore() {
            const routeURL = route('categories.store');
            this.form.post(routeURL, {
                preserveScroll: true,
            });
        }
    }

}
</script>
