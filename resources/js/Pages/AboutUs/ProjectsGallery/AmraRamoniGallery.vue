<template>
    <FrontLayout>
        <main class="body">
            <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
                style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/romoni-cover.jpg')">
                <div class="relative flex text-center">
                    <h1 class="py-64 text-5xl font-bold text-center text-white ">Amra Ramoni</h1>
                </div>
            </section>
            <!-- AR sports academy projects gallery -->
            <section class="container mx-auto mt-14 mb-10">
                <h1 class="text-center text-4xl mb-10">Photo Gallery</h1>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-4">
                    <div
                        v-for="(src, index) in imgs"
                        :key="index"
                        class="pic"
                        @click="() => showImg(index)">
                        <div class="w-full h-full">
                            <img :src="src" class="object-cover object-center w-full h-48 sm:h-48 md:h-48 lg:h-52 xl:h-52 2xl:h-52"/>
                        </div>
                    </div>
                </div>

                <vue-easy-lightbox
                    :visible="visible"
                    :imgs="imgs"
                    :index="index"
                    @hide="handleHide"
                ></vue-easy-lightbox>
            </section>
        </main>
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'
    import Images from '@/Jetstream/Images.vue'
    import VueEasyLightbox from 'vue-easy-lightbox'

    export default {
        components: {
            FrontLayout,
            Images,
            VueEasyLightbox
        },
        data() {
            return {
                visible: false,
                index: 0,
                imgs: [
                    '../images/romoni-fundrising.jpeg',
                    '../images/romoni-cofounder.jpeg',
                    '../images/romoni-advocacy.jpeg',
                    '../images/romoni-education.jpeg',
                    '../images/romoni-marketing.jpeg',
                    '../images/romoni-operation.jpeg',
                    '../images/romoni0.jpg',
                    '../images/romoni1.jpg',
                    '../images/romoni2.jpg',
                    '../images/romoni3.jpg',
                    '../images/romoni4.jpg',
                    '../images/romoni5.jpg',
                    '../images/romoni6.jpg',
                    '../images/romoni7.jpg',
                    '../images/romoni8.jpg',
                ]
            }
        },
        methods: {
            onClickNavItem(routeName) {
                this.$inertia.visit(route(routeName), {method: 'get'});
            },
            showImg(index) {
                this.index = index;
                this.visible = true;
            },
            handleHide() {
                this.visible = false
            }
        }
    }

</script>

<style lang="scss">
    .custom-font-size {
        font-size: 5rem;

    }

</style>
