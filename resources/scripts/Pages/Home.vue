<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>Home</title>
            <meta head-key="description" name="description" content="Home description" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-large glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>
            <div class="glow-red blur-large glow-motion top-[40rem] left-80 w-[12rem] h-[25rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 2s">
            </div>
            <div class="glow-blue blur-medium glow-motion -top-20 -left-44 w-[34rem] h-[34rem] -z-10 opacity-30" aria-hidden="true" style="animation-delay: 4s">
            </div>

            <div class="wrppr">
                <div class="grid h-auto place-items-center animate__animated animate__fadeInUp" aria-hidden="true">
                    <div class="flex items-center lg:block lg:ml-60" style="max-width: 750px">
                        <h1 class="lg:text-8xl md:text-7xl font-extrabold">
                            The experts in
                            the land of IT
                        </h1>
                    </div>
                </div>
                <div class="animate__animated animate__fadeInDownBig" aria-hidden="true">
                    <img src="static/shapes/shape-1.svg" alt="My Happy SVG" />
                </div>
            </div>
            <div class="max-w-full">
                <h2 class="title mb-4 md:text-3xl lg:text-4xl mx-auto text-center"> What we are good at? </h2>
                <div class="flex items-center justify-center flex-wrap gap-2 rounded-[300px] sm:p-6 xl:rounded-full">
                    <div class="flex items-center justify-center aspect-square duration-300 ease
                                flex-col group hover:bg-m-500/10 hover:text-white max-w-[400px]
                                md:px-12 px-8 py-12 rounded-full text-center text-white
                                transition-colors w-full xl:w-1/3"
                    >
                        <img src="static/icons/mind.svg" alt="" />
                        <h3 class="title mb-4 md:text-3xl lg:text-2xl">
                            We solve bussiness problems
                        </h3>
                        <p class="transition-colors duration-300 ease group-hover:text-white leading-6 text-m-500 text-sm max-w-[190px]">
                            Working across the domain with deep technology and business expertise.
                        </p>
                    </div>
                    <div class="flex items-center justify-center aspect-square duration-300 ease
                                flex-col group hover:bg-m-500/10 hover:text-white max-w-[400px]
                                md:px-12 px-8 py-12 rounded-full text-center text-white
                                transition-colors w-full xl:w-1/3"
                    >
                        <img src="static/icons/share.svg" alt="" />
                        <h3 class="title mb-4 md:text-3xl lg:text-2xl">
                            We are highly experienced
                        </h3>
                        <p class="transition-colors duration-300 ease group-hover:text-white leading-6 text-m-500 text-sm max-w-[220px]">
                            Experienced in crafting effective software solutions for different needs and budgets.
                        </p>
                    </div>
                    <div class="flex items-center justify-center aspect-square duration-300 ease
                                flex-col group hover:bg-m-500/10 hover:text-white max-w-[400px]
                                md:px-12 px-8 py-12 rounded-full text-center text-white
                                transition-colors w-full xl:w-1/3"
                    >
                        <img src="static/icons/technology.svg" alt="" />
                        <h3 class="title mb-4 md:text-3xl lg:text-2xl">
                            We are unique blend of expertise & stamina
                        </h3>
                        <p class="transition-colors duration-300 ease group-hover:text-white leading-6 text-m-500 text-sm max-w-[220px]">
                            We do customer software development, technology and consulting.
                        </p>
                    </div>
                </div>
            </div>

            <!--        <div class="container max-w-screen-lg">-->
            <!--            <h2 class="title sm:text-2xl text-lg lg:mb-36 mb-12 md:mb-20 text-center">A white-glove experience.</h2>-->
            <!--            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-x-36 lg:gap-y-28">-->
            <!--                <div class="">-->
            <!--                    <svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M255.9 64c-32 0-63 11.3-87.5 31.9L144 116.4v20.9l34.7-29.2C200.3 90 227.7 80 255.9 80h21.2L294 64H255.9zM112 336V144 128h-8H96 32c-17.7 0-32 14.3-32 32V368c0 17.7 14.3 32 32 32H80c17.7 0 32-14.3 32-32V352h3.4c12.7 0 24.9 5.1 33.9 14.1l20.6 20.6 15.4 15.4 .1 .1 24.4 24.4c22.1 22.1 57.5 23.1 80.8 2.2c1.2-1.1 2.3-2.2 3.4-3.3l4.8 4.8c22.9 22.9 60.3 21.8 81.9-2.4c7.9-8.8 12.4-19.5 13.8-30.4c20.2 10.8 45.6 8.4 63.6-7.5c11.4-10.1 17.7-23.8 18.6-37.9H528v16c0 17.7 14.3 32 32 32h48c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H544h-8-8v16V336H475.4c-2.2-10.1-7.2-19.6-15.1-27.5L360.8 209 375 195.9c3.2-3 3.4-8.1 .5-11.3s-8.1-3.4-11.3-.5l-76 70.2c-16.3 15-41.3 15.3-57.8 .5c-18.9-16.8-19.3-46.1-1-63.5l87.5-82.9c19.3-18.3 45-28.5 71.6-28.5c24.5 0 48.2 8.6 67 24.4L496 138.5V117.6L465.8 92.2C444.1 74 416.7 64 388.5 64c-30.7 0-60.3 11.8-82.6 32.9l-87.5 82.9c-25.1 23.8-24.5 64 1.4 87c22.7 20.2 57 19.9 79.3-.7l50.1-46.2L449 319.8c16.3 16.3 15.5 42.8-1.7 58.1c-15.8 14-39.8 13.3-54.8-1.6l-1-1c-2.5-2.5-6.3-3.1-9.4-1.4s-4.8 5.2-4.1 8.6c2.4 12-.7 24.9-9.4 34.7c-15.4 17.3-42.2 18.1-58.6 1.7l-11.1-11.1c-1.7-1.7-4-2.5-6.4-2.3s-4.5 1.5-5.9 3.5c-1.9 2.8-4.2 5.4-6.9 7.8c-16.9 15.1-42.7 14.4-58.8-1.6l-39.9-39.9-20.6-20.6c-12-12-28.3-18.7-45.3-18.7H112zM96 144V368c0 8.8-7.2 16-16 16H32c-8.8 0-16-7.2-16-16V160c0-8.8 7.2-16 16-16H96zm512 0c8.8 0 16 7.2 16 16V368c0 8.8-7.2 16-16 16H560c-8.8 0-16-7.2-16-16V144h64z"></path></svg> <h3 class="title mb-4">Relationships are everything.</h3> <p class="relative z-10 text-gray-400/60" style="max-width: 340px">You are our priority from Day 1. Anytime, anywhere, anyhow —&nbsp;we have your back.</p>   </div><div class=""><svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M224 16H576c26.5 0 48 21.5 48 48V352c0 26.5-21.5 48-48 48H328.3c3.1 5.2 6 10.5 8.5 16H576c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224c-35.3 0-64 28.7-64 64V96c5.4 0 10.8 .3 16 1V64c0-26.5 21.5-48 48-48zM416 120c0 4.4 3.6 8 8 8h76.7L384 244.7l-74.3-74.3c-3.1-3.1-8.2-3.1-11.3 0s-3.1 8.2 0 11.3l80 80c3.1 3.1 8.2 3.1 11.3 0L512 139.3V216c0 4.4 3.6 8 8 8s8-3.6 8-8V120c0-4.4-3.6-8-8-8H424c-4.4 0-8 3.6-8 8zM133.3 368h53.3C251.5 368 304 420.5 304 485.3c0 5.9-4.8 10.7-10.7 10.7H26.7c-5.9 0-10.7-4.8-10.7-10.7C16 420.5 68.5 368 133.3 368zm0-16C59.7 352 0 411.7 0 485.3C0 500.1 11.9 512 26.7 512H293.3c14.7 0 26.7-11.9 26.7-26.7C320 411.7 260.3 352 186.7 352H133.3zM80 224a80 80 0 1 1 160 0A80 80 0 1 1 80 224zm176 0A96 96 0 1 0 64 224a96 96 0 1 0 192 0z"></path></svg> <h3 class="title mb-4">Our job is to make you look good.</h3> <p class="relative z-10 text-gray-400/60" style="max-width: 340px">We’re here to make you stand out to the people that matter.</p>   </div><div class=""><svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M496 424.1c0 22-17.9 39.9-39.9 39.9H55.9c-22 0-39.9-17.9-39.9-39.9c0-7.5 2.1-14.9 6.1-21.2L130.6 229.9l55.7 55.7c3.1 3.1 8.2 3.1 11.3 0L259.3 224H377.7L489.9 402.9c4 6.4 6.1 13.7 6.1 21.2zM367.6 208H256c-2.1 0-4.2 .8-5.7 2.3L192 268.7l-50.3-50.3-2.3-2.3L238.8 57.5C242.5 51.6 249 48 256 48s13.5 3.6 17.2 9.5L367.6 208zM55.9 480H456.1c30.9 0 55.9-25 55.9-55.9c0-10.5-3-20.8-8.6-29.7L286.8 49c-6.6-10.6-18.3-17-30.8-17s-24.1 6.4-30.8 17L8.6 394.4C3 403.3 0 413.6 0 424.1C0 455 25 480 55.9 480z"></path></svg> <h3 class="title mb-4">Make it Happen.</h3> <p class="relative z-10 text-gray-400/60" style="max-width: 340px">Mountains exist for us to climb them. Our professional experience equips us to tackle any challenge.</p>   </div><div class=""><svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M173.9 15.7C187 5.8 204.8 0 224 0s37 5.8 50.1 15.7S296 39.7 296 56c0 16.4-8.9 30.6-22 40.4c-6.3 4.7-10 10.6-10 16.4c0 8.4 6.8 15.2 15.2 15.2H344c22.1 0 40 17.9 40 40v64.8c0 8.4 6.8 15.2 15.2 15.2c5.8 0 11.7-3.7 16.4-10c9.8-13.2 24-22 40.4-22c16.3 0 30.5 8.8 40.3 21.9S512 268.8 512 288s-5.8 37-15.7 50.1s-24 21.9-40.3 21.9c-16.4 0-30.6-8.9-40.4-22c-4.7-6.3-10.6-10-16.4-10c-8.4 0-15.2 6.8-15.2 15.2V472c0 22.1-17.9 40-40 40H279.2C262 512 248 498 248 480.8c0-12.7 7.8-22.8 16.4-29.2C274.5 444 280 434.2 280 424c0-10.2-5.5-20-15.5-27.5S240.1 384 224 384s-30.4 4.9-40.5 12.5S168 413.8 168 424c0 10.2 5.5 20 15.6 27.6c8.5 6.4 16.4 16.5 16.4 29.2c0 17.2-14 31.2-31.2 31.2H40c-22.1 0-40-17.9-40-40V343.2C0 326 14 312 31.2 312c12.7 0 22.8 7.8 29.2 16.4C68 338.5 77.8 344 88 344c10.2 0 20-5.5 27.5-15.5s12.5-24.3 12.5-40.5s-4.9-30.4-12.5-40.5S98.2 232 88 232c-10.2 0-20 5.5-27.6 15.6C54 256.2 43.9 264 31.2 264C14 264 0 250 0 232.8V168c0-22.1 17.9-40 40-40H168.8c8.4 0 15.2-6.8 15.2-15.2c0-5.8-3.7-11.7-10-16.4c-13.2-9.8-22-24-22-40.4c0-16.3 8.8-30.5 21.9-40.3zm9.6 12.8C173.5 36 168 45.8 168 56c0 10.2 5.5 20 15.6 27.6c8.5 6.4 16.4 16.5 16.4 29.2c0 17.2-14 31.2-31.2 31.2H40c-13.3 0-24 10.7-24 24v64.8c0 8.4 6.8 15.2 15.2 15.2c5.8 0 11.7-3.7 16.4-10c9.8-13.2 24-22 40.4-22c16.3 0 30.5 8.8 40.3 21.9S144 268.8 144 288s-5.8 37-15.7 50.1s-24 21.9-40.3 21.9c-16.4 0-30.6-8.9-40.4-22c-4.7-6.3-10.6-10-16.4-10c-8.4 0-15.2 6.8-15.2 15.2V472c0 13.3 10.7 24 24 24H168.8c8.4 0 15.2-6.8 15.2-15.2c0-5.8-3.7-11.7-10-16.4c-13.2-9.8-22-24-22-40.4c0-16.3 8.8-30.5 21.9-40.3S204.8 368 224 368s37 5.8 50.1 15.7s21.9 24 21.9 40.3c0 16.4-8.9 30.6-22 40.4c-6.3 4.7-10 10.6-10 16.4c0 8.4 6.8 15.2 15.2 15.2H344c13.3 0 24-10.7 24-24V343.2c0-17.2 14-31.2 31.2-31.2c12.7 0 22.8 7.8 29.2 16.4C436 338.5 445.8 344 456 344c10.2 0 20-5.5 27.5-15.5s12.5-24.3 12.5-40.5s-4.9-30.4-12.5-40.5S466.2 232 456 232c-10.2 0-20 5.5-27.6 15.6c-6.4 8.5-16.5 16.4-29.2 16.4C382 264 368 250 368 232.8V168c0-13.3-10.7-24-24-24H279.2C262 144 248 130 248 112.8c0-12.7 7.8-22.8 16.4-29.2C274.5 76 280 66.2 280 56c0-10.2-5.5-20-15.5-27.5S240.1 16 224 16s-30.4 4.9-40.5 12.5z"></path></svg> <h3 class="title mb-4">Companies of All Sizes.</h3> <p class="relative z-10 text-gray-400/60" style="max-width: 340px">We’ve partnered with established Fortune 500s, exciting startups, and everyone in-between.</p>   </div><div class=""><svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M332 11.5C308 4 282.5 0 256 0C114.6 0 0 114.6 0 256S114.6 512 256 512s256-114.6 256-256c0-26.5-4-52-11.5-76l-12.9 12.9c5.5 20.1 8.4 41.2 8.4 63.1c0 132.5-107.5 240-240 240S16 388.5 16 256S123.5 16 256 16c21.8 0 43 2.9 63.1 8.4L332 11.5zm90 218.3c-4.2 .1-8.5-.3-12.8-1l-3.7-.6c1.7 9 2.6 18.4 2.6 27.9c0 83.9-68.1 152-152 152s-152-68.1-152-152s68.1-152 152-152c9.5 0 18.8 .9 27.9 2.6l-.6-3.7c-.7-4.3-1-8.5-1-12.8c-8.6-1.3-17.3-2-26.3-2C163.2 88 88 163.2 88 256s75.2 168 168 168s168-75.2 168-168c0-8.9-.7-17.7-2-26.3zM256 184c-39.8 0-72 32.2-72 72s32.2 72 72 72s72-32.2 72-72c0-4.8-.5-9.5-1.4-14.1L312 256.6c-.3 30.7-25.3 55.4-56 55.4c-30.9 0-56-25.1-56-56c0-30.7 24.8-55.7 55.4-56l14.6-14.6c-4.5-.9-9.2-1.4-14.1-1.4zM407.1 93.6l-65.7 65.7L330.6 94.9c-1.3-7.6 1.2-15.4 6.7-20.9l50.6-50.6 19.1 70.2zm-68.3 90.9l75.7 12.6c12.7 2.1 25.7-2 34.9-11.2l50.6-50.6c8.7-8.7 4.7-23.5-7.1-26.7L422.5 89.5 403.3 19.2c-3.2-11.9-18.1-15.8-26.7-7.1L326 62.7c-9.1 9.1-13.3 22.1-11.2 34.9l12.6 75.7-77.1 77.1c-3.1 3.1-3.1 8.2 0 11.3s8.2 3.1 11.3 0l77.1-77.1zm13.9-13.9l65.7-65.7 70.2 19.2L438 174.7c-5.5 5.5-13.3 8-20.9 6.7l-64.4-10.7z"></path></svg> <h3 class="title mb-4">Dive In Headfirst.</h3> <p class="relative z-10 text-gray-400/60" style="max-width: 340px">Your business is our passion. No industry is too niche; no product is too small.</p>   </div><div class=""><svg class="fill-current h-12 w-12 mb-8 text-gray-400" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="img"><path d="M237.3 22.6c12-5.1 25.5-5.1 37.5 0l176.7 75c16.6 7.1 28.6 23.2 28.5 42.4c-.5 96.6-40.3 270.2-204.5 348.8c-12.3 5.9-26.7 5.9-39 0C72.3 410.1 32.5 236.5 32 139.9c-.1-19.1 11.9-35.3 28.5-42.4l176.7-75zM281 7.8c-16-6.8-34-6.8-50 0L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.8 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L281 7.8zM160 217.9c0-23.2 18.8-41.9 41.9-41.9c11.1 0 21.8 4.4 29.7 12.3L250.3 207c1.5 1.5 3.5 2.3 5.7 2.3s4.2-.8 5.7-2.3l18.7-18.7c7.9-7.9 18.5-12.3 29.7-12.3c23.2 0 41.9 18.8 41.9 41.9v.6c0 10.6-4 20.9-11.2 28.8l-78.9 86.1c-1.5 1.7-3.7 2.6-5.9 2.6s-4.4-.9-5.9-2.6l-78.9-86.1c-7.2-7.8-11.2-18.1-11.2-28.8v-.6zM201.9 160c-32 0-57.9 25.9-57.9 57.9v.6c0 14.7 5.5 28.8 15.4 39.6l78.9 86.1c4.5 5 11 7.8 17.7 7.8s13.1-2.8 17.7-7.8l78.9-86.1c9.9-10.8 15.4-24.9 15.4-39.6v-.6c0-32-25.9-57.9-57.9-57.9c-15.4 0-30.1 6.1-41 17L256 190.1 242.9 177c-10.9-10.9-25.6-17-41-17z"></path></svg>-->
            <!--                <h3 class="title mb-4">Quality and Quantity.</h3>-->
            <!--                <p class="relative z-10 text-gray-400/60" style="max-width: 340px">Our clients expect and get world-class market research, development, design, and consulting services.</p>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--        </div>-->
        </section>
        <section class="list-grid section relative overflow-hidden">
            <div class="glow-red blur-large glow-motion top-32 left-[36rem] w-[10rem] h-[20rem] -z-10" aria-hidden="true" style="animation-delay: 2s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-64 -left-80 w-[50rem] h-[40rem] -z-10" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="bkg-1">
                <div class="left">
                    <div style="max-width: 465px;">
                        <h3>What we do?</h3>
                        <p>
                            Our leadership team has extensive experience in managing leading tech companies and
                            proven track record of delivering successful projects for international clients
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="two-columns-grid">
                        <div class="item border-top-cyan">
                            <img src="static/icons/it-consulting-services.svg" alt="" />
                            <p>
                                IT Consulting Services
                            </p>
                        </div>
                        <div class="item border-top-pink">
                            <img src="static/icons/software-engineering-services.svg" alt="" />
                            <p>
                                Software Engineering services
                            </p>
                        </div>
                        <div class="item border-top-pink">
                            <img src="static/icons/blockchain.svg" alt="" />
                            <p>
                                Blockchain solutions
                            </p>
                        </div>
                        <div class="item border-top-cyan">
                            <img src="static/icons/cloud.svg" alt="" />
                            <p>
                                Cloud solutions
                            </p>
                        </div>
                        <div class="item border-top-cyan">
                            <img src="static/icons/mobile-solutions.svg" alt="" />
                            <p>
                                Mobile solutions
                            </p>
                        </div>
                        <div class="item border-top-pink">
                            <img src="static/icons/cyber-security.svg" alt="" />
                            <p>
                                Cyber security solutions
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-full read-more">
                <a href="#" class="brn-read-more">
                    Read more
                </a>
            </div>

        </section>


        <section class="list-grid section relative overflow-hidden section-2">
            <div class="title align-middle">
                <h3>Our Clients</h3>
            </div>
            <div class="clients">
                <div>
                    <img src="static/home/client-1.svg" alt="" />
                </div>
                <div>
                    <img src="static/home/client-2.svg" alt="" />
                </div>
                <div>
                    <img src="static/home/client-3.svg" alt="" />
                </div>
            </div>
        </section>

        <section class="list-grid section relative overflow-hidden pb-56">
            <div class="glow-red blur-large glow-motion top-[32rem] left-[60rem] w-[15rem] h-[25rem] -z-10" aria-hidden="true" style="animation-delay: 2s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-64 -left-60 w-[40rem] h-[40rem] -z-10" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <section class="section-3">
                <div class="text">
                    <h1>Our partnerships</h1>
                    <p>
                        Our process emphasizes fast, lucrative exits for software founders
                    </p>
                </div>
            </section>
            <div class="bkg-2-wrap">
                <div class="img-wrap">
                    <img src="static/home/partnerships.png" alt="" />
                </div>
                <div class="bkg-2 -z-10">
                </div>
            </div>
        </section>

        <section class="footer">
            <div>
                <h2>LET'S PARTNER UP!</h2>
                <p>Contact us to start your digital journey with us!</p>
            </div>
        </section>

    </Layout>
</template>


<style scoped lang="scss">
.section-1 {
    display: flex;
    flex-direction: row;
}

.bkg-1 {
    display: flex;
    background-image: url("../../../public/static/shapes/shape-2.svg");
    background-repeat: no-repeat, no-repeat;
    background-position-y: bottom;
    min-height: 954px;
    min-width: 903px;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: center;
    gap: 5rem;

    .left {
        display: flex;
        align-items: flex-start;
        align-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        h3 {
            font-family: 'Poppins',serif;
            font-style: normal;
            font-weight: 300;
            font-size: 50px;
            line-height: 75px;
        }
        p {
            font-family: 'DM Sans', serif;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 150%;
            letter-spacing: 0.01em;
        }

    }
    .right {
        .two-columns-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;

            .item {
                width: 17.188rem;
                height: 13.125rem;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                max-width: 275px;
                background: #111117;
                padding: 0.5rem;
                margin: 0.5rem;

                img {
                    margin: auto;
                }

                p {
                    margin: auto;
                    font-family: 'Poppins', sans-serif;
                    font-style: normal;
                    font-weight: 700;
                    font-size: 16px;
                    line-height: 150%;
                    letter-spacing: 0.1em;
                    text-transform: uppercase;
                }
            }
        }
    }
}

.section-3 {
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    width: 100%;
    .text {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        max-width: 28rem;
        margin-top: 10rem;
        margin-left: 55rem;
        h1 {
            font-style: normal;
            font-weight: 300;
            font-size: 50px;
            line-height: 75px;
        }

        p {
            font-family: 'DM Sans', serif;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 150%;
            letter-spacing: 0.01em;
            color: #A1A6B1;
        }
    }
}

.bkg-2-wrap {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-end;
    .img-wrap {
        position: relative;
        right: 12rem;
    }
    .bkg-2 {
        gap: 5rem;
        display: flex;
        background-image: url("../../../public/static/shapes/shape-8.svg");
        background-repeat: no-repeat, no-repeat;
        min-height: 624px;
        min-width: 476px;
        flex-wrap: wrap;
        align-content: flex-end;
        justify-content: center;
    }
}

.read-more {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;

    a {
        padding: 0.75rem;
        margin: 0.75rem 0 8rem 0;
        background: rgba(16, 19, 20);
        border: 1px solid rgba(161, 166, 177);
        border-radius: 4px;
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 150%;
        text-align: center;
    }
}


.section-2 {
    background: linear-gradient(95.48deg, rgba(56, 56, 63, 0.8) 6.15%, rgba(56, 56, 63, 0) 49.51%, rgba(56, 56, 63, 0.56) 93.23%);
    border-top: 1px solid #FFFFFF;
    border-bottom: 1px solid #FFFFFF;
    border-radius: 4px;
    min-height: 380px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: column;
    align-content: center;
    align-items: center;


    .title {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        h3 {
            font-style: normal;
            font-weight: 300;
            font-size: 50px;
            line-height: 75px;
        }
    }

    .clients {
        margin-top: 1rem;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }
}


.footer {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-content: center;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 3rem;
    div {
        background-image: url("../../../public/static/shapes/shape-7.svg");
        background-repeat: no-repeat, no-repeat;
        background-position: center, bottom;
        width: 1289px;
        height: 525px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        flex-wrap: wrap;
        align-items: center;
        h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 90px;
        }
        p {
            font-family: 'DM Sans', serif;
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 150%;
            text-align: center;
            color: #A1A6B1;
        }
    }
}
</style>
