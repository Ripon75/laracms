<template>
    <app-layout title="User Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create User
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl w-96 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <a-form layout="vertical">

                        <a-form-item label="Name" required>
                            <a-input v-model:value="form.name"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.name">{{ form.errors.name }}</div>
                        </a-form-item>

                        <a-form-item label="Email" required>
                            <a-input v-model:value="form.email"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.email">{{ form.errors.email }}</div>
                        </a-form-item>

                        <a-form-item label="Role" required>
                            <a-select v-model:value="form.roleId">
                                <a-select-option  v-for="role in roles" :key="role.id" :value="role.id">{{role.display_name}}</a-select-option>
                            </a-select>
                        </a-form-item>

                         <a-form-item label="Password" required>
                             <a-input v-model:value="form.password"/>
                             <div class="text-red-400 text-sm" v-if="form.errors.password">{{ form.errors.password }}</div>
                         </a-form-item>

                         <a-form-item label="Confirm Password" required>
                             <a-input v-model:value="form.confirm_password"/>
                             <div class="text-red-400 text-sm" v-if="form.errors.confirm_password">{{ form.errors.confirm_password }}</div>
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

    props: ["roles"],

    data() {
        return {
            form: this.$inertia.form({
                name: '',
                email: '',
                roleId: 1,
                password: '',
                confirm_password: '',
            })
        }
    },

     methods: {
        onStore() {
            const routeURL = route('users.store');
            this.form.post(routeURL, {
                preserveScroll: true,
            });
        }
    }

}
</script>
