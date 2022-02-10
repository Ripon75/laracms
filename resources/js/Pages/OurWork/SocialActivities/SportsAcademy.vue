<template>
    <FrontLayout>
        <main class="body">
            <section class="bg-cover h-4/5" style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/sportsAcademyBanner.jpg')">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Abdur Razzaq Sports Academy </h1>
            </section>

            <section class="card-aa">
                <span class="content-wrapper">
                    Today sport comes up as an important component of socio-economic development of a country. The active participation in sports improves community health and productivity. From the point of view, Abdur Razzaq Foundation is going to launch a sports academy named Abdur Razzaq Sports Academy which is in the process of constructing at Damudya upazila in Shariatpur district.
                    <br>
                    <h1></h1>
                    The objective of Abdur Razzaq Sports Academy is to produce national and international level Bangladeshi athletes, players and coaches by providing scientific sports education. This sports academy will have an academic partnership with Bangladesh Krira Shikkha Protishtan (BKSP) that will be an added advantage for all of students those who will participate in Sports Education programs and advanced sports training courses with Abdur Razzaq Sports Academy.
                </span>
            </section>
                    <!--------- Latest News of Abdur Razzaq Sports Academy------>
            <section class="container mx-auto mt-14 mb-10">
                <h1 class="text-4xl text-center">Latest News of Abdur Razzaq Sports Academy</h1>
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

                <!-- Photo Gallery of Abdur Razzaq Sports Academy-->
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
