<template>
    <FrontLayout>
        <!-------Banner-------->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/medical-healthcare.png')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Medical &amp; Healthcare</h1>
            </div>
        </section>
        <!--./-------Banner------->
        <section class="container mx-auto mt-24 mb-20">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                <!---------------Health Camp------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/health-camp.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Health Camp</p>
                                <p class="subtitle">Abdur Razzaq Foundation has some health camp projects including general health camp, eye camp, diabetic camp, dental camp, blood donation camp and many other initiatives
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.medical-healthcare.healthCamp')" class="btn-wrapper" @click.prevent>Read More
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
                <!------------Razzaq Selim Diabetic and General Diagnosis Center---------------->
                <div class="card-bb">
                    <div class="card-wrapper">
                        <Images class="img-wrapper" imagepath="../../images/diagonstics-center.jpg"/>
                        <div class="body">
                            <div class="content-wrapper">
                                <p class="title">Razzaq Selim Diabetic &amp; General Diagnosis Center</p>
                                <p class="subtitle">Abdur Razzq Foundation is willing to launch a hospital named Razzaq Selim Diabetic and General Diagnosis Center’ at Damudya upazila in Shariatpur district. The objective of the
                                </p>
                            </div>
                            <div class="footer">
                                <a @click="onClickNavItem('front.medical-healthcare.diabetic-diagnosis-center')" class="btn-wrapper">Read More
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
