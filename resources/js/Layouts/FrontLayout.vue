<template>
    <AppHeader></AppHeader>
    <div class="pt-16 sm:pt-16 md:pt-20 lg:pt-24 xl:pt-24 2xl:pt-24">
        <slot></slot>
    </div>
    <AppFooter></AppFooter>
</template>

<script>
    import AppHeader from "./Components/AppLayout/Header.vue"
    import AppFooter from "./Components/AppLayout/Footer.vue"

    export default {
        components: {
            AppHeader,
            AppFooter
        }
    }
</script>
