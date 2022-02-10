<template>
    <FrontLayout>
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/mission-vision-scaled.jpeg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white lg:opacity-0 xl:opacity-0 2xl:opacity-0">Mission &amp; Vision</h1>
            </div>
        </section>
         <!-- Vision and Mission Section Starts -->
        <section class="container mx-auto mb-10 mt-10">
            <div class="grid grid-cols-1">
                <div class="col-span-1 text-center">
                    <Images class="w-28 mx-auto mb-4" imagepath="../images/mission.png"/>
                    <!-- <i class="pb-5 text-blue-500 fas fa-bullseye text-8xl"></i> -->
                    <h1 class="text-3xl">Our Mission</h1>
                    <p class="text-lg w-3/4 mx-auto"> Our mission is to empower people and communities in situations of poverty,
                        illiteracy, disease and social injustice, and to develop a society free from curse of poverty,
                        illiteracy and all forms of exploitation.
                    </p>
                </div>
                <div class="col-span-1 text-center mt-8">
                    <Images class="w-28 mx-auto mb-4" imagepath="../images/vision.png"/>
                    <!-- <i class="pb-5 text-blue-500 far fa-eye text-8xl"></i> -->
                    <h1 class="text-3xl">Our Vision</h1>
                    <p class="text-lg w-3/4 mx-auto">A country free from all forms of exploitation and discrimination free
                        Bangladesh envisioned in the spirit of our great war of liberation.</p>
                </div>
            </div>
        </section>
        <!-- Vision and Mission Section Ends -->
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'
    import Images from '@/Jetstream/Images.vue'

    export default {
        components: {
            Images,
            FrontLayout
        },
           data : () => {
            return {
            }
        },
    }

</script>

<style lang="scss">

</style>
