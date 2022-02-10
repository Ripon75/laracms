<template>
    <FrontLayout>
        <!-- Banner -->
        <section class="container mx-auto">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="col-span-2 md:col-span-1 lg:col-span-1">
                    <img src="images/zakat-donation.jpg" alt="zakat-donation">
                </div>
                <div class="col-span-2 md:col-span-1 lg:col-span-1 flex flex-wrap content-center mx-4">
                    <p class="text-justify text-lg mb-4">You can help to change a lives and change the
                        society forever through our donation campaign. It lets you gift life-changing benefits to the
                        marginalized communities who are really needy. Your donation will ensure that the people receive
                        support through every phase of their.
                    </p>
                    <p class="text-justify text-lg">Help the communities to discover the joy of learning and join us in our efforts to make them stronger, resilient and happy.</p>
                </div>
            </div>
        </section>

        <!-- Banneer Ends -->
        <section class="container mx-auto mt-14">
            <form class="w-full">
                <h4 class="text-base pb-2">Support us through one of the following ways:</h4>
                <h1 class="pb-4 text-4xl">Banking information</h1>
                <p class="text-lg"><strong class="mr-2">*Note: </strong>These are merchant account. Please choose the <span class="font-semibold italic">Payment</span> option from the menu. And mention your <span class="font-semibold italic">e-mail</span> address in the reference option.</p>
                <!-- ------------------- -->
                <select class="mb-5 rounded border-primary " id="mySelect" @change="myFunction">
                    <option value="0">Select a banking method</option>
                    <option value="1">Mobile Banking</option>
                    <option value="2">Bank Account</option>
                </select>
                <!-- ==================== -->

                <!-- Bank Account -->
                <div id="bankAccount" class="grid grid-cols-2 gap-4" v-if="showBank">

                    <div class="col-span-2 md:col-span-1 lg:col-span-1">
                        <input class="block w-full px-8 py-4 leading-tight text-gray-700 border border-primary   rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="A/C Name*">
                    </div>
                    <div class="col-span-2 md:col-span-1 lg:col-span-1">
                        <input class="block w-full px-8 py-4 leading-tight text-gray-700 border border-primary   rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="A/C NO*">
                    </div>
                    <div class="col-span-2 md:col-span-1 lg:col-span-1">
                        <input class="block w-full px-8 py-4 leading-tight text-gray-700 border border-primary   rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Bank Name*">
                    </div>
                    <div class="col-span-2 md:col-span-1 lg:col-span-1">
                        <input class="block w-full px-8 py-4 leading-tight text-gray-700 border border-primary   rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Branch Name*">
                    </div>
                </div>
                <!-- Bank Account Ends -->


                <!-- Mobile Account  -->
                <div id="mobileBank" class="grid grid-cols-2 gap-4" v-if="showMobile">
                    <div class="col-span-2 md:col-span-1 lg:col-span-1">
                        <input class="block w-full px-8 py-4 leading-tight text-gray-700 border border-primary rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Account number*">
                    </div>

                    <div class="block col-span-2 md:col-span-1 lg:col-span-1 gap-2">
                        <span class="text-gray-700 text-lg">Select method</span>
                        <div class="mt-2 flex">
                            <div class="px-3">
                                <label class=" items-center">
                                    <input type="radio" class="form-radio" name="radio" value="1" checked>
                                    <span class="ml-2 text-lg">Bkash</span>
                                </label>
                            </div>
                            <div class="px-3">
                                <label class=" items-center">
                                    <input type="radio" class="form-radio" name="radio" value="2">
                                    <span class="ml-2 text-lg">Nagad</span>
                                </label>
                            </div>
                            <div class="px-3">
                                <label class=" items-center">
                                    <input type="radio" class="form-radio" name="radio" value="3">
                                    <span class="ml-2 text-lg">Rocket</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Account Ends -->

                <button id="showSubmit" v-if="showSubmit"
                    class="px-8 py-3 mt-5 font-bold text-white text-lg bg-blue-500 rounded hover:bg-blue-700">
                    Proceed to Payment
                </button>
            </form>
            <div class="content-center mt-8 mb-8 text-center">
                <h3 class="mb-5 text-2xl"> We Accept</h3>
                <div class="flex items-center justify-center">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/visa-card-logo-9.png"
                        alt="">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/mastercard-logo.png"
                        alt="">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/amex.png" alt="">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/bkash.png" alt="">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/city.png" alt="">
                    <img class="w-10"
                        src="https://sajidafoundation.org/wp-content/themes/wp-pray/assets/images/ipay.png" alt="">
                </div>
            </div>

        </section>
    </FrontLayout>
</template>

<script>
    import FrontLayout from '@/Layouts/FrontLayout.vue'

    export default {
        data() {
            return {
                showMobile: false,
                showBank: false,
                showSubmit: false
            }
        },
        components: {
            FrontLayout
        },
        methods: {
            myFunction() {
                this.showSubmit = true;
                const x = document.getElementById("mySelect").value;
                if (x == 1) {
                    this.showMobile = true;
                    this.showBank = false;
                }
                if (x == 2) {
                    this.showBank = true;
                    this.showMobile = false;
                }
                console.log(x);
            }
        }
    }

</script>

<style lang="scss">

    .custom-font-size {
        font-size: 5rem;
    }

    .bg-blue-100m {
        background-color: #D6DFFA;
    }

</style>
