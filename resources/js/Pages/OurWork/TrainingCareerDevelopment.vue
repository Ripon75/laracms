<template>
    <FrontLayout>
        <!-------Banner-------->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/training&carrer.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Training &amp; Career Development</h1>
            </div>
        </section>
        <!--./-------Banner------->
        <section class="container mx-auto mt-24 mb-20">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                <!---------------Amra Romoni------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/romoni.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Amra Romoni</p>
                                <p class="subtitle">Amra Romoni is a platform that aims to inspire, mobilize and empower women. Its key objectives are to find the potential and energetic female entrepreneurs
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.training-career-development.amra-romoni')" class="btn-wrapper" @click.prevent>Read More
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
                <!------------ICT Training Center--------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/ict-training-center.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">ICT Training Center</p>
                                <p class="subtitle">The Government of Bangladesh recognizes that ICT can make an important development impact because it has the capabilities to overcome barriers of social
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.training-career-development.ict-training-center')" class="btn-wrapper">Read More
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
                <!------------Engineering Training Program---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/engineering.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Engineering Training Program</p>
                                <p class="subtitle">The Engineering is an extensive subject. With so many types of engineering to choose from, it can be difficult to narrow down which one is right for a student
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.training-career-development.engineering-training-program')" class="btn-wrapper">Read More
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
                <!------------Job Center---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/Women_working.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Job Center</p>
                                <p class="subtitle">The Job Center will be new dimension of Shariatpur district. It will be created as the job seekers need guidance on their careers and especially on academic and industry related
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.training-career-development.job-center')" class="btn-wrapper">Read More
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
