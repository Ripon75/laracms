<template>
    <Link :href="'/'">
        <Images class="w-12 h-12" imagepath="../images/pulsetech.png"/>
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import Images from '@/Jetstream/Images.vue'

    export default {
        components: {
            Link,
            Images
        },
    }
</script>
