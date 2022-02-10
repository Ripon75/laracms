<template>
    <FrontLayout>
    <!-- Banner Starts -->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/achievements.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white 2xl:text-opacity-0 "> Achivements</h1>
            </div>
        </section>
                <!-- Abdur Razzaq’s Achievements Start-->
        <h1 class="mt-20 text-4xl font-bold text-center">Abdur Razzaq’s Achievements</h1>
        <section class="container mx-auto grid grid-cols-12 gap-4 mb-10">
            <ul class="mt-8 list-inside text-lg col-span-12 sm:col-span-12 md:col-span-12 xl:col-span-8 2xl:col-span-8">
                <li class="list-disc">Two times elected General Secretary of East Pakistan Student League (1965-67)</li>
                <li class="list-disc">One of the three masterminds in forming the ‘NUCLEUS’, struggle for establishment
                    of Six-Point Movement during Pakistani regime (1964)
                </li>
                <li class="list-disc">Chief of Awami Volunteer Core (Sechashebok Bahini) which later was integrated into
                    Bangladesh Liberation Force (BLF).
                </li>
                <li class="list-disc">One of the leading organizers of the Liberation War of 1971 as one of the four
                    sector Commanders of Meghaloy Division, Mujib Bhahini – Bangladesh Liberation Force (BLF)
                </li>
                <li class="list-disc">Two times elected General Secretary of Bangladesh Awami League (1978-81).
                </li>
                <li class="list-disc">Elected four times as Presidium member of Bangladesh Awami League.
                </li>
                <li class="list-disc">Instrumental in forming ‘Ghatak Dalal Nirmul Committee’ in 1992 and organized the
                    movement for the trail for the war criminals of Liberation War of 1971
                </li>
            </ul>

            <div class="w-full h-full mt-8 col-span-12 sm:col-span-12 md:col-span-12 lg:colspan-12 xl:col-span-4 2xl:col-span-4">
                <Images class="w-full" src="../images/achievements-abfoundation.jpg"></Images>
            </div>

            <ul class="list-inside text-lg col-span-12">
                <li class="list-disc">As a Minister of Water Resource (1996–2001), instrumental in signing of Sharing of
                    Ganges Waters Treaty between Bangladesh and India
                </li>
                <li class="list-disc">Two times elected Vice President of World Peace Council</li>
                <li class="list-disc">Unopposed elected President of Bangladesh Peace Council (2010).
                </li>
                <li class="list-disc">Awarded Nejatee Subhash Chandra Basu Internations Peace Award for contribution in
                    advocating peace
                </li>
                <li class="list-disc">Leading a ten-member parliamentary team's fact-finding mission on Tipaimukh Dam
                    project and visiting India during July–August 2009. On return from India, Razzaq presented a report
                    to the parliament where he said that the Indian ministers had assured them that they would not
                    implement any project to harm Bangladesh.
                </li>
                <li class="list-disc">He has contributed much for development of Shariatpur and he is the most popular
                    leader there. To establish the dream of Bangabandhu in Bangladesh and make Bangladesh free from
                    terrorism and corruption as such he is called ‘Maker of Modern Sariatpur’.</li>
                <li class="list-disc">One-time Member of Provincial Assembly (1970), five times Member of Bangladesh
                    National Parliament (1973, 1991, 1996, 2001, 2008) from 6 different constituencies, a veteran
                    parliamentarian never lost any election in his lifetime.
                </li>
            </ul>
        </section>
        <!-- Abdur Razzaq’s Achievements Ends-->
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'
    import Images from '@/Jetstream/Images.vue'

    export default {
        components: {
            FrontLayout,
               Images
        }
    }

</script>

<style lang="scss">


</style>
