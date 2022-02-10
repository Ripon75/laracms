<template>
    <app-layout title="User Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Role
            </h2>
        </template>

        <a-form layout="vertical">
            <div class="py-12">
                <div class="max-w-7xl w-2/3 mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 flex flex-row">
                        <div class="flex-1">
                            <a-form-item label="Name" required>
                                <a-input v-model:value="form.name"/>
                                <div class="text-red-400 text-sm" v-if="form.errors.name">{{ form.errors.name }}</div>
                            </a-form-item>

                            <a-form-item label="Display Name" required>
                                <a-input v-model:value="form.display_name"/>
                                <div class="text-red-400 text-sm" v-if="form.errors.display_name">{{ form.errors.display_name }}</div>
                            </a-form-item>

                            <a-form-item label="Description">
                                <a-input v-model:value="form.description"/>
                            </a-form-item>

                            <a-form-item>
                                <a-button type="primary" @click="onStore()">Create</a-button>
                            </a-form-item>
                        </div>
                        <!--start checkbox -->
                        <div class="flex-1 py-8 px-10">
                            <a-row v-for="permission in permissions" :key="permission.id">
                                <a-col>
                                    <input  type="checkbox" :id="permission.id" :value="permission.id" v-model="form.permission_ids" />
                                    <label class="px-2" :for="permission.id">{{ permission.display_name }}</label>
                                </a-col>
                            </a-row>
                        </div>
                        <!-- end checkbox -->
                    </div>
                </div>
            </div>
        </a-form>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        AppLayout,
    },
    props: ["permissions"],
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                display_name: '',
                description: '',
                permission_ids: []
            })
        }
    },
     methods: {
        onStore() {
            // console.log('click');
            const routeURL = route('roles.store');
            this.form.post(routeURL, {
                preserveScroll: true,
            });
        }
    },

}
</script>
