<template>
    <FrontLayout>
         <main class="body">
            <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
                style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/resources-center.jpg')">
                <div class="relative flex text-center">
                    <h1 class="py-64 text-5xl font-bold text-center text-white ">Resource Center</h1>
                </div>
            </section>
            <!----------------Our Projects Gallery--------------->
            <section class="container mx-auto mt-20">
                <h1 class="text-center text-3xl font-bold mb-10">Our Projects Gallery</h1>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                    <template v-for="item in projectList" :key="item">
                        <a @click="onClickNavItem(item.route)" target="_blank" class="card-gallary relative w-full h-64 bg-cover bg-center group rounded-md overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            :style="{ backgroundImage: 'url('+item.imgSRC+')' }">
                            <div class="card-wrapper absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="body">
                                <h3 class="wrapper">
                                    <a class="title">
                                        {{ item.title }}
                                        <h4 class="extra-title"></h4>
                                    </a>
                                    <a class="action" type="button" target="_blank">See More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </h3>
                            </div>
                        </a>
                    </template>
                </div>
            </section>
            <!----------Videos------------>
            <section class="container mx-auto mt-20">
                 <h1 class="text-center text-3xl font-bold mb-10">Videos</h1>
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
                     <template v-for="item in videoList" :key="item">
                        <div class="flex items-center mt-10 sm:mt-10 md:mt-10 lg:mt-4 xl:mt-0 2xl:mt-0">
                            <iframe width="560" height="215" :src="item.link" class="rounded-md" title="YouTube video player"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                     </template>
                 </div>
            </section>
            <!-- button -->
            <div class="flex justify-center mt-8 mb-10">
                <a href="https://www.youtube.com/c/AbdurRazzaqFoundation/videos"
                    class="inline-flex items-center px-4 py-2 border text-white hover:text-white bg-primary rounded-md"
                    type="button" target="_blank">Watch More
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-----------Books and Publication--------- -->
            <section class="container mx-auto mt-20 mb-10">
                <h1 class="text-center text-3xl font-bold mb-10">Books &amp; Publication</h1>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-6">
                    <template v-for="item in bookList" :key="item">
                    <a @click="onClickNavItem(item.route)" target="_blank" class="card-gallary relative w-full h-98 bg-cover bg-center group overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out rounded-2xl rounded-l-md"
                        :style="{ backgroundImage: 'url('+item.imgSRC+')'}">
                        <div class="card-wrapper absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">
                        </div>
                        <div class="body">
                            <h3 class="wrapper">
                                <a class="title">
                                    {{ item.title }}
                                    <h4 class="extra-title"></h4>
                                </a>
                                <a class="action"
                                    type="button" target="_blank">View Details
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </h3>
                        </div>
                    </a>
                    </template>
                </div>
                <!-- button -->
                <div class="flex justify-center mt-8 mb-10">
                    <a @click="onClickNavItem('front.about-us.books&publicationlist')"
                        class="inline-flex items-center px-4 py-2 border text-white hover:text-white bg-primary rounded-md"
                        type="button" target="_blank">Read More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </section>
        </main>
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
        data () {
            return {
                projectList: [
                    {
                        route: 'front.about-us.sports-academy-gallery',
                        imgSRC: '../images/sports-1.jpg',
                        title: 'Abdur Razzaq Sports Academy'
                    },
                    {
                        route: 'front.about-us.ainuddin-library',
                        imgSRC: '../images/library1.jpg',
                        title: 'Ainuddin Library'
                    },
                    {
                        route: 'front.about-us.damuddya-hospital',
                        imgSRC: '../images/hospital1.jpg',
                        title: 'Damuddya Hospital'
                    },
                    {
                        route: 'front.about-us.pouroshava-moral',
                        imgSRC: '../images/pouroshova1.jpg',
                        title: 'Goshairhat Pouroshava Moral'
                    },
                    {
                        route: 'front.about-us.tanima-razzaq-kinder-garden-gallery',
                        imgSRC: '../images/romoni1.jpg',
                        title: 'Tanima Razzaq Kinder Garden'
                    },
                    {
                        route: 'front.about-us.amra-ramoni-gallery',
                        imgSRC: '../images/romoni2.jpg',
                        title: ' Amra Ramoni'
                    },
                ],

                bookList: [
                   {
                    route:'front.about-us.books&publicationSingle',
                    imgSRC:'../images/book2.jpg',
                    title:'Legendary national leader Abdur Razzaq'
                   },
                   {
                    route:'front.about-us.books&publicationSingle',
                    imgSRC:'../images/books1.jpg',
                    title:`Swann's Way`
                   },
                   {
                    route:'front.about-us.books&publicationSingle',
                    imgSRC:'../images/book3.jpg',
                    title:'Catcher'
                   },
                   {
                    route:'front.about-us.books&publicationSingle',
                    imgSRC:'../images/book4.jpg',
                    title:'The Hidden Tools'
                   },
                ],
                videoList: [
                    { link: 'https://www.youtube.com/embed/WhwymCpBvbQ'},
                    { link: 'https://www.youtube.com/embed/KTKJhBhOLiI'},
                    { link: 'https://www.youtube.com/embed/2E7MKd-E9ME'},
                    { link: 'https://www.youtube.com/embed/t4B_mG1AXpA'},
                    { link: 'https://www.youtube.com/embed/JibDk5NI21U'},
                    { link: 'https://www.youtube.com/embed/WIqC5PVE3q0'},
                    { link: 'https://www.youtube.com/embed/xSWmDOiELkE'}
                ]
            }
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

</style>
