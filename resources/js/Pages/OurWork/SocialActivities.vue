<template>
    <FrontLayout>
        <!-------Banner-------->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/social-activites.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Social Activities</h1>
            </div>
        </section>
        <!--./-------Banner------->
        <section class="container mx-auto mt-24 mb-20">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                <!---------------Library and Community Center------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/library3.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Library and Community Center</p>
                                <p class="subtitle">A library is open to everyone for fulfilling the need for information. It plays a vital role in providing people with reliable contents that encourage and promote the process of
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.library-community-center')" class="btn-wrapper" @click.prevent>Read More
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
                <!------------Abdur Razzaq Sports Academy---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/sports-2.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Abdur Razzaq Sports Academy</p>
                                <p class="subtitle">Today sport comes up as an important component of socio-economic development of a country. The active participation in sports improves community health and productivity.
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-activities/sports-academy')" class="btn-wrapper">Read More
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
                <!------------Parks, Playgrounds and Beautification Projects---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/sports-3.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Parks, Playgrounds &amp; Beautification Projects</p>
                                <p class="subtitle">A community has at least a few situations in which some large or small parks, playgrounds and beautification projects improve the appearance of the area and
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-activities/projects')" class="btn-wrapper">Read More
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
                <!------------Good Citizenship through Volunteerism---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/volunteer.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Good Citizenship through Volunteerism</p>
                                <p class="subtitle">A volunteer can be a good citizen because his/her personal experiences with social problems give him/her the confidence and strategies to do more for his/her community.  The outcomes from volunteerism present a massive resource to make a real
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-activities/volunteerism')" class="btn-wrapper">Read More
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
                <!------------Debate Competition and Workshop---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/debate-competition.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Debate Competition &amp; Workshop</p>
                                <p class="subtitle">Debate Competition for students is very powerful as it helps them to boost their confidence, remove the fear of speaking in public, develop critical thinking, learn how to
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-activities/debate-competition')" class="btn-wrapper">Read More
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
                <!------------Relief Program---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/relif-program.webp"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Relief Program</p>
                                <p class="subtitle">Abdur Razzaq Foundation always works with very poor people whom financially support in a regular basis. Every year it organizes Relief Program whenever any flood occurred in
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-activities/relief-program')" class="btn-wrapper">Read More
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
                <!------------Social Awareness Program---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/oxygen.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Social Awareness Program</p>
                                <p class="subtitle">Abdur Abdur Razzaq Foundation is willing to arrange different social awareness programs on child sexual abuse, eve-teasing, mental health and well-being, gender
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.social-activities.social-awareness')" class="btn-wrapper">Read More
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
