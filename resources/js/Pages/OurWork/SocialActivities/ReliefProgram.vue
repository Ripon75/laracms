<template>
    <FrontLayout>
        <main class="body">
            <section class="bg-cover h-4/5"
                style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/relif-program-cover.webp')">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Relief Program </h1>
            </section>

            <section class="card-aa">
                <span class="content-wrapper">
                    Abdur Razzaq Foundation always works with very poor people whom financially support in a regular basis.
                    Every year it organizes Relief Program whenever any flood occurred in Bangladesh. Recently, it has
                    organized several relief distribution programs during this COVID-19 pandemic situation. It provides
                    medical equipment and other accessories, such as oxygen concentrator, oxygen cylinder, oxy meter,
                    medicine, mask, hand sanitizer, soaps etc. along with food relief packs for 1200 people who are affected
                    by COVID-19.
                </span>
            </section>
                    <!--------- Latest News of Relief Program------>
            <section class="container mx-auto mt-14 mb-10">
                <h1 class="text-4xl text-center">Latest News of Relief Program</h1>
                <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4">
                    <div class="col-span-1" v-for="item in 4" :key="item">
                        <!-- ------news-card-------- -->
                        <div class="news-card">
                            <div class="cover-img">
                                <Images class="img-wrapper" imagepath="../images/latest-news-two.bmp"/>
                            </div>
                            <div class="content-wrapper">
                                <div class="content">
                                    <!-- <button class="tag-btn">Volunteer</button> -->
                                    <h1 class="news-title">Lorem ipsum dolor</h1>
                                    <p class="description line-clamp-3">Lorem ipsum dolor sit amet, consectetuerLorem ipsum dolor sit
                                        amet, consectetuer adipiscing elit, sed consectetuer adipiscing elit, sed</p>
                                </div>
                                <div class="footer">
                                    <!-- <div class="user">
                                        <div class="user-img">
                                            <Images class="w-10 h-10 rounded-full" imagepath="../images/user.jpg"/>
                                        </div>
                                        <span class="user-name">Lorem ipsum</span>
                                    </div> -->
                                    <div class="entry-date">
                                        <span class="icon"><i class="fas fa-calendar-week"></i></span>
                                        <span class="date">21 Aug</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                <!-- Photo Gallery of Relief Program-->
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
                    '../images/relief1.jpg',
                    '../images/relief2.jpg',
                    '../images/relief3.jpg',
                    '../images/relief4.jpg',
                    '../images/relief5.jpg',
                    '../images/relief6.jpg',
                    '../images/relief7.jpg',
                    '../images/relief8.jpg',
                    '../images/relief9.jpg',
                    '../images/relief10.jpg',
                    '../images/relief11.jpg',
                    '../images/relief12.jpg',
                    '../images/relief13.jpg',
                    '../images/relief14.jpg',
                    '../images/relief15.jpg',
                    '../images/relief16.jpg',
                    '../images/relief17.jpg',
                    '../images/relief18.jpg',
                    '../images/relief19.jpg',
                    '../images/relief20.jpg',
                    '../images/relief21.jpg',
                    '../images/relief22.jpg',
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
