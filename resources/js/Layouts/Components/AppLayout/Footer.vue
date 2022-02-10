<template>
    <div>
        <section class="footer bg-cover" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('../images/header-bg.jpg')">
            <div class="footer-main container grid justify-between grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-6 2xl:grid-cols-6 gap-16 py-16 mx-auto text-white">
                <div class="col-span-2 space-y-4">
                    <span class="logo">
                        <Images class="w-72" imagepath="../images/main-logo-white.png" />
                    </span>
                    <div class="grid grid-cols-3 gap-2">
                        <div
                            v-for="(src, index) in imgs"
                            :key="index"
                            class="pic"
                            @click="() => showImg(index)">
                            <div class="w-full h-full cursor-pointer">
                                <img :src="src" class="object-cover object-center w-full h-20"/>
                            </div>
                        </div>
                    </div>

                    <vue-easy-lightbox
                        :visible="visible"
                        :imgs="imgs"
                        :index="index"
                        @hide="handleHide"
                    ></vue-easy-lightbox>

                </div>

                <div class="col-span-2 mt-3">
                    <h1 class="text-2xl text-white font-bold mb-8">IMPORTANT LINKS</h1>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col space-y-2" @click.prevent>
                            <a @click="onClickNavItem('front.about-us.whoweare')" class="text-gray-200 text-lg">Who we are</a>
                            <a @click="onClickNavItem('front.about-us.missionvision')" class="text-gray-200 text-lg">Mision-Vision</a>
                            <a @click="onClickNavItem('front.about-us.executivecommittee')" class="text-gray-200 text-lg">Executive-Commitee</a>
                            <a @click="onClickNavItem('front.abdur-razzaq.biography')" class="text-gray-200 text-lg">Biography</a>
                            <a @click="onClickNavItem('front.abdur-razzaq.timeline')" class="text-gray-200 text-lg">Timeline</a>
                            <a @click="onClickNavItem('front.abdur-razzaq.achivements')" class="text-gray-200 text-lg">Achivements</a>
                            <a @click="onClickNavItem('front.abdur-razzaq.media-archive')" class="text-gray-200 text-lg">Media Archive</a>
                            <a @click="onClickNavItem('front.about-us.resourcecenter')" class="text-gray-200 text-lg">Resources</a>
                        </div>
                        <div class="flex flex-col space-y-2" @click.prevent>
                            <a @click="onClickNavItem('front.our-wrok.education')" class="text-gray-200 text-lg">Education</a>
                            <a @click="onClickNavItem('front.our-wrok.training-career-development')" class="text-gray-200 text-lg">Training and Career Development</a>
                            <a @click="onClickNavItem('front.our-wrok.social-activities')" class="text-gray-200 text-lg">Social Activities</a>
                            <a @click="onClickNavItem('front.our-wrok.medical-healthcare')" class="text-gray-200 text-lg">Medical and Healthcare</a>
                            <a @click="onClickNavItem('front.support-us')" class="text-gray-200 text-lg">Support Us</a>
                            <a @click="onClickNavItem('front.contact-us')" class="text-gray-200 text-lg">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 mt-3">
                    <h1 class="text-2xl text-white font-bold mb-8">NEWSLETTER</h1>
                    <span class="text-gray-200 text-lg">Subscribe to our newsletter to get latest updates</span>
                    <div class="flex flex-col space-y-2 mt-4">
                        <input type="text" class="rounded text-gray-700 w-3/4" placeholder="First Name">
                        <input type="text" class="rounded text-gray-700 w-3/4" placeholder="Last Name">
                        <input type="text" class="rounded text-gray-700 w-3/4" placeholder="Your Email Address">
                    </div>
                    <button class="bg-primary hover:bg-primary-darker rounded text-white px-4 py-2 w-28 mt-4 text-lg">Subscribe</button>
                </div>
            </div>
        </section>
         <!--------------------sticky social icon------------>
        <div class="sticky-social">
            <nav>
                <ul>
                    <li >
                        <a href="https://www.facebook.com/AbdurRazzaqFoundation" class="facebook" target="_blank" ><span class="text-white text-2xl"><i class="fab fa-facebook-f"></i></span></a>
                        <a href="https://www.instagram.com/abdur_razzaq_foundation" class="instagram" target="_blank" ><span class="text-white text-2xl"><i class="fab fa-instagram"></i></span></a>
                        <a href="https://www.linkedin.com/company/abdur-razzaq-foundation" class="linkedin" target="_blank" ><span class="text-white text-2xl"><i class="fab fa-linkedin-in"></i></span></a>
                        <a href="https://www.youtube.com/c/AbdurRazzaqFoundation" class="youtube" target="_blank" ><span class="text-white text-2xl"><i class="fab fa-youtube"></i></span></a>
                        <!-- <a href="#" target="_blank" class="twitter"><span class="text-white text-2xl"><i class="fab fa-twitter"></i></span></a> -->
                        <!-- <a href="#" target="_blank" class="pinterest"><span class="text-white text-2xl"><i class="fab fa-pinterest-p"></i></span></a> -->
                    </li>
                </ul>
            </nav>
        </div>
        <!------------------footer-copywrite----------------------- -->
        <section class="footer-copywrite">
            <div class="flex items-center justify-center bg-gray-900">
                <span class="text-sm text-white py-2">© 2021 Abdur Razzaq Foundation</span>
            </div>
        </section>
    </div>
</template>

<script>
import Images from '@/Jetstream/Images.vue'
import VueEasyLightbox from 'vue-easy-lightbox'

export default {
    components: {
        Images,
        VueEasyLightbox
    },
      data() {
        return {
            visible: false,
            index: 0,
            imgs: [
                '../images/footer1.jpg',
                '../images/footer2.jpg',
                '../images/footer3.jpg',
                '../images/footer4.jpg',
                '../images/footer5.jpg',
                '../images/footer6.jpg',
                '../images/footer7.jpg',
                '../images/footer8.jpg',
                '../images/footer9.jpg',

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

<style>


</style>
