<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Page
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

                     <a-form layout="vertical">

                         <a-form-item label="Title" required>
                             <a-input v-model:value="form.title" />
                             <div class="text-red-400 text-sm" v-if="form.errors.title">{{ form.errors.title }}</div>
                         </a-form-item>

                         <a-form-item label="Slug" required>
                             <a-input v-model:value="form.slug" />
                             <div class="text-red-400 text-sm" v-if="form.errors.slug">{{ form.errors.slug }}</div>
                         </a-form-item>

                         <a-form-item label="Content" required>
                             <a-textarea v-model:value="form.content"/>
                             <div class="text-red-400 text-sm" v-if="form.errors.content">{{ form.errors.content }}</div>
                         </a-form-item>

                         <a-form-item label="Short Content" required>
                             <a-textarea v-model:value="form.short_content"/>
                             <div class="text-red-400 text-sm" v-if="form.errors.short_content">{{ form.errors.short_content }}</div>
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

    props: ["page"],

    data() {
        return {
            form: this.$inertia.form({
                _method: 'PUT',
                title: this.page.title,
                slug: this.page.slug,
                content: this.page.content,
                short_content: this.page.short_content,
            })
        }
    },

    methods: {

        onUpdate() {
            const routeURL = route('pages.update', this.page.id);
            this.form.put(routeURL);
        }
    }
}
</script>
