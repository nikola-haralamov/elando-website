<script setup>
import Layout from '../Layouts/Default';
import { Head } from '@inertiajs/vue3';

defineProps({ user: Object });

</script>

<template>
    <Layout>
        <Head>
            <title>News</title>
            <meta head-key="description" name="description" content="News" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="row">
                <div class="wrapper small">
                    <h1>News</h1>
                    <p class="gray">
                        eLando is a professional services company and we have provided technology expertise and
                        software solutions for years. Our services range from complete design and development of
                        custom software applications to maintenance of existing applications.
                    </p>
                </div>
            </section>

            <section class="row">
                <section class="news">
                    <div class="items">
                        <div class="item border-top-cyan">
                            <img src="/static/news/new-1.png" alt="Using ChatGPT for software development?" />
                            <h3>Using ChatGPT for software development?</h3>
                            <div class="dates">
                                <p class="date">
                                    <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                                    18.03.2023
                                </p>
                                <p class="time">
                                    <img src="/static/icons/clock.svg" width="24" height="24" alt="date" />
                                    7 min. read
                                </p>
                            </div>
                            <p>
                                eLando is a professional services company and we have provided technology expertise and
                                software solutions for years. Our services range from complete design and development
                                of custom software applications to maintenance of existing applications.
                            </p>
                            <div class="read-more">
                                <a href="#">Read more now</a>
                                <img src="/static/icons/arrow-left.svg" alt="" />
                            </div>
                        </div>
                        <div class="item border-top-pink">
                            <img src="/static/news/new-1.png" alt="Using ChatGPT for software development?" />
                            <h3>Using ChatGPT for software development?</h3>
                            <div class="dates">
                                <p class="date">
                                    <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                                    18.03.2023
                                </p>
                                <p class="time">
                                    <img src="/static/icons/clock.svg" width="24" height="24" alt="date" />
                                    7 min. read
                                </p>
                            </div>
                            <p>
                                eLando is a professional services company and we have provided technology expertise and
                                software solutions for years. Our services range from complete design and development
                                of custom software applications to maintenance of existing applications.
                            </p>
                            <div class="read-more">
                                <a href="#">Read more now</a>
                                <img src="/static/icons/arrow-left.svg" alt="" />
                            </div>
                        </div>
                        <div class="item border-top-purple">
                            <img src="/static/news/new-1.png" alt="Using ChatGPT for software development?" />
                            <h3>Using ChatGPT for software development?</h3>
                            <div class="dates">
                                <p class="date">
                                    <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                                    18.03.2023
                                </p>
                                <p class="time">
                                    <img src="/static/icons/clock.svg" width="24" height="24" alt="date" />
                                    7 min. read
                                </p>
                            </div>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups
                                operating in Central and Eastern Europe. The group is focused on delivering
                                a full range of insurance products in the areas of general, health and life insurance.
                            </p>
                            <div class="read-more">
                                <a href="#">Read more now</a>
                                <img src="/static/icons/arrow-left.svg" alt="" />
                            </div>
                        </div>

                        <div class="item border-top-yellow">
                            <img src="/static/news/new-1.png" alt="Using ChatGPT for software development?" />
                            <h3>Using ChatGPT for software development?</h3>
                            <div class="dates">
                                <p class="date">
                                    <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                                    18.03.2023
                                </p>
                                <p class="time">
                                    <img src="/static/icons/clock.svg" width="24" height="24" alt="date" />
                                    7 min. read
                                </p>
                            </div>
                            <p>
                                eLando is a professional services company and we have provided technology expertise and
                                software solutions for years. Our services range from complete design and development
                                of custom software applications to maintenance of existing applications.
                            </p>
                            <div class="read-more">
                                <a href="#">Read more now</a>
                                <img src="/static/icons/arrow-left.svg" alt="" />
                            </div>
                        </div>
                        <div class="item border-top-red">
                            <img src="/static/news/new-1.png" alt="Using ChatGPT for software development?" />
                            <h3>Using ChatGPT for software development?</h3>
                            <div class="dates">
                                <p class="date">
                                    <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                                    18.03.2023
                                </p>
                                <p class="time">
                                    <img src="/static/icons/clock.svg" width="24" height="24" alt="date" />
                                    7 min. read
                                </p>
                            </div>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups
                                operating in Central and Eastern Europe. The group is focused on delivering
                                a full range of insurance products in the areas of general, health and life insurance.
                            </p>
                            <div class="read-more">
                                <a href="#">Read more now</a>
                                <img src="/static/icons/arrow-left.svg" alt="" />
                            </div>
                        </div>

                    </div>
                </section>
            </section>

            <section class="footer">
                <div>
                </div>
            </section>
        </section>
    </Layout>
</template>

<style scoped lang="scss">
@import "../../assets/styles/variables.scss";
.news {
    max-width: 1106px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-bottom: 3rem;
    h2 {
        font-style: normal;
        font-weight: 300;
        font-size: 50px;
        line-height: 75px;
    }

    .items {
        max-width: 1106px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: flex-start;
        justify-content: flex-start;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 3rem;

        .item:first-child {
            max-width: 1106px;
            min-height: 511px;
        }

        .item {
            max-width: 543px;
            min-height: 420px;
            background: rgba(21, 21, 29, 0.81);
            display: flex;
            align-items: flex-start;
            gap: 12px;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: flex-start;
            justify-content: flex-start;


            .dates, .date, .time, .read-more {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-content: flex-start;
                justify-content: flex-start;
                align-items: flex-start;
            }

            .dates, .date, .time {
                font-style: normal;
                font-weight: 300;
                font-size: 14px;
                line-height: 21px;
            }
            .date, .time {
                gap: 0.5rem;
            }

            .read-more {
                margin-top: 2.25rem;
                a {
                    padding-left: 18px;
                    padding-right: 18px;
                    font-style: normal;
                    font-weight: 700;
                    font-size: 16px;
                    line-height: 150%;
                    text-align: center;
                }
                img {
                    margin-top: 0.25rem;
                }
            }


            h3 {
                padding-left: 18px;
                padding-right: 18px;
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 36px;
            }
            p  {
                padding-left: 18px;
                padding-right: 18px;
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 21px;
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
        background-image: url("../../../public/static/shapes/shape-9.svg");
        background-repeat: no-repeat, no-repeat;
        background-position: center, bottom;
        width: 1172px;
        height: 353px;
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
