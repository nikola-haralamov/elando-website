<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>Technology</title>
            <meta head-key="description" name="description" content="Technology description" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="pages big">
                <div class="wrapper">
                    <h1>Technology</h1>
                    <p>
                        eLando provides a complete range of software development and IT consulting services,
                        leveraging over a decade of experience and extensive knowledge of the latest technologies.
                        Our team of expert IT professionals from diverse fields collaborates to offer advanced and fully
                        integrated solutions that enable companies to capitalize on fresh
                        possibilities and gain a competitive edge.
                    </p>
                </div>

                <section class="technology">
                    <hr class="border-top-cyan" />
                    <h2>Front-end</h2>
                    <p>
                        Front-end development involves creating and implementing the user interface
                        of a website or application, focusing on the visual and interactive elements
                        that users directly interact with. It requires a combination of coding skills,
                        design principles, and usability considerations to deliver an
                        engaging and intuitive user experience.
                    </p>
                    <div class="items" data-columns="5">
                        <div class="item border-top-pink">react</div>
                        <div class="item border-top-pink">angular</div>
                        <div class="item border-top-pink">vue.js</div>
                        <div class="item border-top-pink">java script</div>
                        <div class="item border-top-pink">html & css</div>
                    </div>
                </section>


                <section class="technology">
                    <hr class="border-top-cyan" />
                    <h2>Back-end</h2>
                    <p>
                        Backend refers to the underlying components and functionality that power a software
                        application or website, often unseen by users. It includes server-side operations,
                        databases, and the logic that handles data processing,
                        user authentication, and the communication between the server and the client.
                    </p>
                    <div class="items" data-columns="3">
                        <div class="item border-top-pink">java</div>
                        <div class="item border-top-pink">node js</div>
                        <div class="item border-top-pink">.net</div>
                        <div class="item border-top-pink">unity</div>
                        <div class="item border-top-pink">python</div>
                        <div class="item border-top-pink">ruby on rails</div>
                    </div>
                </section>


                <section class="technology">
                    <hr class="border-top-cyan" />
                    <h2>Mobile</h2>
                    <p>
                        Mobile app development involves utilizing various technologies to create applications
                        for mobile devices such as smartphones and tablets. These technologies include
                        programming languages like Swift (for iOS) and Java or Kotlin (for Android),
                        frameworks such as React Native and Flutter for cross-platform development,
                        and tools like Xcode and Android Studio for building, testing, and deploying mobile apps.
                    </p>
                    <div class="items" data-columns="4">
                        <div class="item border-top-pink">ios</div>
                        <div class="item border-top-pink">android</div>
                        <div class="item border-top-pink">flutter</div>
                        <div class="item border-top-pink">react native</div>
                        <div class="item border-top-pink">xamarin</div>
                        <div class="item border-top-pink">.net maui</div>
                        <div class="item border-top-pink">switft</div>
                        <div class="item border-top-pink">kotlin</div>
                    </div>
                </section>


                <section class="technology">
                    <hr class="border-top-cyan" />
                    <h2>Platforms</h2>
                    <p>
                        In the current dynamic and fast pacing world each organization is bound to
                        provide options for its customers and employees to use and access software
                        systems on the road through a mobile device. We are here to help you with the
                        development of iOS, Android, Windows Phone, and other devices on the market.
                        eLando is focusing on enterprise grade mobile solutions that allow seamless
                        user experience and integration with backend systems.
                    </p>
                    <p>
                        We can offer native development skills for each mobile device platform,
                        as well as application of the multi-platform development frameworks that
                        allow faster time to market, addressing more than one device types with one shot,
                        while still preserving the quality of the solution and the user experience.
                        Our QA engineers are specialized in testing on mobile platforms,
                        equipped with many different devices, emulators, and tools.
                    </p>
                    <div class="items" data-columns="5">
                        <div class="item border-top-pink">aws</div>
                        <div class="item border-top-pink">azure</div>
                        <div class="item border-top-pink">gcp</div>
                        <div class="item border-top-pink">salesforce</div>
                        <div class="item border-top-pink">heroku</div>
                    </div>
                </section>

            </section>

            <section class="footer">
                <div>
                    <h2>LET'S PARTNER UP!</h2>
                    <p>Contact us to start your digital journey with us!</p>
                </div>
            </section>
        </section>

    </Layout>
</template>

<style scoped lang="scss">
.technology {
    max-width: 1200px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: flex-start;
    align-items: center;
    gap: 1rem;
    margin-bottom: 6rem;

    h2 {
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 130%;
    }
    p {
        font-family: 'DM Sans', serif;
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 150%;
        letter-spacing: 0.01em;
    }

    .items {
        --columns-count: 2;
        margin: 0 auto;
        display: grid;
        gap: 1rem;
        width: 1200px;
        max-width: 1200px;
        grid-template-columns: repeat(var(--columns-count), 1fr);
        margin-bottom: 3rem;

        //display: flex;
        //flex-direction: row;
        //justify-content: flex-start;
        //align-items: center;
        //flex-wrap: wrap;
        //align-content: center;
        //gap: 15px;
        margin-bottom: 3rem;

        .item {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 20px 32px;
            background: rgba(21, 21, 29, 0.81);
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 150%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
    }

    .items[data-columns="3"] {
        --columns-count: 3;
    }
    .items[data-columns="4"] {
        --columns-count: 4;
    }
    .items[data-columns="5"] {
        --columns-count: 5;
    }
    .items[data-columns="6"] {
        --columns-count: 6;
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
    div {
        background-image: url("../../../public/static/shapes/shape-3.svg");
        background-repeat: no-repeat, no-repeat;
        background-position: center, bottom;
        width: 1366px;
        height: 389px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        flex-wrap: wrap;
        align-items: center;
        max-width: 1366px;
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

@media only screen and (max-width: 1200px) {
    .items {
        --columns-count: 4!important;
    }
}
@media only screen and (max-width: 992px) {
    .items {
        --columns-count: 3!important;
    }
}
@media only screen and (max-width: 767px) {
    .items {
        --columns-count: 2!important;
    }
}
</style>
