<template>
    <FrontLayout>
        <main class="body">
            <section class="bg-cover h-4/5" style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/ict-training-cover.jpg')">
                <h1 class="py-64 text-5xl font-bold text-center text-white "> ICT Training Center </h1>
            </section>

            <section class="card-aa mb-10">
                <span class="content-wrapper">
                    The Government of Bangladesh recognizes that ICT can make an important development impact because it has the capabilities to overcome barriers of social, economic and geographical isolation.
                    <h1></h1>
                    Abdur Razzaq Foundation are going to establish an ICT Training Center at Damudya upazila in Shariatpur district. The training center will be dedicated to serving the quality training programs, such as basic computer training, freelancing training, IT skill development training etc. which will remark in the IT world. It will continue to share knowledge for contributing to the success of individuals and serve society with the best interest.
                </span>
            </section>
            <!--------- Latest News ofICT Training Center ------>
            <section class="container mx-auto mt-14 mb-10">
                <h1 class="text-4xl text-center">Latest News of ICT Training Center</h1>
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

                <!-- Photo Gallery of AICT Training Center-->
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
