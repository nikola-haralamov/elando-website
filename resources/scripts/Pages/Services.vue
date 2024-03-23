<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Layout>
        <Head>
            <title>Services</title>
            <meta head-key="description" name="description" content="Services description" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="row">
                <div class="wrapper small">
                    <h1>Services</h1>
                    <p>
                        eLando is a professional services company and we have provided technology expertise and
                        software solutions for years. Our services range from complete design and development of
                        custom software applications to maintenance of existing applications.
                    </p>
                </div>
            </section>

            <section class="row">
                <div class="services">
                    <div class="service border-top-cyan">
                        <img src="/static/icons/it-consulting-services.svg" alt="Tech consulting services" />
                        <h3>Tech consulting services</h3>
                        <p>
                            Advising organizations on how best to use information technology
                            in achieving their business objectives.
                        </p>
                    </div>
                    <div class="service border-top-pink">
                        <img src="/static/icons/software-engineering-services.svg" alt="Software engineering services" />
                        <h3>Software engineering services</h3>
                        <p>
                            We encompass the entire software project lifecycle, from initial requirement gathering
                            to comprehensive development, followed by continuous maintenance and support.
                        </p>
                    </div>
                    <div class="service border-top-purple">
                        <img src="/static/icons/mobile-solutions.svg" alt="Mobile solutions" />
                        <h3>Mobile solutions</h3>
                        <p>
                            Advising organizations on how best to use mobile technology in achieving
                            their business objectives. Estimate, manage, implement, deploy.
                        </p>
                    </div>
                    <div class="service border-top-yellow">
                        <img src="/static/icons/blockchain.svg" alt="Blockchain" />
                        <h3>Blockchain</h3>
                        <p>
                            Our specialists are able to advise you and apply the best
                            practices in modern software integration like SOA, BPM, EAI
                        </p>
                    </div>
                    <div class="service border-top-red">
                        <img src="/static/icons/cyber-security.svg" alt="Cyber Security" />
                        <h3>Cyber Security</h3>
                        <p>
                            The digital shift is presenting your company with
                            fresh opportunities, yet it also unveils new security threats.
                            We stand ready to fortify your defenses against them.
                        </p>
                    </div>
                    <div class="service border-top-blue">
                        <img src="/static/icons/reselling-software-licences.svg" alt="Reselling software licences" />
                        <h3>Reselling software licences</h3>
                        <p>
                            We are happy to be able to provide you with complete solution offering for
                            your needs including the needed hardware and software licenses.
                        </p>
                    </div>
                </div>
            </section>

            <section class="testimonials">
                <div class="wrap">
                    <h2>Testimonials</h2>
                    <div class="items">
                        <div class="item border-top-yellow">
                            <p>
                                The best solution for anyone who wants to work a
                                flexible schedule but still earn a full-time income.
                            </p>
                            <h3>Macauley Herring</h3>
                            <span>
                                CEO & Founder at Fle
                            </span>
                        </div>
                        <div class="item border-top-blue">
                            <p>
                                The best solution for anyone who wants to work a
                                flexible schedule but still earn a full-time income.
                            </p>
                            <h3>Macauley Herring</h3>
                            <span>
                                CEO & Founder at Fle
                            </span>
                        </div>
                        <div class="item border-top-red">
                            <p>
                                The best solution for anyone who wants to work a
                                flexible schedule but still earn a full-time income.
                            </p>
                            <h3>Macauley Herring</h3>
                            <span>
                                CEO & Founder at Fle
                            </span>
                        </div>
                    </div>
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
.services {
    max-width: 1250px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-bottom: 3rem;
    .service {
        max-width: 400px;
        height: 250px;
        background-image: url("../../../public/static/shapes/shape-5.svg");
        background-repeat: no-repeat, no-repeat;
        background-position: -1rem 0rem;
        background-color: rgba(17, 18, 24);
        //background-color: rgba(21, 21, 29, 0.81);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1rem;
        gap: 16px;
        img {
            border-radius: 1.5%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0;
            gap: 3.75px;
        }

        h3 {
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            text-align: center;
        }
        p  {
            font-family: $font-small;
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 150%;
            text-align: center;
            letter-spacing: 0.1em;
            color: #A1A6B1;
        }
    }
}


.testimonials {
    width: 100%;
    display: flex;
    padding: 0;
    gap: 20px;
    justify-content: center;
    flex-direction: row;
    align-content: center;
    flex-wrap: wrap;
    align-items: center;
    margin-bottom: 3rem;
    .wrap {
        max-width: 1100px;
        justify-content: center;
        flex-direction: row;
        align-content: center;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 3rem;
        margin-bottom: 3rem;
        h2 {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            font-style: normal;
            font-weight: 300;
            font-size: 50px;
            line-height: 130%;
        }
        .items {
            gap: 25px;
            max-width: 1100px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            .item {
                //background-color: rgba(17, 18, 24);
                background-color: rgba(21, 21, 29, 0.81);
                background-image: url("../../../public/static/shapes/shape-6.svg");
                background-repeat: no-repeat, no-repeat;
                background-position: right;
                max-width: 350px;
                min-height: 210px;
                padding: 10px 10px 10px 10px;
                p {
                    margin-top: 10px;
                    margin-left: 10px;
                    margin-bottom: 25px;
                    font-family: $font-small;
                    font-style: normal;
                    font-weight: 400;
                    font-size: 18px;
                    line-height: 130%;
                    max-width: 320px;
                }
                h3 {
                    margin-top: 50px;
                    margin-left: 10px;
                    font-style: normal;
                    font-weight: 700;
                    font-size: 16px;
                    line-height: 130%;
                }
                span {
                    margin-top: 5px;
                    margin-left: 10px;
                    font-family: $font-small;
                    font-style: normal;
                    font-weight: 400;
                    font-size: 12px;
                    line-height: 16px;
                    text-align: center;
                    color: #8896AB;
                }
            }
        }
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
</style>
