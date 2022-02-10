<template>
    <FrontLayout>
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/books-single-banner.png')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white "></h1>
            </div>
        </section>
        <!-----------Books and Publication----------->
        <section class="container mx-auto mt-20 mb-10">
        <div class="grid grid-cols-6 sm:grid-cols-6 md:grid-cols-6 xl:grid-cols-12 2xl:grid-cols-12 gap-10">
            <div class="col-span-6">
                <Images class="img-wrapper w-full h-auto rounded-l-none rounded-lg" imagepath="../images/book2.jpg" />
            </div>
            <div class="col-span-6 mt-10">
                <span class="text-4xl font-bold">Legendary national leader Abdur Razzaq</span>
                <h2 class="text-xl mt-2">by <span class="text-xl text-primary">Rahman Ripon</span></h2>
                <span class="text-xl">Publishers Name:</span><br>
                <!-- button -->
                <div class="action mt-4 mb-4">
                    <a href="#" class="bg-blue-500 px-4 py-2 hover:bg-blue-600 rounded text-white hover:text-white transition ease-in-out duration-700">Download pdf</a>
                </div>
                <p class="text-lg mt-8">"Ekushey book fair" in the name of national leader leader Abdur Razzaq emapira "legendary national leader Abdur Razzaq" published on the opening of the book was attended by the Honorable Member of Parliament Nahim Razzaq MP, Mr. Abdul Mannan Chowdhury, Vice-Chancellor, World University, author, writer, journalist and chief personnel.</p>
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

</style>
