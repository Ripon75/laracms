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

                         <a-form-item label="Label" required>
                             <a-input v-model:value="form.label" />
                             <div class="text-red-400 text-sm" v-if="form.errors.label">{{ form.errors.label }}</div>
                         </a-form-item>

                         <a-form-item label="Menu" required>
                             <a-select v-model:value="form.menu_id">
                                 <a-select-option
                                   v-for="menu in menus"
                                   :key="menu.id"
                                   :value="menu.id">
                                   {{menu.display_name}}
                                 </a-select-option>
                             </a-select>
                         </a-form-item>

                         <a-form-item label="Link">
                             <a-input v-model:value="form.link"/>
                             <div class="text-red-400 text-sm" v-if="form.errors.link">{{ form.errors.link }}</div>
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

    props: ["menuItem", "menus"],

    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                label: this.menuItem.label,
                menu_id: this.menuItem.menu_id,
                link: this.menuItem.link,
            })
        }
    },

    methods: {

        onUpdate(){
            const routeURL = route('items.update', this.menuItem.id);
            this.form.put(routeURL);
        }
    }
}
</script>
