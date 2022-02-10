<template>
    <FrontLayout>
        <main class="body">
             <!--------------------Latest News --------------------->
            <section class="section mt-10 mb-20 sm:mb-20 md:mb-20 lg:mb-20 xl:mb-20 2xl:mb-20">
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
                        imgSrc: 'images/treeplantation.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/06/17/%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a6%bf-%e0%a6%aa%e0%a7%82%e0%a6%b0%e0%a7%8d%e0%a6%ac-%e0%a6%ae%e0%a6%be%e0%a6%a6%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%aa%e0%a7%81%e0%a6%b0-%e0%a6%95/',
                        title: 'সরকারি পূর্ব মাদারীপুর কলেজে বৃক্ষরোপণ করলেন নাহিম রাজ্জাক এমপি',
                        body: 'বৃক্ষরোপণে অংশ নিয়ে সংসদ সদস্য নাহিম রাজ্জাক এমপি বলেন, ‘মুজিববর্ষ উপলক্ষে প্রধানমন্ত্রীর নির্দেশে সরকারি পূর্ব মাদারীপুর কলেজের বৃক্ষরোপণ করতে পেরে নিজেকে ধন্য মনে করছি।',
                        date: '17 June, 2021'
                    },
                    {
                        imgSrc: 'images/educational-institutional-visit.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/06/17/%e0%a6%a1%e0%a6%be%e0%a6%ae%e0%a7%81%e0%a6%a1%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a7%9f-%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a6%bf%e0%a6%a8%e0%a7%8d%e0%a6%a8-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be/',
                        title: 'ডামুড্যায় বিভিন্ন শিক্ষা প্রতিষ্ঠান পরিদর্শন করলেন নাহিম রাজ্জাক এমপি',
                        body: 'শরীয়তপুর জেলার ডামুড্যা উপজেলার কয়েকটি শিক্ষা প্রতিষ্ঠান পরিদর্শন করেছেন শরীয়তপুর -৩ আসনের সংসদ সদস্য জননেতা নাহিম রাজ্জাক এমপি ।',
                        date: '17 june, 2021'
                    },
                    {
                        imgSrc: 'images/football.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/06/17/%e0%a6%ad%e0%a7%87%e0%a6%a6%e0%a6%b0%e0%a6%97%e0%a6%9e%e0%a7%8d%e0%a6%9c%e0%a7%87-%e0%a6%86%e0%a6%ac%e0%a7%8d%e0%a6%a6%e0%a7%81%e0%a6%b2-%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%95/',
                        title: 'ভেদরগঞ্জে আব্দুল রাজ্জাক স্মৃতি গোল্ডকাপ ফুটবল টুর্নামেন্ট ২০২১ উদ্বোধন অনুষ্ঠিত',
                        body: 'ভেদরগঞ্জ উপজেলায় তরুণ ফুটবলারদের আয়োজনে আব্দুর রাজ্জাক স্মৃতি ফুটবল গোল্ডকাপ ফুটবল টুর্নামেন্ট ২০২১ উদ্বোধন অনুষ্ঠিত হয়েছে।',
                        date: '17 June, 2021'
                    },
                    {
                        imgSrc: 'images/Eid-gretings.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/07/19/%e0%a6%b6%e0%a6%b0%e0%a7%80%e0%a7%9f%e0%a6%a4%e0%a6%aa%e0%a7%81%e0%a6%b0-%e0%a7%a9-%e0%a6%8f%e0%a6%b0-%e0%a6%b8%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%b8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%87%e0%a6%b0/',
                        title: 'শরীয়তপুর-৩ এর সর্বস্তরের জনগনসহ দেশবাসীকে পবিত্র ঈদ-উল-আযহার শুভেচ্ছা জানিয়েছেন নাহিম রাজ্জাক এম.পি।',
                        body: 'শরীয়তপুর-৩ এর সর্বস্তরের জনগণসহ দেশবাসীকে পবিত্র ঈদ-উল আযহার শুভেচ্ছা জানিয়েছেন শরীয়তপুর – ৩ আসনের সংসদ সদস্য আলহাজ্ব নাহিম রাজ্জাক এম।পি। মুসলিম ধর্মাল্মবিদের সবচেয়ে বড় উৎসব পবিত্র ঈদ-উল আযহা।',
                        date: '19 July, 2021'
                    },
                    {
                        imgSrc: 'images/oxygen-news.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/08/01/%e0%a6%85%e0%a6%95%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%a8-%e0%a6%8f%e0%a6%b0-%e0%a6%85%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%8f%e0%a6%95%e0%a6%9c%e0%a6%a8-%e0%a6%95%e0%a6%b0/',
                        title: 'অক্সিজেন এর অভাবে একজন করোনা রোগী ও মারা যাবে নাঃ নাহিম রাজ্জাক এমপি',
                        body: 'আব্দুর রাজ্জাক ফাউন্ডেশনের উদ্যেগে বিনামূল্যে অক্সিজেন সিলিন্ডার, অক্সিমিটার, মাক্স, পিপিই করোনায় আক্রান্ত রোগীর মাঝে ত্রান সামগ্রী বিতরণ করা হয়।',
                        date: '1 August, 2021'
                    },
                    {
                        imgSrc: 'images/corona.jpg',
                        link: 'https://swanirvarshariatpur.com/2021/07/26/%e0%a6%86%e0%a6%ac%e0%a7%8d%e0%a6%a6%e0%a7%81%e0%a6%b0-%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%95-%e0%a6%ab%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a7%87%e0%a6%b6%e0%a6%a8/',
                        title: 'আব্দুর রাজ্জাক ফাউন্ডেশনের পক্ষ থেকে করোনায় মৃত্যু ব্যক্তিদের দাফন কাফনের জন্য সরঞ্জাম বিতরন',
                        body: 'মাননীয় প্রধানমন্ত্রী শেখ হাসিনার নির্দেশক্রমে, শরীয়তপুর – ৩ আসনের সংসদ সদস্য আলহাজ্ব নাহিম রাজ্জাক এমপির সহযোগীতায় আবদুর রাজ্জাক ফাউন্ডেশনের উদ্যোগ এ ভেদরগঞ্জ থানায় করোনায় মৃত্যু ব্যাক্তিদ্বের দাফন-কাফনের জন্য একটি টিম তৈরি করা হয়।',
                        date: '26 July, 2021'
                    },
                    {
                        imgSrc: 'images/oxygen.jpg',
                        link: 'https://bangla52news.com/news/11256/',
                        title: 'আব্দুর রাজ্জাক ফাউন্ডেশন এর উদ্যোগে অক্সিজেন ও ত্রান বিতরণ করেন নাহিম রাজ্জাক এমপি',
                        body: 'অক্সিজেন সিলিন্ডার, অক্সিমিটার, মাস্ক, পিপিইসহ করোনায় আক্রান্ত রোগীর পরিবারের ও অট্রো শ্রমিকদের মাঝে ত্রান সামগ্রী বিতরণ করেন শরীয়তপুর ৩ আসনের সংসদ সদস্য আলহাজ্ব নাহিম রাজ্জাক এমপি।',
                        date: '1 Aug, 2021'
                    }
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

</style>
