<template>
    <FrontLayout>
    <!-- Banner Starts -->
        <section class="flex items-center justify-center bg-opacity-10 bg-no-repeat bg-cover h-5/6"
            style="background-image: linear-gradient( rgba(0, 44, 48, 0.52), rgba(18,18,231,0.52)),url('../images/timeline.png')">
            <div class="relative flex text-center">
                <h1 class="py-64 text-5xl font-bold text-center text-white "> Timeline</h1>
            </div>
        </section>
        <h1 class="text-center text-4xl text-gray-800 mt-10 mb-8">Abdur Razzaq’s Timeline</h1>
        <section class="container mx-auto w-full h-full">
            <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
                <template v-for="item in timeLineList" :key="item">
                    <!-- right timeline -->
                    <div v-if="item.side === 'right'" class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-orange-500 w-28 h-12 rounded">
                            <span class="mx-auto font-semibold text-lg text-white inline-block align-middle">{{ item.year }}</span>
                        </div>
                        <div class="order-1 bg-green-500 rounded-lg w-5/12 px-6 py-4">
                            <h3 class="mb-2 font-bold text-white text-xl">{{ item.title }}</h3>
                            <span class="text-base leading-snug tracking-wide text-white text-opacity-100 inline-block align-bottom">{{ item.body }}</span>
                        </div>
                    </div>

                    <!-- left timeline -->
                    <div v-else class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                        <div class="order-1 w-5/12"></div>
                        <div class="z-20 flex items-center order-1 bg-orange-500 w-28 h-12 rounded">
                            <span class="mx-auto font-semibold text-white text-lg inline-block align-middle">{{ item.year }}</span>
                        </div>
                        <div class="order-1 bg-green-500 rounded-lg w-5/12 px-6 py-4">
                            <h3 class="mb-2 font-bold text-white text-xl">{{ item.title }}</h3>
                            <span class="text-base leading-snug tracking-wide text-opacity-100 text-white inline-block align-bottom">{{ item.body }}</span>
                        </div>
                    </div>
                </template>
            </div>
        </section>
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'

    export default {
        components: {
            FrontLayout
        },
        data() {
            return {
                timeLineList: [
                    { side: 'right', year: '1942', title: 'Born', body: '1st August at Damudya, British India (now Shariatpur District, Bangladesh).' },
                    { side: 'left', year: '1958', title: 'Secondary School Certificate', body: 'Passing Secondary School Certificate (SSC) from Damudya Muslim High School.' },
                    { side: 'right', year: '1960', title: 'Higher Secondary Certificate', body: 'Passing Higher Secondary Certificate (HSC) from Dhaka College.' },
                    { side: 'left', year: '1960', title: 'Bachelor of Arts', body: 'Enrolling in Bachelor of Arts (BA) in Political Science at the University of Dhaka.' },
                    { side: 'right', year: '1960–1962', title: 'Central Member', body: 'Becoming Central Member of East Pakistan Students League.' },
                    { side: 'left', year: '1962–1963', title: 'Assistant General Secretary', body: 'Unopposed Assistant General Secretary (AGS) of Fazlul Huq Hall (Dhaka University) for two terms.' },
                    { side: 'right', year: '1963–1965', title: 'AGS and GS', body: 'Assistant General Secretary (AGS) of East Pakistan Students League and General Secretary of Fazlul Huq Hall Students Union.' },
                    { side: 'left', year: '1964', title: 'Bachelor of Arts', body: 'Passing Bachelor of Arts (BA) in Political Science from University of Dhaka with distinction.' },
                    { side: 'right', year: '1964', title: 'Masters in Arts', body: 'Enrolling for Masters in Arts (MA) in Political Science at the University of Dhaka.' },
                    { side: 'left', year: '1964', title: 'NUCLEUS', body: 'Forming the ‘NUCLEUS’ as per instruction of Bangabandhu Sheikh Mujibur Rahman along with Shirajul Alam Khan and Kazi Arif to form the initial ideology behind the Six-Point Movement.' },
                    { side: 'right', year: '1964-1965', title: 'Six-Point Movement', body: 'Imprisoned by Ayub regime for active participation in executive of Six-Point Movement.' },
                    { side: 'left', year: '1965–1967', title: 'General Secretary', body: 'General Secretary of East Pakistan Students League for two terms with Mazharul Islam Baki and Ferdous Kureshi respectively.' },
                    { side: 'right', year: '1964-1965', title: 'Six-Point Movement', body: 'Imprisoned by Ayub regime for active participation in executive of Six-Point Movement.' },
                    { side: 'left', year: '1965–1967', title: 'General Secretary', body: 'General Secretary of East Pakistan Students League for two terms with Mazharul Islam Baki and Ferdous Kureshi respectively.' },
                    { side: 'right', year: '1967-1969', title: '', body: 'Imprisoned for the seconnd time for organizing student advocacy for an independent Bangladesh.' },
                    { side: 'left', year: '1969–1972', title: 'Chief', body: 'Chief of Awami Volunteer Core (Sechashebok Bahini).' },
                    { side: 'right', year: '1970', title: 'Member of the Provincial Assembly', body: 'Elected as the Member of the Provincial Assembly (Faridpur 17, Bhedharganj, Damudya) in the 1970 General Election.' },
                    { side: 'left', year: '1971', title: 'Mujib Bhahini – Bangladesh Liberation Force (BLF)', body: 'Gallantly participating in the Liberation War of 1971 as one of the four sector commanders of Meghaloy Division, Mujib Bhahini – Bangladesh Liberation Force (BLF).' },
                    { side: 'right', year: '1973', title: 'LLB', body: 'Passing LLB and enrolling as a lawyer at the High Court.' },
                    { side: 'left', year: '1973–1975', title: 'Organizing Secretary', body: 'Organizing Secretary of Bangladesh Awami League with Bangabandhu Sheikh Mujibur Rahman as the President and Zillur Rahman as the General Secretary.' },
                    { side: 'right', year: '1973', title: 'Member of Parliament ', body: 'Elected as Member of Parliament on the Second National Election (Faridpur Constituency, Goshairhat, Kalkini).' },
                    { side: 'left', year: '1973', title: 'Marriage', body: 'Marrying to Farida Razzaq.' },
                    { side: 'right', year: '1974', title: 'Daughter', body: 'His daughter Tanima Razzaq Rumpa was born.' },
                    { side: 'left', year: '1973', title: 'Marriage', body: 'Marrying to Farida Razzaq.' },
                    { side: 'right', year: '1975–1978', title: 'Secretaries of BAKSAL', body: 'One of the three Secretaries of BAKSAL and a member of the Executive Committee of Bangladesh Krishak Shramik Awami League (BAKSAL) where Bangabandhu Sheikh Mujibur Rahman as the President and Captain Monsur Ali as the General Secretary of the National Party.' },
                    { side: 'left', year: '1975-1978', title: '', body: 'Imprisoned after the assassination of the father of the nation Bangabandhu Sheikh Mujibur Rahman.'},
                    { side: 'right', year: '1978–1981', title: 'General Secretary of Bangladesh Awami League', body: 'General Secretary of Bangladesh Awami League for two terms with former Speaker Malek Ukil and daughter of the father of the nation Sheikh Hasina.' },
                    { side: 'left', year: '1979', title: '', body: 'As the General Secretary of Bangladesh Awami League, he himself did not stand for the Election instead he organized and orchestrated the Election Campaign of the 3rd National Election in which Awami League won 39 seats out of 300 seats – a fight for survival.'},
                    { side: 'right', year: ' 1981–1991', title: 'General Secretary of Bangladesh Awami League', body: 'Re-instituted and acted as the General Secretary of BAKSAL with Mohiuddin Ahmed as President of the party.' },
                    { side: 'left', year: '1981', title: 'Eldest Son', body: 'His eldest son Nahim Razzaq was born.'},
                    { side: 'right', year: ' 1982', title: 'Daughter Passed Away', body: 'His daughter Tanima Razzaq Rumpa passed away.' },
                    { side: 'left', year: '1986', title: '', body: 'Not participating in 4th National Election and protesting from the forefront in organizing movement for establishing a democratic system against the dictatorship of General Ershad.'},
                    { side: 'right', year: '1986', title: 'Youngest Son', body: 'His youngest son Fahim Razzaq was born.' },
                    { side: 'left', year: '1987', title: '', body: 'Imprisoned again for organizing movement for democracy against General Ershad.'},
                    { side: 'right', year: '1991', title: '', body: 'Merging Bangladesh Awami League and BAKSAL.' },
                    { side: 'left', year: '1991–2008', title: 'Presidium Member', body: 'Presidium member of Bangladesh Awami League.'},
                    { side: 'right', year: '1991', title: 'Member of Parliament', body: 'Elected as Member of Parliament from two seats (Madaripur 2: Rajore, Sadar and Shariatpur 3: Damudya, Bhedarganj, Goshairhat) on the 5th National Election and becoming an active parliamentarian.' },
                    { side: 'left', year: '1992', title: 'Ghatak Dalal Nirmul Committee', body: 'Forming Ghatak Dalal Nirmul Committee along with Jahanara Imam and others, a movement demanding the trail for the war criminals of the Liberation War of 1971.'},
                    { side: 'right', year: '1996', title: 'Member of Parliament', body: 'Elected as Member of Parliament from two seats (Sariatpur 1: Palank, Jajira and Shariatpur 3: Damudya, Bhedarganj, Goshairhat) on the 6th National Election.' },
                    { side: 'left', year: '1996-2001', title: 'Minister of Water Resources', body: 'appointed as the Minister of Water Resources.'},
                    { side: 'right', year: '1996', title: 'Ganges Water Treaty', body: 'Being instrumental in organizing and signing the water sharing Ganges Water Treaty with the Government of India.' },
                    { side: 'left', year: '2004', title: 'Injured in Grenade Attack', body: 'Mortally injured in grenade attack on 21 August.'},
                    { side: 'right', year: '2006', title: 'Anti-government movement', body: 'Organizing anti-government movement against BNP-Jamat’s pre-planned 8th National Election.'},
                    { side: 'left', year: '2008', title: 'Member of Parliament', body: 'Elected as Member of Parliament from Sariatpur 3: Damudya, Bhedarganj, Goshairhat on the 9th National Election.'},
                    { side: 'right', year: '2008-2011', title: 'Chairman', body: 'Elected as the Chairman of the Parliamentary Standing Committee of Water Resources Ministry.'},
                    { side: 'left', year: '2008', title: 'Member of Advisory Council', body: 'Member of Advisory Council of Bangladesh Awami League.'},
                    { side: 'right', year: '2009', title: 'Tipaimukh Dam ', body: 'Successfully leading a ten-member parliamentary teams fact-finding mission on Tipaimukh Dam project and visiting India during July–August 2009.'},
                    { side: 'left', year: '2011', title: 'President of Bangladesh Peace Council', body: 'As a veteran advocate for Peace he was elected as the President of Bangladesh Peace Council in its national conference held in June 2010.'},
                    { side: 'right', year: '2011', title: 'Vice President', body: 'Elected as the Vice President of World Peace Council.'},
                    { side: 'left', year: '2011', title: 'Passed away', body: 'Passing away peacefully on 23 December at the age of 69 at King’s College Hospital, London.'},
                ]
            };
        }
    }

</script>

<style lang="scss">


</style>
