<template>
    <app-layout title="User Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Banner
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <a-form layout="vertical">

                        <a-form-item label="Title" required>
                            <a-input v-model:value="form.title"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.title">{{ form.errors.title }}</div>
                        </a-form-item>

                        <a-form-item label="Caption" required>
                            <a-input v-model:value="form.caption"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.caption">{{ form.errors.caption }}</div>
                        </a-form-item>

                         <a-form-item label="Status" required>

                            <a-select v-model:value="form.status">
                                <a-select-option value="active">Active</a-select-option>
                                <a-select-option value="inactive">Inactive</a-select-option>
                            </a-select>

                         </a-form-item>

                         <a-form-item label="Banner Position" required>
                            <a-select v-model:value="form.banner_position_id">
                                <a-select-option  v-for="position in bannerPositions" :key="position.id" :value="position.id">{{position.display_name}}</a-select-option>
                            </a-select>
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

    props: ['bannerPositions'],

    data(){
        return {
            form: this.$inertia.form({
                title: '',
                caption: '',
                status: 'active',
                banner_position_id: 1
            })
        }
    },

    methods: {

         onStore() {
            const routeURL = route('banner.store');
            this.form.post(routeURL, {
                preserveScroll: true,
            });
        }
    }


}
</script>
