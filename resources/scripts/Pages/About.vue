<script setup>
import Layout from '../Layouts/Default'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })

</script>

<template>
    <Layout>
        <Head>
            <title>About</title>
            <meta head-key="description" name="description" content="About description" />
        </Head>


        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <div class="about-us">
                <div class="wrap">
                    <h1>Aboout us</h1>
                    <p>
                        eLando is a professional services company and we have provided technology expertise and
                        software solutions for years. Our services range from complete design and development of
                        custom software applications to maintenance of existing applications.
                    </p>
                </div>

                <img src="static/center-baloon.svg" alt="">
            </div>


            <div class="our-team">

                    <h2>Our team</h2>

                <div class="team">
                    <div class="member cyan">
                        <img src="static/about/avatar-1.png" alt="" />
                        <div class="info">
                            <p class="name">Stanimir boychev</p>
                            <p class="position">CEO, Founder</p>
                            <p class="description">
                                Mr. Boychev has managed and facilitated the communication between the senior management,
                                business’ stakeholders, the technical architects, and developers.
                            </p>
                        </div>
                    </div>
                    <div class="member pink ">
                        <img src="static/about/avatar-2.png" alt="" />
                        <div class="info">
                            <p class="name">Georgi Tonchev</p>
                            <p class="position">Chief business development officer</p>
                            <p class="description">
                                Georgi is a highly experienced problem solver specialising in developing
                                client-centric strategic solutions which help solve problems,
                                achieve objectives and generate revenue.
                            </p>
                        </div>
                    </div>
                    <div class="member cyan">
                        <img src="static/about/avatar-3.png" alt="" />
                        <div class="info">
                            <p class="name">Rali Ralev</p>
                            <p class="position">Chief technology officer</p>
                            <p class="description">
                                Rali is focused on the technological and scientific issues within the organization.
                                He is an experienced executive with a strong background in the FinTech sector.
                            </p>
                        </div>
                    </div>
                </div>

            </div>



        </section>
    </Layout>
</template>

<style lang="scss">
    .about-us {
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
            max-width: 830px;
            justify-content: center;
            flex-direction: row;
            align-content: center;
            flex-wrap: wrap;
            align-items: center;
            margin-top: 3rem;
            margin-bottom: 3rem;
            h1 {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                align-content: center;
                justify-content: center;
                align-items: center;
                font-style: normal;
                font-weight: 600;
                font-size: 62px;
                line-height: 93px;
            }
            p {
                font-family: 'DM Sans', serif;
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 26px;
                text-align: center;

                color: #A1A6B1;
            }
        }
    }

    .our-team {
        margin-top: 3rem;
        margin-bottom: 3rem;
        h2 {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            font-style: normal;
            font-weight: 300;
            font-size: 3.125rem;
            line-height: 75px;
        }
        .team {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            .member.cyan {
                border-top: 1.5px solid #00E5FF;
            }
            .member.pink {
                border-top: 1.5px solid #FF83B7;
            }

            .member {
                background-image: url("../../../public/static/about/member.svg");
                background-repeat: no-repeat, repeat;
                background-position: 2rem 1rem;
                background-color: rgba(21, 21, 29, 0.81);
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 3rem;
                gap: 16px;
                img {
                    border-radius: 1.5%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding: 0;
                    gap: 3.75px;

                }
                .info {
                    max-width: 350px;
                    display: flex;
                    flex-direction: column;
                    flex-wrap: wrap;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                    p.name {
                        font-style: normal;
                        font-weight: 700;
                        font-size: 20px;
                        line-height: 150%;
                        letter-spacing: 0.1em;
                        text-transform: uppercase;
                    }
                    p.position {
                        font-style: normal;
                        font-weight: 300;
                        font-size: 12px;
                        line-height: 150%;
                        letter-spacing: 0.1em;
                    }
                    p.description {
                        margin-top: 1rem;
                        font-family: 'DM Sans', serif;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 12px;
                        line-height: 150%;
                        text-align: center;
                        letter-spacing: 0.1em;
                        color: #A1A6B1;
                    }

                }
            }
        }
    }
</style>
