<script setup>
import Layout from '../Layouts/Default';
import { Head } from '@inertiajs/vue3';
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

            <section class="row">
                <div class="wrapper m-8">
                    <h1>Technology</h1>
                    <p>
                        eLando offers a full spectrum of software development and
                        technology consulting services, drawing on more than ten
                        years of experience and a deep understanding of cutting-edge technologies.
                    </p>
                    <p>
                        Our team, comprising skilled tech experts from various sectors,
                        delivers sophisticated, integrated solutions,
                        empowering businesses to seize new opportunities
                        and achieve a competitive advantage.
                    </p>
                </div>
            </section>

            <section class="row">
                <div class="wrapper big m-8">
                    <section class="technology">
                        <hr class="border-top-cyan" />
                        <h2>Front-end</h2>
                        <p>
                            Front-end development centres on designing and building the
                            user interface of websites and applications, emphasizing
                            the visual and interactive aspects that users engage
                            with directly. This process blends coding expertise,
                            design acumen, and user-centric principles to craft an
                            immersive and user-friendly experience.
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
                            Backend development pertains to the essential, unseen elements
                            that drive a software application or website.
                            This includes server-side tasks, database management,
                            and the critical logic for data processing, user authentication,
                            and facilitating communication between the server and
                            the client interface.
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
                            Mobile application development encompasses the use of diverse
                            technologies to craft applications for mobile devices,
                            including smartphones and tablets. This field utilizes specific
                            programming languages, such as Swift for iOS and
                            Java or Kotlin for Android, along with frameworks
                            like React Native and Flutter for cross-platform
                            app creation. Essential tools like Xcode and Android Studio
                            are integral for the development, testing, and
                            deployment of these mobile applications.
                        </p>
                        <div class="items" data-columns="4">
                            <div class="item border-top-pink">ios</div>
                            <div class="item border-top-pink">android</div>
                            <div class="item border-top-pink">kotlin</div>
                            <div class="item border-top-pink">swift</div>
                            <div class="item border-top-pink">flutter</div>
                            <div class="item border-top-pink">react native</div>
                            <div class="item border-top-pink">xamarin</div>
                            <div class="item border-top-pink">.net maui</div>
                        </div>
                    </section>

                    <section class="technology">
                        <hr class="border-top-cyan" />
                        <h2>Platforms</h2>
                        <p>
                            In today's fast-paced and dynamic environment, it's essential
                            for organisations to provide mobile access to their software
                            systems for customers and employees alike. eLando is here
                            to assist in developing mobile solutions for iOS, Android,
                            Windows Phone, and other mobile devices, focusing on
                            enterprise-grade applications that ensure a seamless
                            user experience and integrate effortlessly with
                            backend systems.
                        </p>
                        <p>
                            We offer specialised native development for each mobile platform,
                            as well as expertise in multi-platform development frameworks
                            that enhance time-to-market efficiency. This approach addresses
                            multiple device types simultaneously without compromising
                            solution quality or user experience. Additionally, our QA
                            engineers are experts in mobile platform testing, equipped
                            with a variety of devices, emulators, and tools to ensure the
                            highest quality standards.
                        </p>
                        <div class="items" data-columns="5">
                            <div class="item border-top-pink">aws</div>
                            <div class="item border-top-pink">azure</div>
                            <div class="item border-top-pink">gcp</div>
                            <div class="item border-top-pink">salesforce</div>
                            <div class="item border-top-pink">heroku</div>
                        </div>
                    </section>
                </div>
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
@import "../../assets/styles/variables.scss";
.technology {
    max-width: 1200px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: flex-start;
    align-items: center;
    gap: 1rem;
    //margin: 2rem;

    h2 {
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 130%;
    }
    p {
        font-family: $font-small;
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 150%;
        letter-spacing: 0.01em;
    }

    .items {
        width: 100%;
        --columns-count: 2;
        display: grid;
        gap: 1rem;
        max-width: 1200px;
        grid-template-columns: repeat(var(--columns-count), 1fr);
        margin: 0 auto 3rem;

        //display: flex;
        //flex-direction: row;
        //justify-content: flex-start;
        //align-items: center;
        //flex-wrap: wrap;
        //align-content: center;
        //gap: 15px;
        //margin-bottom: 3rem;

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
        //max-width: 1366px;
        //min-height: 389px;
        h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 90px;
        }
        p {
            font-family: $font-small;
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
        //width: 1100px;
        --columns-count: 4!important;
    }

    footer {

    }
}
@media only screen and (max-width: 992px) {
    .items {
        //width: 950px;
        --columns-count: 3!important;
    }
}
@media only screen and (max-width: 767px) {
    .items {
        //width: auto!important;
        --columns-count: 2!important;
    }
}

@media only screen and (max-width: 1200px) {
    .items {
        //width: 1100px;
        --columns-count: 4!important;
    }

    footer {

    }
}

</style>
