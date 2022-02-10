<template>
    <FrontLayout>
        <main class="body">
            <section class="bg-cover h-4/5" style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/playground-cover.jpg')">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Parks, Playgrounds and Beautification Projects	 </h1>

            </section>

            <section class="card-aa">
                <span class="content-wrapper mb-3">
                    A community has at least a few situations in which some large or small parks, playgrounds and beautification projects improve the appearance of the area and increase property values and satisfaction of residents and visitors alike. From the thought, there are some running and proposed beatification projects of Abdur Razzaq Foundation in Shariatpur district, such as:
                </span>
                <li class="text-lg">Parks and Playgrounds in Damudya, Bhedarganj and Goshairhat Upazila</li>
                <li class="text-lg">Damudya Shadhinata Chattar </li>
                <li class="text-lg">Bhedorganj Shadhinata Chattar </li>
                <li class="text-lg">Goshairhat Shadhinata Chattar </li>
                <li class="text-lg">Damudya Bijoy Mancha</li>
                <li class="text-lg">Goshairhat Bijoy Mancha etc.</li>
            </section>
                    <!--------- Latest News of Parks, Playgrounds and Beautification Projects ------>
            <section class="container mx-auto mt-14 mb-10">
                <h1 class="text-4xl text-center">Latest News of Parks, Playgrounds and Beautification Projects</h1>
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

                <!-- Photo Gallery of Parks, Playgrounds and Beautification Projects-->
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
                    '../images/sports-1.jpg',
                    '../images/sports-2.jpg',
                    '../images/sports-3.jpg',
                    '../images/sports-4.jpg',
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
