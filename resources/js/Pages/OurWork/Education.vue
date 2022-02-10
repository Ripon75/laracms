<template>
    <FrontLayout>
        <!-------Banner-------->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/education-banner.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Education</h1>
            </div>
        </section>
        <!--./-------Banner------->
        <section class="container mx-auto mt-24 mb-20">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                <!---------------Grants------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/education-in-Bangladesh.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Grants</p>
                                <p class="subtitle">There are limited conspicuous reward systems in our country to encourage the best outputs of students. Abdur Razzaq Foundation is going to take initiatives to provide many more educational grants.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.education.grant')" class="btn-wrapper" @click.prevent>Read More
                                    <svg class="icon-wrapper" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------Scholarship---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/scholar.png"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Scholarship</p>
                                <p class="subtitle">Bangladesh is a country with a lot of meritorious students with low living standard for which they cannot always enable to do what they deserve. Abdur Razzaq Foundation has been in progress to encourage such young generation who are the future of our country.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.education.scholarship')" class="btn-wrapper">Read More
                                    <svg class="icon-wrapper" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------Research and Publication---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/research.png"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Research and Publication</p>
                                <p class="subtitle">Abdur Razzaq Foundation supports and promotes the research on issues in economic, social, environmental and cultural spheres in the national, regional and international context.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.research-and-publication')" class="btn-wrapper">Read More
                                    <svg class="icon-wrapper" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------Tanima Razzaq Kindergarten---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/kindergarden4.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Tanima Razzaq Kindergarten</p>
                                <p class="subtitle">Tanima Razzaq Kindergarten is one of the major upcoming projects of Abdur Razzaq Foundation. It will be located at Damudya upazila in Shariatpur district.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.tanima-razzaq-kindergarten')" class="btn-wrapper">Read More
                                    <svg class="icon-wrapper" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------Support for Infrastructure of Established Institutions---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/institutional-support.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Support for Infrastructure of Established Institutions</p>
                                <p class="subtitle">Abdur Razzaq Foundation regularly provides financial support to the schools and colleges established by the late national leader Abdur Razzaq.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.support-for-infrastructure')" class="btn-wrapper">Read More
                                    <svg class="icon-wrapper" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </FrontLayout>
</template>
<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'
    import Images from '@/Jetstream/Images.vue'
    export default {
        components: {
            FrontLayout,
            Images
        },

        methods: {
        onClickNavItem(routeName) {
            this.$inertia.visit(route(routeName), {method: 'get'});
        }
    }
    }

</script>
<style lang="scss">
    .custom-font-size {
        font-size: 5rem;

    }

    .bg-blue-100m {
        background-color: #D6DFFA;
    }

</style>
