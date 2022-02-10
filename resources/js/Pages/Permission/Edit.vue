<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Permission
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl w-96 mx-auto sm:px-6 lg:px-8">
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

                         <a-form-item label="Description" required>
                             <a-input v-model:value="form.description" />
                             <div class="text-red-400 text-sm" v-if="form.errors.description">{{ form.errors.description }}</div>
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

    props: ["permission"],

    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                name: this.permission.name,
                display_name: this.permission.display_name,
                description: this.permission.description,
            })
        }
    },
    methods: {
        onUpdate() {
            const routeURL = route('permissions.update', this.permission.id);
            this.form.put(routeURL);
        }
    }
}
</script>
