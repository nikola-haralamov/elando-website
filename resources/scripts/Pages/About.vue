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

            <section class="about-us">
                <div class="wrap">
                    <h1>Aboout us</h1>
                    <p>
                        eLando is a professional services company and we have provided technology expertise and
                        software solutions for years. Our services range from complete design and development of
                        custom software applications to maintenance of existing applications.
                    </p>
                </div>

                <img src="static/center-baloon.svg" alt="">
            </section>


            <section class="our-team">
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
            </section>


            <section class="values">
                <div class="wrap">
                    <h2>Values of the team</h2>
                    <p>Learn what makes us to drive this business and achieve every client need</p>
                    <div class="items">
                        <div class="item">
                            <img src="static/icons/innovation.svg" alt="Innovation" />
                            <h3>Innovation</h3>
                            <p>
                                We embrace creativity and fresh thinking, and are always looking
                                for new ways to solve problems and improve our products.
                            </p>
                        </div>
                        <div class="item">
                            <img src="static/icons/excellence.svg" alt="Excellence" />
                            <h3>Excellence</h3>
                            <p>
                                We hold ourselves to the highest standards of performance
                                and quality, and are constantly striving to improve.
                            </p>
                        </div>
                        <div class="item">
                            <img src="static/icons/customer-focus.svg" alt="Customer focus" />
                            <h3>Customer focus</h3>
                            <p>
                                We prioritize the needs and goals of our customers above all else,
                                and strive to exceed their expectations with every interaction.
                            </p>
                        </div>
                        <div class="item">
                            <img src="static/icons/mind.svg" alt="Growth mindset" />
                            <h3>Growth mindset</h3>
                            <p>
                                We embrace challenges and see them as opportunities to learn and improve,
                                both individually and as a company.
                            </p>
                        </div>
                        <div class="item">
                            <img src="static/icons/user-centered.svg" alt="User-centricity" />
                            <h3>User-centricity</h3>
                            <p>
                                We place our users at the center of everything we do, and are dedicated
                                to creating software that is intuitive, easy to use, and solves their needs.
                            </p>
                        </div>
                    </div>
                </div>
            </section>



            <section class="careers">
                <div class="wrap">
                    <h2>Careers</h2>

                    <div class="items">
                        <div class="item cyan">
                            <h3>Java software engineer</h3>
                            <span class="location">
                                <img src="static/icons/location.svg" alt="London, England" />
                                London, England
                            </span>
                            <p>
                                Our leadership team has extensive experience in managing leading
                                IT companies and proven track record of delivering successful
                                projects for international clients
                            </p>
                            <a href="#">Apply now</a>

                        </div>
                        <div class="item pink">
                            <h3>Java software engineer</h3>
                            <span class="location">
                                <img src="static/icons/location.svg" alt="London, England" />
                                London, England
                            </span>
                            <p>
                                Our leadership team has extensive experience in managing leading
                                IT companies and proven track record of delivering successful
                                projects for international clients
                            </p>
                            <a href="#">Apply now</a>
                        </div>
                    </div>
                </div>
            </section>



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

    .values {
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
            max-width: 1000px;
            justify-content: center;
            flex-direction: row;
            align-content: center;
            flex-wrap: wrap;
            align-items: center;
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
                font-size: 50px;
                line-height: 130%;
            }
            p {
                font-family: 'DM Sans', serif;
                font-style: normal;
                font-weight: 500;
                font-size: 20px;
                line-height: 150%;
                text-align: center;
                letter-spacing: 0.01em;
                color: #A1A6B1;
            }
            .items {
                gap: 10px;
                max-width: 1000px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-content: center;
                justify-content: center;
                align-items: center;
                h3 {
                    font-style: normal;
                    font-weight: 300;
                    font-size: 24px;
                    line-height: 32px;
                    text-align: center;
                }
                p {
                    font-family: 'DM Sans', serif;
                    font-style: normal;
                    font-weight: 500;
                    font-size: 14px;
                    line-height: 130%;
                    text-align: center;
                    letter-spacing: 0.1em;
                    color: #A1A6B1;
                }
                .item {
                    gap: 15px;
                    padding: 20px;
                    max-width: 320px;
                    display: flex;
                    flex-direction: column;
                    flex-wrap: wrap;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                }
            }
        }
    }

    .careers {
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
            max-width: 1000px;
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
                max-width: 1000px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-content: center;
                justify-content: center;
                align-items: center;


                .item.cyan {
                    border-top: 1.1662px solid #4BD2E4;
                }

                .item.pink {
                    border-top: 1.1662px solid #FF83B7;
                }

                .item {
                    background: rgba(21, 21, 29, 0.81);
                    background: linear-gradient(90deg, rgba(17,20,27,1) 0%, rgba(17,20,27,1) 86%, rgba(49,82,91,1) 100%);
                    min-width: 450px;
                    min-height: 215px;
                    padding: 40px 40px 20px 20px;
                    h3 {
                        margin: 5px 5px;
                        max-width: 400px;
                        font-style: normal;
                        font-weight: 700;
                        font-size: 24px;
                        line-height: 150%;
                        letter-spacing: 0.1em;
                        text-transform: uppercase;
                    }
                    .location {
                        margin: 5px 5px;
                        max-width: 400px;
                        font-style: normal;
                        font-weight: 300;
                        font-size: 12px;
                        line-height: 150%;
                        letter-spacing: 0.1em;
                        text-transform: uppercase;
                        img {
                            display: inline-block;
                            height: 20px;
                            width: 20px;
                        }
                    }
                    p {
                        margin: 10px 10px;
                        max-width: 400px;
                        font-family: 'DM Sans', serif;
                        font-style: normal;
                        font-weight: 500;
                        font-size: 12px;
                        line-height: 150%;
                        letter-spacing: 0.1em;
                        color: #A1A6B1;
                    }
                    a {
                        margin: 5px 5px;
                        max-width: 400px;
                        font-style: normal;
                        font-weight: 700;
                        font-size: 16px;
                        line-height: 150%;
                        text-align: center;
                        color: #FFFFFF;
                    }
                }
            }


        }
    }

</style>
