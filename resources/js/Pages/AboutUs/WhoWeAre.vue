<template>
    <FrontLayout>
    <!-- Banner Starts -->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/who-we-are-banner.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white"> Who We Are</h1>
            </div>
        </section>
        <!-- Banner END -->
        <section class="card-aa">
            <span class="content-wrapper mb-2">Abdur Razzaq Foundation (ARF) was formed in 2013 to address concerns of human
                rights abuse and denial of rights, and provide social services for the most suffered populations
                in Bangladesh.
            </span>
            <span class="content-wrapper">
                The Foundation is directly benefitting many people and their families every year through more different welfare projects on education, training and
                development, social activities, medical and healthcare and women empowerment.
            </span>
        </section>

        <!-- Main Body Content Section Starts  -->
        <section class="container mx-auto">
            <div class="mb-10">
                <h2 class="mt-12 mb-4 text-3xl">The foundation is formed with the following objectives:
                </h2>
                <ul class="font-normal text-lg text-gray-700 list-disc">
                    <li>Establishment of a prosperous, exploitation and poverty-free Bangladesh as envisaged in the
                        spirit of our Great War of Liberation</li>
                    <li>Towards an enlightened Bangladesh striving for the realization of the noble goal of growth
                        with equity as was the life-long dream of national leader Abdur Razzaq</li>
                    <li>To support the socio-economic and cultural development of Bangladesh through innovative
                        programs and activities</li>
                    <li>To support for creation of the national human capital through programs in the education,
                        health, environment and social sectors towards a sustainable human development</li>
                    <li>To provide assistance to attain aims of excellence in education in selected educational
                        institutions throughout the country</li>
                    <li>To support and promote research on issues in economic, social, environmental and cultural
                        spheres in the national, regional and international context</li>
                    <li>To enable meritorious but disadvantaged children and students especially with autism, mental
                        or physical disability or with poverty to access resources in the form of aids and grants to
                        flourish their full potentials</li>
                    <li>To support the socio-economic and cultural development of Bangladesh through innovative
                        programs and activities</li>
                    <li>To arrange medical treatment and rehabilitation programs for the distressed people affected
                        by floods and natural disasters</li>
                    <li>To prevent, protect and create awareness against under-aged marriages</li>
                    <li>To make people aware with social awareness programs</li>
                    <li>To support the socio-economic and cultural development of Bangladesh through innovative
                        programs and activities</li>
                    <li>To create a platform to help women establish themselves in a competitive field </li>
                    <li>To improve sport and development practice</li>
                    <li>To set up and run rehabilitation centers for the old-aged and handicapped children</li>
                    <li>To render technical and vocational training to the unemployed youths for their
                        self-employment</li>
                    <li>To set up clinics and hospitals in and around the country for medical treatment of the poor
                        and distressed people</li>
                    <li>To formulate and implement any other plan, program and activities as approved by the Board
                        of Executive Committee of the Foundation</li>
                </ul>
            </div>
        </section>
        <!-- Main Body Content Section Ends here  -->
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'

    export default {
        components: {
            FrontLayout
        }
    }

</script>

<style lang="scss">
    .custom-font-size {
        font-size: 5rem;

    }

</style>
