<template>
    <FrontLayout>
        <!-- Banner Starts -->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/executive-committee.jpg')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white ">Executive Committee</h1>
            </div>
        </section>
        <!-- Banner END -->
        <h1 class="text-center text-4xl mt-14">Our Honourable Executive Committee</h1>
        <section class="container mx-auto grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8 mt-10 mb-10">
            <template v-for="item in committeeList" :key="item">
                <div class="col-span-1">
                <div class="profile-card">
                    <Images class="img-wrapper" :imagepath="item.imgSrc" />
                    <!--Card Header-->
                    <h1 class="title">{{ item.title }}</h1>
                    <div>
                        <h4 class="subtitle">{{ item.subtitle }}</h4>
                    </div>
                </div>
            </div>
            </template>
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
        data () {
            return {
                committeeList: [
                    {
                        imgSrc: '../images/Mrs.-Farida-Razzaq.jpg',
                        title : 'Mrs. Farida Razzaq',
                        subtitle: 'Chairperson'
                    },
                    {
                        imgSrc: '../images/Tofael-Ahmed-M.P.jpg',
                        title : 'Tofael Ahmed M.P',
                        subtitle: 'Co-Chairperson'
                    },
                    {
                        imgSrc: '../images/Dr.-A-T-M-Shamsul-Huda.jpg',
                        title : 'Dr. A T M Shamsul Huda',
                        subtitle: 'Vice President'
                    },
                    {
                        imgSrc: '../images/Harun-AR-Rashid.jpg',
                        title : 'Harun-AR-Rashid',
                        subtitle: 'Treasurer'
                    },
                    {
                        imgSrc: '../images/Md.-Shahjahan-Khan.jpg',
                        title : 'Md. Shahjahan Khan',
                        subtitle: 'General Secretary'
                    },
                    {
                        imgSrc: '../images/NahimRazzaq.jpg',
                        title : 'Nahim Razzaq M.P',
                        subtitle: 'Joint General Secretary'
                    },
                    {
                        imgSrc: '../images/ASM-Samsul-Arefin.jpg',
                        title : 'ASM Samsul Arefin',
                        subtitle: 'Secretary, Research & Publication'
                    },
                    {
                        imgSrc: '../images/Morshed-Alam.jpg',
                        title : 'Morshed Alam',
                        subtitle: 'Secretary , Foreign'
                    },
                    {
                        imgSrc: '../images/user-blank.jpg',
                        title : 'Md. Momtaj Hossain',
                        subtitle: 'Secretary, P&D'
                    },
                    {
                        imgSrc: '../images/Fahim-Razzaq.jpg',
                        title : 'Fahim Razzaq',
                        subtitle: 'Office Secretary'
                    },
                    {
                        imgSrc: '../images/Dr.-Mohammad-Farasuddin.jpg',
                        title : 'Dr. Mohammad Farasuddin',
                        subtitle: 'Member'
                    },
                    {
                        imgSrc: '../images/Rashed-Khan-Menon-M.P.jpg',
                        title : 'Rashed Khan Menon M.P',
                        subtitle: 'Member'
                    },
                    {
                        imgSrc: '../images/Abed-Khan.jpg',
                        title : 'Abed Khan',
                        subtitle: 'Member'
                    },
                    {
                        imgSrc: '../images/Bahalul-Majnun-Chunnu.jpg',
                        title : 'Bahalul Majnun Chunnu',
                        subtitle: 'Member'
                    },
                    {
                        imgSrc: '../images/user-blank.jpg',
                        title : 'Abdul Aziz Khan',
                        subtitle: 'Member'
                    },
                ]
            }
        }
    }

</script>
<style lang="scss">
    .custom-font-size {
        font-size: 5rem;

    }
</style>
