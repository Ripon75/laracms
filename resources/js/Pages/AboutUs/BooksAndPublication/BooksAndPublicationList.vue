<template>
    <FrontLayout>
        <main class="body">
            <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
                style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/booksPublicationCover.png')">
                <div class="relative flex text-center">
                    <h1 class="py-64 text-5xl font-bold text-center text-white ">Books and Publication</h1>
                </div>
            </section>
             <!-----------Books and Publication----------->
            <section class="container mx-auto mt-20 mb-10">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 gap-6 mb-6">
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
