<template>
    <!-- ----Responsive nav bar-------->
    <nav class="fixed w-full bg-white z-30">
        <div class="container px-4 py-2 flex flex-wrap items-center mx-auto">
            <a @click="onClickNavItem('front.home')" class="flex">
                <Images class="w-full h-12 sm:h-12 lg:h-14" imagepath="../images/main-logo.png"/></a>
            <!-----togler btn---->
            <button class="lg:hidden inline-flex items-center justify-center w-10 h-10 ml-auto text-white border border-green-900 rounded-md outline-none focus:outline-none"
            @click="onToggleMenu">
                <i class="text-green-800 fas fa-bars"></i>
            </button>
            <!-----togler btn---->
            <!-------menu------->
            <div class="w-full lg:flex lg:w-auto ml-8 pt-4 lg:ml-auto"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <ul class="flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-2">
                    <li><a @click="onClickNavItem('front.home')" class="flex px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white font-semibold rounded-md">Home</a></li>
                    <!-- <li><a @click="onClickNavItem('front.about-us')" class="flex px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white font-semibold rounded-md">About Us</a></li> -->
                    <!-- <li><a @click="onClickNavItem('front.biography')" class="flex px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white font-semibold rounded-md">Abdur Razzaq</a></li> -->
                    <a-dropdown :trigger="['click']">
                        <a class="ant-dropdown-link px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white outline-none focus:outline-none font-semibold rounded-md" @click.prevent>
                            About Us<i class="px-1 fas fa-sort-down"></i>
                        </a>
                        <template #overlay>
                            <a-menu class="w-80">
                                <a-menu-item>
                                <a @click="onClickNavItem('front.about-us.whoweare')" class="text-base p-1 text-green-800">Who we are</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.about-us.missionvision')" class="text-base p-1 text-green-800">Mission-Vision</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.about-us.executivecommittee')" class="text-base p-1 text-green-800">Executive Committee</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.about-us.resourcecenter')" class="text-base p-1 text-green-800">Resource Center</a>
                                </a-menu-item>
                            </a-menu>
                        </template>
                    </a-dropdown>

                    <a-dropdown :trigger="['click']">
                        <a class="ant-dropdown-link px-4 py-2 font-semibold text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white outline-none focus:outline-none rounded-md" @click.prevent>
                            Abdur Razzaq<i class="px-1 fas fa-sort-down"></i>
                        </a>
                        <template #overlay>
                            <a-menu class="dropdownMenu w-80">
                                <a-menu-item>
                                <a @click="onClickNavItem('front.abdur-razzaq.biography')" class="text-base p-1 text-green-800">Biography</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.abdur-razzaq.timeline')" class="text-base p-1 text-green-800">Timeline</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.abdur-razzaq.achivements')" class="text-base p-1 text-green-800">Achievements</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.abdur-razzaq.media-archive')" class="text-base p-1 text-green-800">Media Archive</a>
                                </a-menu-item>
                            </a-menu>
                        </template>
                    </a-dropdown>

                    <a-dropdown :trigger="['click']">
                        <a class="ant-dropdown-link px-4 py-2 font-semibold text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white outline-none focus:outline-none rounded-md" @click.prevent>
                            Our Work<i class="px-1 fas fa-sort-down"></i>
                        </a>
                        <template #overlay>
                            <a-menu class="dropdownMenu w-80">
                                <a-menu-item>
                                <a @click="onClickNavItem('front.our-wrok.education')" class="text-base p-1 text-green-800">Education</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.our-wrok.training-career-development')" class="text-base p-1 text-green-800">Training and Career Development</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.our-wrok.social-activities')" class="text-base p-1 text-green-800">Social Activities</a>
                                </a-menu-item>
                                <a-menu-item>
                                <a @click="onClickNavItem('front.our-wrok.medical-healthcare')" class="text-base p-1 text-green-800">Medical and Healthcare</a>
                                </a-menu-item>
                            </a-menu>
                        </template>
                    </a-dropdown>
                    <!-- routing-end -->
                    <li><a @click="onClickNavItem('front.support-us')" class="flex px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white font-semibold rounded-md">Support Us</a></li>
                    <li><a @click="onClickNavItem('front.contact-us')" class="flex px-4 py-2 text-green-800 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg 2xl:text-lg hover:bg-primary hover:text-white font-semibold rounded-md">Contact</a></li>
                    <!---search button--->
                    <li>
                        <div class="flex">
                            <input class="py-2 pl-4 w-28 focus:outline-none border border-r-0 border-green-900 rounded-l-md" placeholder="Search here">
                            <button class="px-4 border border-l-0 border-green-900 text-green-800 rounded-r-md"><i class="fas fa-search"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
            <!-----menu---->
        </div>
    </nav>

</template>

<script>
import Images from '@/Jetstream/Images.vue'

export default {
    components: {
        Images,
    },
    data() {
        return {
            navbarOpen: false
        }
    },
    methods: {
        onToggleMenu() {
            this.navbarOpen = !this.navbarOpen;
            console.log(this.navbarOpen);
        },
        onClickNavItem(routeName) {
            this.$inertia.visit(route(routeName), {method: 'get'});
        }
    }
}
</script>


