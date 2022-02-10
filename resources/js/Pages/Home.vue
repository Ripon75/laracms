<template>
    <FrontLayout>
        <main class="body">
            <section class="section">
                <a-carousel autoplay>
                    <div >
                        <div class="relative flex items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover main-cover before:absolute before:inset-0"
                             style="background-image:url('../images/banner1.png')">
                        </div>
                    </div>
                    <div >
                        <div class="relative flex items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover main-cover before:absolute before:inset-0"
                             style="background-image:url('../images/banner2.jpg')">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center w-full h-screen bg-no-repeat bg-cover main-cover justify-end pr-20 " style="background-image:url('../images/banner3.jpg')">
                            <div class="flex flex-col space-y-2 text-right bg-primary bg-opacity-60 px-8 py-6 rounded-lg shadow-2xl">
                                <h1 class="text-white sec-title">Lorem Ipsum is simply dummy text</h1>
                                <h2 class="pb-1 text-white sec-title-extra ">of the printing and typesetting industry.</h2>
                                <h6 class="pb-1 text-white sec-subtitle">Lorem Ipsum has been the industry's standard</h6>
                                <h6 class="text-white sec-subtitle">dummy text ever since the 1500s.</h6>
                                <!-- <button @click="onClickNavItem('front.support-us')" class="px-6 py-1 mx-auto text-2xl font-bold bg-white border rounded-full w-60 text-primary">DONATE NOW</button> -->
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="relative flex items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover main-cover before:absolute before:inset-0" style="background-image:url('../images/banner4.jpeg')">
                            <div class="relative flex flex-col text-center">
                                <span class="mb-4 text-white sec-title bg-primary bg-opacity-60 px-8 py-2 rounded-lg shadow-2xl align-middle">Lorem Ipsum is simply dummy text</span>
                                <div class="bg-primary bg-opacity-60 px-8 py-6 rounded-lg shadow-2xl">
                                    <h2 class="pb-1 text-white sec-title-extra">of the printing and typesetting industry.</h2>
                                    <hr class="w-5/6 mx-auto border">
                                    <h6 class="pb-1 text-white sec-subtitle">Lorem Ipsum has been the industry's standard</h6>
                                    <h6 class="text-white sec-subtitle">dummy text ever since the 1500s.</h6>
                                </div>
                                <!-- <button @click="onClickNavItem('front.support-us')" class="px-6 py-1 mx-auto text-2xl font-bold bg-white border rounded-full w-60 text-primary">DONATE NOW</button> -->
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="relative flex items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover main-cover before:absolute before:inset-0" style="background-image:url('../images/banner5.jpg')">
                            <div class="relative flex flex-col text-center">
                                <span class="mb-4 text-white sec-title bg-primary bg-opacity-60 px-8 py-2 rounded-lg shadow-2xl align-middle">Lorem Ipsum is simply dummy text</span>
                                <div class="bg-primary bg-opacity-60 px-8 py-6 rounded-lg shadow-2xl">
                                    <h2 class="pb-1 text-white sec-title-extra">of the printing and typesetting industry.</h2>
                                    <hr class="w-5/6 mx-auto border">
                                    <h6 class="pb-1 text-white sec-subtitle">Lorem Ipsum has been the industry's standard</h6>
                                    <h6 class="text-white sec-subtitle">dummy text ever since the 1500s.</h6>
                                </div>
                                <!-- <button @click="onClickNavItem('front.support-us')" class="px-6 py-1 mx-auto text-2xl font-bold bg-white border rounded-full w-60 text-primary">DONATE NOW</button> -->
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="relative flex items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover main-cover before:absolute before:inset-0" style="background-image:url('../images/banner6.png')">
                            <div class="relative flex flex-col text-center">
                                <span class="mb-4 text-white sec-title bg-primary bg-opacity-60 px-8 py-2 rounded-lg shadow-2xl align-middle">Lorem Ipsum is simply dummy text</span>
                                <div class="bg-primary bg-opacity-60 px-8 py-6 rounded-lg shadow-2xl">
                                    <h2 class="pb-1 text-white sec-title-extra">of the printing and typesetting industry.</h2>
                                    <hr class="w-5/6 mx-auto border">
                                    <h6 class="pb-1 text-white sec-subtitle">Lorem Ipsum has been the industry's standard</h6>
                                    <h6 class="text-white sec-subtitle">dummy text ever since the 1500s.</h6>
                                </div>
                                <!-- <button @click="onClickNavItem('front.support-us')" class="px-6 py-1 mx-auto text-2xl font-bold bg-white border rounded-full w-60 text-primary">DONATE NOW</button> -->
                            </div>
                        </div>
                    </div>
                </a-carousel>
            </section>

            <!----------------------Welcome message----------------------------->
            <section class="section container mx-auto mt-16 sm:mt-16 md:mt-20 lg:mt-20 xl:mt-20 2xl:mt-20 mb-16 sm:mb-16 md:mb-20 lg:mb-20 xl:mb-20 2xl:mb-20">
                <div class="mb-10 sm:mb-10 md:mb-10 lg:mb-10 xl:mb-16 2xl:mb-16 text-center">
                    <h1 class="sec-title mb-6 text-primary">Welcome To Abdur Razzaq Foundation</h1>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2">
                    <div class="col-span-1">
                        <p class="pb-4 text-lg text-center">Abdur Razzaq Foundation (ARF) was formed in 2013 to address concerns of human rights abuse and denial of rights, and provide social services for the most suffered populations in Bangladesh.</p>
                        <p class="text-lg text-center">The Foundation is directly benefitting many people and their families every year through different welfare projects on education, training and career development, social activities, medical, healthcare and women empowerment.</p>
                        <div class="space-x-4 space-y-4 text-center mt-8 sm:mt-8 md:mt-8 lg:mt-12 xl:mt-9 2xl:mt-14">
                            <a @click="onClickNavItem('front.our-work')" class="text-base font-semibold px-2 sm:px-2 md:px-4 lg:px-6 xl:px-6 2xl:px-6 py-2 sm:py-2 md:py-2 lg:py-2 xl:py-2 2xl:py-2 border rounded-md border-primary text-primary hover:text-white hover:bg-primary transition duration-300 ease-in-out">What We Do</a>
                            <a @click="onClickNavItem('front.about-us.missionvision')" class="text-base font-semibold px-2 sm:px-2 md:px-4 lg:px-6 xl:px-6 2xl:px-6 py-2 sm:py-2 md:py-2 lg:py-2 xl:py-2 2xl:py-2 border rounded-md border-primary text-primary hover:text-white hover:bg-primary transition duration-300 ease-in-out">Mission &amp; Vision</a>
                            <a @click="onClickNavItem('front.biography')" class="text-base font-semibold px-2 sm:px-2 md:px-4 lg:px-6 xl:px-6 2xl:px-6 py-2 sm:py-2 md:py-2 lg:py-2 xl:py-2 2xl:py-2 border rounded-md border-primary text-primary hover:text-white hover:bg-primary transition duration-300 ease-in-out">Take a Look</a>
                        </div>
                    </div>
                    <div class="col-span-1 items-center justify-self-center mt-10 sm:mt-10 md:mt-10 lg:mt-4 xl:mt-0 2xl:mt-0">
                        <iframe width="460px" height="250px" class="rounded-md" src="https://www.youtube.com/embed/WhwymCpBvbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="flex justify-center mt-8 sm:mt-8 md:mt-8 lg:mt-4 xl:mt-2 2xl:mt-2">
                            <a href="https://www.youtube.com/c/AbdurRazzaqFoundation/videos" alt="Youtube video player" class="inline-flex items-center text-sm px-2 py-1 hover:bg-primary hover:text-white border-primary border text-primary rounded" target="_blank">
                                Watch More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!------------------Focus Area----------------->
            <section class="section bg-gray-200 pt-16 sm:pt-16 md:pt-20 lg:pt-20 xl:pt-20 2xl:pt-20 pb-16 sm:pb-16 md:pb-20 lg:pb-20 xl:pb-20 2xl:pb-20">
                <div class="container mx-auto">
                        <div class="text-center">
                            <h1 class="sec-title mb-6 text-primary">Focus Area</h1>
                        </div>
                    <div class="mt-16 grid grid-cols-1 gap-6 text-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4">
                        <div class="card-cc active red-card bg-card">
                            <div class="icon"></div>
                            <div class="title">Education</div>
                            <div class="title"></div>
                            <a @click="onClickNavItem('front.our-wrok.education')" class="action ">Learn More</a>
                        </div>
                        <div class="card-cc active blue-card  bg-card">
                            <div class="icon-four"></div>
                            <div class="title">Training &amp; Career Development</div>
                            <a @click="onClickNavItem('front.our-wrok.training-career-development')" class="action">Learn More</a>
                        </div>
                        <div class="card-cc active yellow-card bg-card">
                            <div class="icon-three"></div>
                            <div class="title">Social Activities</div>
                            <div class="title"></div>
                            <a @click="onClickNavItem('front.our-wrok.social-activities')" class="action">Learn More</a>
                        </div>
                        <div class="card-cc active green-card bg-card">
                            <div class="icon-two"></div>
                            <div class="title">Medical &amp; Healthcare</div>
                            <div class="title"></div>
                            <a @click="onClickNavItem('front.our-wrok.medical-healthcare')" class="action">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <!---------------Total life touched--------------->
            <section class="section">
                <div class="relative bg-center w-full bg-no-repeat bg-cover" style="background-image:url('../images/hand-bg.jpg'); height:750px">
                    <div class="absolute bottom-0 right-0 grid grid-cols-12 gap-4">
                        <div class="col-span-12 col-start-1 px-4 sm:col-span-8 md:col-span-8 lg:col-span-6 xl:col-span-5 2xl:col-span-4 sm:col-start-3 md:col-start-3 lg:col-start-6 xl:col-start-6 2xl:col-start-7">
                            <div class="flex flex-col items-center px-20 py-20 bg-white bg-opacity-70 rounded-t-xl">
                                <div class="mb-8"><img class="w-32 icon" src="images/icons/life-touched.png"></div>
                                <span class="mb-8 text-4xl font-bold text-primary">Total Life Touched</span>
                                <span class="mb-8 font-bold text-8xl text-primary">2,464</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TODO: Remove this section after complete this project -->
            <!-----------------Feature Programs-not recommended----------------->
            <section v-show="false" class="section container mx-auto mt-32 mb-28">
                <h1 class="text-center sec-title text-primary">Feature Programs</h1>
                <div class="mt-20 grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4">
                    <!-- TODO: using hover effects -->
                    <div class="col-span-1" v-for="item in 4" :key="item">
                        <div class="card-feature relative bg-primary w-full">
                            <div class="content-box w-full">
                                <Images class="w-full h-auto" imagepath="images/features-2.bmp"/>
                                <div class="wrapper px-4 py-2 bg-primary">
                                    <h1 class="title text-2xl font-bold text-white">Lorem ipsum</h1>
                                    <h3 class="subtitle text-sm text-white">Lorem Ipsum is simply dummy text </h3>
                                </div>
                            </div>
                              <!----------hover next card--------->
                            <div class="card-fh">
                                <div class="wrapper flex flex-col items-center justify-center bg-primary w-full h-full">
                                    <h1 class="title text-2xl font-bold text-white">Lorem Ipsum</h1>
                                    <h3 class="subtitle text-sm text-white">Lorem Ipsum is simply dummy text of</h3>
                                    <button class="icon-btn mt-4 px-4 py-1 text-white border rounded-full">Learn More <i class="px-2 fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--------------------Latest News --------------------->
            <section class="section mt-20 sm:mt-20 md:mt-20 lg:mt-20 xl:mt-20 2xl:mt-20 mb-20 sm:mb-20 md:mb-20 lg:mb-20 xl:mb-20 2xl:mb-20">
                <div class="container mx-auto">
                    <div class="text-center">
                        <h1 class="sec-title mb-6 text-primary">Latest News</h1>
                    </div>
                    <div class="mt-16 grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4">
                        <template v-for="item in newsletterList" :key="item">
                            <div class="col-span-1">
                                <!--------news-card--------->
                                <div class="news-card">
                                    <div class="cover-img">
                                        <Images class="img-wrapper" :imagepath="item.imgSrc"/>
                                    </div>
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <!-- <button class="tag-btn">Volunteer</button> -->
                                            <a :href="item.link"
                                            target ="_blank" class="news-title font-kp">{{ item.title }}</a>
                                            <p class="description line-clamp-3 font-kp">{{ item.body }}</p>
                                        </div>
                                        <div class="footer">
                                            <!-- <div class="user">
                                                <div class="user-img">
                                                    <Images class="w-10 h-10 rounded-full" imagepath="images/user.jpg"/>
                                                </div>
                                                <span class="user-name">Lorem ipsum</span>
                                            </div> -->
                                            <div class="entry-date">
                                                <span class="icon"><i class="fas fa-calendar-week"></i></span>
                                                <span class="date">{{ item.date }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <!-- Read more btn -->
                    <div class="flex items-center justify-center mt-8">
                        <a @click="onClickNavItem('front.newsletter')" class="inline-flex items-center px-4 py-2 border border-primary text-primary hover:text-white rounded-md bg-white hover:bg-primary" target="_blank">Read More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            <!--------------------Md. Abdur Razzaq------------------------>
            <section class="section">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2">
                    <div class="col-span-1">
                        <Images class="" imagepath="images/Abdur-Razzaq.jpg"/>
                    </div>
                    <div class="flex items-center col-span-1 pl-12 bg-primary">
                        <div class="pt-8 pb-8 px-4">
                            <h1 class="pb-4 text-white sec-title">Md. Abdur Razzaq</h1>
                            <div class="w-full text-white sm:w-full md:w-full lg:w-full xl:w-2/3 2xl:w-2/3">
                                <p class="pb-4 text-lg">National Hero, National Leader, One of the top Organisers
                                    of our Liberation War ’71 (Mujib Bahini), A
                                    Nationalist, Ex Minister, Veteran Member of Parliament
                                    and Organiser.
                                </p>
                                <p class="pb-4 text-lg" >Assumed office in Parliament 1970 (Member, Provincial
                                    Assembly) Member of Bangladesh Parliament
                                    1973, 1991, 1996, 2001, 2008 Minister of Water Resources
                                    Government of the People’s Republic of
                                    Bangladesh 1996-2001
                                </p>
                            </div>
                            <a @click="onClickNavItem('front.biographyinfo')" class="inline-flex items-center px-4 py-2 text-white hover:text-white border rounded-md">Read More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!------------------Our Contribution---------------- -->
            <section class="section container mx-auto mt-20 sm:mt-20 md:mt-20 lg:mt-20 xl:mt-20 2xl:mt-20 mb-20 sm:mb-20 md:mb-20 lg:mb-20 xl:mb-20 2xl:mb-20">
                    <h1 class="sec-title mb-6 text-center text-primary">Our Contribution To Sustainable Development Goals</h1>
                    <!-- <h3 class="sec-subtitle text-center">Lorem Ipsum is simply dummy text of</h3> -->
                <div class="mt-16 grid grid-cols-2 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 2xl:grid-cols-6">
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g1.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g2.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g3.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g4.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g5.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g6.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g8.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g10.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g11.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g13.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g16.png"/>
                    </div>
                    <div class="col-span-1">
                        <Images class="" imagepath="images/g17.png"/>
                    </div>
                </div>
            </section>
        </main>
    </FrontLayout>
</template>

<script>
    import { defineComponent } from 'vue'
    import Images from '@/Jetstream/Images.vue'
    import FrontLayout from '@/Layouts/FrontLayout.vue'

    export default defineComponent({
        components: {
            Images,
            FrontLayout
        },
        data () {
            return {
                newsletterList: [
                    {
                        imgSrc: 'images/oxygen-news.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/08/01/%e0%a6%85%e0%a6%95%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%a8-%e0%a6%8f%e0%a6%b0-%e0%a6%85%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%8f%e0%a6%95%e0%a6%9c%e0%a6%a8-%e0%a6%95%e0%a6%b0/',
                        title: 'অক্সিজেন এর অভাবে একজন করোনা রোগী ও মারা যাবে নাঃ নাহিম রাজ্জাক এমপি',
                        body: 'আব্দুর রাজ্জাক ফাউন্ডেশনের উদ্যেগে বিনামূল্যে অক্সিজেন সিলিন্ডার, অক্সিমিটার, মাক্স, পিপিই করোনায় আক্রান্ত রোগীর মাঝে ত্রান সামগ্রী বিতরণ করা হয়।',
                        date: '1 Aug, 2021'
                    },
                    {
                        imgSrc: 'images/oxygen-donate.jpg',
                        link: 'https://bangla52news.com/news/11256/',
                        title: 'আব্দুর রাজ্জাক ফাউন্ডেশন এর উদ্যোগে অক্সিজেন ও ত্রান বিতরণ করেন নাহিম রাজ্জাক এমপি',
                        body: 'শরীয়তপুরের ডামুড্যা উপজেলায় লকডাউনের কারণে ঘরবন্ধী ২ শতাধিক বেকার ও অসহায় অটো চালকদের মাঝে প্রধানমন্ত্রীর উপহার খাদ্যসামগ্রী বিতরণ করা হয়েছে।',
                        date: '1 Aug, 2021'
                    },
                    {
                        imgSrc: 'images/football.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/06/17/%e0%a6%ad%e0%a7%87%e0%a6%a6%e0%a6%b0%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%86%e0%a6%ac%e0%a7%8d%e0%a6%a6%e0%a7%81%e0%a6%b2-%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%95/',
                        title: 'ভেদরগঞ্জে আব্দুল রাজ্জাক স্মৃতি গোল্ডকাপ ফুটবল টুর্নামেন্ট ২০২১ উদ্বোধন অনুষ্ঠিত',
                        body: 'ভেদরগঞ্জ উপজেলায় তরুণ ফুটবলারদের আয়োজনে আব্দুর রাজ্জাক স্মৃতি ফুটবল গোল্ডকাপ ফুটবল টুর্নামেন্ট ২০২১ উদ্বোধন অনুষ্ঠিত হয়েছে।',
                        date: '17 June, 2021'
                    },
                    {
                        imgSrc: 'images/treeplantation.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/06/17/%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%bf-%e0%a6%aa%e0%a7%82%e0%a6%b0%e0%a7%8d%e0%a6%ac-%e0%a6%ae%e0%a6%be%e0%a6%a6%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%aa%e0%a7%81%e0%a6%b0-%e0%a6%95/',
                        title: 'সরকারি পূর্ব মাদারীপুর কলেজে বৃক্ষরোপণ করলেন নাহিম রাজ্জাক এমপি',
                        body: 'বৃক্ষরোপণে অংশ নিয়ে সংসদ সদস্য নাহিম রাজ্জাক এমপি বলেন, ‘মুজিববর্ষ উপলক্ষে প্রধানমন্ত্রীর নির্দেশে সরকারি পূর্ব মাদারীপুর কলেজের বৃক্ষরোপণ করতে পেরে নিজেকে ধন্য মনে করছি।',
                        date: '17 June, 2021'
                    },
                ]
            };
        },
         methods: {

        onClickNavItem(routeName) {
            this.$inertia.visit(route(routeName), {method: 'get'});
        }
    }
    })
</script>

<style scoped lang="scss">

.ant-carousel :deep(.slick-slide) {
  text-align: center;
  height: auto;
  line-height: auto;
  overflow: hidden;
}

.ant-carousel :deep(.slick-slide h3) {
  color:#fff;
}
</style>
