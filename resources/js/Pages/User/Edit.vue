<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit User
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

                         <a-form-item label="Email" required>
                             <a-input v-model:value="form.email" />
                             <div class="text-red-400 text-sm" v-if="form.errors.email">{{ form.errors.email }}</div>
                         </a-form-item>

                         <a-form-item label="Role" required>
                            <a-select v-model:value="form.roleId">
                                <a-select-option
                                    v-for="role in roles"
                                    :key="role.id"
                                    :value="role.id">{{role.display_name}}</a-select-option>
                            </a-select>
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

    props: ["user", "roles", "selectedRoleID"],

    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                name: this.user.name,
                email: this.user.email,
                roleId: this.selectedRoleID,
            })
        }
    },
    methods: {
        onUpdate() {
            const routeURL = route('users.update', this.user.id);
            console.log(this.form.roleId)
            this.form.put(routeURL);
        }
    }
}
</script>
