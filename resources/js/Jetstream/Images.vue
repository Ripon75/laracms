<template>
    <img :src="imagepath" alt="image">
</template>
<style scoped>

</style>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: ['imagepath'],
    data: () => {
        return {
        }
    }
})
</script>
