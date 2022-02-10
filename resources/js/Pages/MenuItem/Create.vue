<template>
    <app-layout title="User Create">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Menu Item
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <a-form layout="vertical">

                        <a-form-item label="Label" required>
                            <a-input v-model:value="form.label"/>
                            <div class="text-red-400 text-sm" v-if="form.errors.label">{{ form.errors.label }}</div>
                        </a-form-item>

                        <a-form-item label="Menu" required>
                            <a-select v-model:value="form.menu_id">
                                <a-select-option  v-for="menu in menus" :key="menu.id" :value="menu.id">{{menu.display_name}}</a-select-option>
                            </a-select>
                        </a-form-item>

                         <a-form-item label="Link" required>
                             <a-input v-model:value="form.link"/>
                              <div class="text-red-400 text-sm" v-if="form.errors.link">{{ form.errors.link }}</div>
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

    props: ['menus'],
    data(){
        return {
            form: this.$inertia.form({
                label: '',
                link: '',
                menu_id: 1
            })
        }
    },

    methods: {

        onStore(){
            const routeURL = route('items.store');
            this.form.post(routeURL);
        }
    }


}
</script>
